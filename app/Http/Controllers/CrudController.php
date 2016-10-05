<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\barang;

class CrudController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$barangs = barang::all();
return view('index', compact('barangs'));
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('create');
}

/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$barangs = new barang();
$barangs->name = $request->name;
$barangs->harga = $request->harga;
$barangs->save();
return redirect()->route('home.index');
}

/**
* Display the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
//
}

/**
* Show the form for editing the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
$barangs = barang::findOrFail($id);
return view('edit', compact('barangs'));
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param int $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$barangs = barang::findOrFail($id);
$barangs->name = $request->name;
$barangs->harga = $request->harga;
$barangs->save();
return redirect()->route('home.index');
}

/**
* Remove the specified resource from storage.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
$barangs = barang::findOrFail($id);
$barangs->delete();
return redirect()->route('home.index');
}
}