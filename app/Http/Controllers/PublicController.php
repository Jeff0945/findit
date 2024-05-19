<?php

namespace App\Http\Controllers;

use App\Models\Item;

class PublicController extends Controller
{
    public function index()
    {
        $items = Item::with(['attachment'])
            ->latest()
            ->take(4)
            ->get();
        
        return view('public.index', compact('items'));
    }
    
    public function allItems()
    {
        $items = Item::with(['attachment'])->get();
        
        return view('public.all-items', compact(['items']));
    }
}
