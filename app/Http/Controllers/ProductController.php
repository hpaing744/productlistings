<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function home(){
        return view('allproducts');
    }
    public function index(){
        return view('products.index',[
            'products'=>Product::latest()->filter(request(['color','search']))->paginate(6)
        ]);
    }
    public function show(Product $product){
        return view('products.show',[
            'product'=>$product
        ]);
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        $formFields=$request->validate([
            'name'=>'required',
            'colors'=>'required',
            'description'=>'required',
            'logo'=>'required',
            'company'=>['required',Rule::unique('products','company')],
            'email'=>['required','email']
        ]);

        if($request->hasfile('logo')){
            $formFields['logo']=$request->file('logo')->store('logos','public');
        }

        Product::create($formFields);

        return redirect('/product')->with('message','Item created successfully!');
    }
    public function edit(Product $product){
        
        return view('products.edit',['product'=>$product]);
    }
    public function update(Request $request,Product $product){
        $formFields=$request->validate([
            'name'=>'required',
            'colors'=>'required',
            'description'=>'required',
            'company'=>['required'],
            'logo'=>'required',
            'email'=>['required','email']
        ]);

        if($request->hasfile('logo')){
            $formFields['logo']=$request->file('logo')->store('logos','public');
        }

        $product->update($formFields);

        return redirect('/product')->with('error','Item updated successfully!');
    }
    public function destroy(Product $product){
        $product->delete();

        return redirect('/product')->with('delete','Item deleted successfully!');
    }
}
