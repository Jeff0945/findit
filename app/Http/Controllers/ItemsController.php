<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest as Request;
use App\Models\Item;
use App\Models\PersonalInfo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Item::with(['status'])->latest()->get();
        
        return view('admin.items.index', compact('items'));
    }
    
    public function create()
    {
        $personalInfos = PersonalInfo::orderBy('name')->get();
        
        return view('admin.items.create', compact('personalInfos'));
    }
    
    public function store(Request $request): RedirectResponse
    {
        $attributes = $this->processAttributes($request);
        
        $item = Item::create([
            ...$attributes,
            'created_by' => Auth::user()->id
        ]);
        
        $item->addStatus($request);
        
        if ($request->hasFile('attachment')) {
            $item->addAttachment($request->file('attachment'));
        }
        
        return redirect()->route('admin.items.index');
    }
    
    public function show(Item $item)
    {
        $item->load([
            'attachment',
            'status',
            'reportedBy',
            'acknowledgedBy',
            'claimedBy',
            'releasedBy'
        ]);
        
        return view('admin.items.show', compact('item'));
    }
    
    public function edit(Item $item)
    {
        $item->load([
            'attachment',
            'status',
            'reportedBy',
            'acknowledgedBy',
            'claimedBy',
            'releasedBy'
        ]);
        
        $personalInfos = PersonalInfo::orderBy('name')->get();
        
        return view('admin.items.edit', compact('item', 'personalInfos'));
    }
    
    public function update(Request $request, Item $item): RedirectResponse
    {
        $item = tap($item)->update($this->processAttributes($request));
        
        $item->addStatus($request);
        
        if ($request->hasFile('attachment')) {
            $item->addAttachment($request->file('attachment'));
        }
        
        return redirect()->route('admin.items.show', compact('item'));
    }
    
    public function destroy($id): void {}
    
    /**
     * @param  Request  $request
     *
     * @return mixed
     */
    private function processAttributes(Request $request): mixed
    {
        $attributes = $request->validated();
        
        $fields = [
            'claimed_by' => 'castClaimed',
            'reported_by' => 'castReported',
            'released_by' => 'castReleased',
            'acknowledged_by' => 'castAcknowledged',
        ];
        
        foreach ($fields as $field => $method) {
            if ($request->filled($field)) {
                $attributes[$field] = PersonalInfo::$method($request);
            }
        }
        
        return $attributes;
    }
}
