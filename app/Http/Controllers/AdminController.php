<?php

namespace App\Http\Controllers;

use App\Models\Item;

class AdminController extends Controller
{
    public function index()
    {
        $claimedCount   = Item::whereRelation('status', 'value', 'claimed');
        $unclaimedCount = Item::whereRelation('status', 'value', 'unclaimed');
        $donatedCount   = Item::whereRelation('status', 'value', 'donated');

        return view('admin.index', [
            'claimed'   => $claimedCount->count(),
            'unclaimed' => $unclaimedCount->count(),
            'donated'   => $donatedCount->count(),
        ]);
    }

    public function show($status)
    {
        // TODO: Add chart view functionality
    }
}
