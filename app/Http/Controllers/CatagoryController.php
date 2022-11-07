<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;

class CatagoryController extends Controller
{
public function show_table()
{
    $catagories= Catagory::all();
    return view('table', ['catagories'=>$catagories]);
}
public function create_catagory()
{
    return view('new');
}
public function store_catagory(Request $request)
{
    //validate
    // $validated = $request->validate([
    //     'title'=> 'required|unique:catagories|max:200',
    // ]);
    $catagory= new Catagory;
    $catagory->name=$request->name;
    $catagory->save();
    return redirect('/')->with('message', 'Success');
}
public function edit_catagory($id)
{
    $catagory=Catagory::where('id',$id)->first();
    return view('edit', compact('catagory'));
}
public function update_catagory(Request $request, $id)
{
    $catagory= Catagory::where('id',$id)->first();
    $catagory->name=$request->name;
    $catagory->save();
    return redirect ('/');
}
public function delete_catagory($id)
{
    $catagory=Catagory::where('id',$id)->delete();
    return redirect('/');
}
}
