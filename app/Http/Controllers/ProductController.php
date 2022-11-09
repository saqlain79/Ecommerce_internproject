<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show_product()
    {
       return view ('admin.dashpages.showproduct');

    }
    public function create_product()
{
    return view('admin.dashpages.createproduct');
}
public function store_product(Request $request)
{
    //validate
    // $validated = $request->validate([
    //     'title'=> 'required|unique:catagories|max:200',
    // ]);
    $product= new Product;
    $product->title=$request->title;
    $product->description=$request->description;
    $product->quantity=$request->quantity;
    $product->price=$request->price;
    $product->catagory=$request->catagory;

    $product->save();
    return redirect('/show_product');
}
public function edit_product($id)
{
    $product=Product::where('id',$id)->first();
    return view('', compact('product'));
}
public function update_product(Request $request, $id)
{
    $product= Product::where('id',$id)->first();
    $product->title=$request->title;
    $product->save();
    return redirect ('');
}
public function delete_product($id)
{
    $catagory=Product::where('id',$id)->delete();
    return redirect('');
}
}
