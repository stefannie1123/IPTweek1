<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Events\LogEvent;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {
        $items = Item::all();
        return view('item', compact('items'));
    }

    public function create() {
        return view('create');
    }

    public function insert(Request $request) {
        $request->validate([
            'name'         => 'required',
            'description'   => 'required',
            'price'         => 'required|numeric',
            'quantity'      => 'required|numeric',
        ]);
        $item = Item::create($request->all());
        event(new LogEvent("Deleted an item with ID#$item->id"));
        return redirect('/item');
    }

    public function edit(Item $item) {
        return view('update', compact('item'));   
    }

    public function update(Item $item, Request $request) {
        $request->validate([
            'name'         => 'required',
            'description'   => 'required',
            'price'         => 'required|numeric',
            'quantity'      => 'required|numeric',
        ]);       
        $item->update($request->all());
        event(new LogEvent("Deleted an item with ID#$item->id"));
        return redirect('/item');        
    }

    public function delete(Item $item) {
        return view('delete', compact('item'));   
    }

    public function destroy(Item $item, Request $request) {  
        $item->delete();
        event(new LogEvent("Deleted an item with ID#$item->id"));
        return redirect("/item");
    }
}
