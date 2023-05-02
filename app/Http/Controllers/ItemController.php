<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data_item = \App\Models\Item::all();
        return view('home',['data_item' => $data_item]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        \App\Models\Item::create($request->all());
        
        return redirect('/home')->with('success','Data inputed successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = \App\Models\Item::find($id);
        return view('item.edit',['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = \App\Models\Item::find($id);
        $item->update($request->all());
        return redirect('/home')->with('success','Data updated successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $item = \App\Models\Item::find($id);
        $item->delete();
        return redirect('/home')->with('success','Data deleted successfully'); 
    }
}
