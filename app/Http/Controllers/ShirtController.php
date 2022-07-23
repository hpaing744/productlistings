<?php

namespace App\Http\Controllers;

use App\Models\Shirt;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ShirtController extends Controller
{
    public function index(){
        return view('shirts.index',[
            'shirts'=>Shirt::latest()->filter(request(['color','search','size']))->paginate(6)
        ]);
    }
    public function show(Shirt $shirt){
        return view('shirts.show',[
            'shirt'=>$shirt
        ]);
    }
    public function shirtcreate(){
        return view('shirts.shirtcreate');
    }
    public function shirtstore(Request $request){
        $formFields=$request->validate([
            'name'=>'required',
            'company'=>['required',Rule::unique('shirts','company')],
            'email'=>['required','email'],
            'colors'=>'required',
            'sizes'=>'required',
            'logo'=>'required',
            'description'=>'required'
        ]);

        if($request->hasfile('logo')){
            $formFields['logo']=$request->file('logo')->store('logos','public');
        }

        Shirt::create($formFields);

        return redirect('/shirt')->with('message','New Shirt has been created!');
    }
    public function edit(Shirt $shirt){
        return view('shirts.edit',['shirt'=>$shirt]);
    }
    public function update(Request $request,Shirt $shirt){
        $formFields=$request->validate([
            'name'=>'required',
            'colors'=>'required',
            'description'=>'required',
            'company'=>['required'],
            'logo'=>'required',
            'sizes'=>'required',
            'email'=>['required','email']
        ]);

        if($request->hasfile('logo')){
            $formFields['logo']=$request->file('logo')->store('logos','public');
        }

        $shirt->update($formFields);

        return redirect('/shirt')->with('error','Shirt updated successfully!');
    }
    public function destroy(Shirt $shirt){
        $shirt->delete();

        return redirect('/shirt')->with('delete','Shirt deleted successfully!');
    }
}
