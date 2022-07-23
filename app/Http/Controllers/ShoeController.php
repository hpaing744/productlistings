<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ShoeController extends Controller
{
    public function index(){
        return view('shoes.index',[
            'shoes'=>Shoe::latest()->filter(request(['color','search']))->paginate(6)
        ]);
    }
    public function show(Shoe $shoe){
        return view('shoes.show',[
            'shoe'=>$shoe
        ]);
    }
    public function shoecreate(){
        return view('shoes.shoecreate');
    }
    public function shoestore(Request $request){
        $formFields=$request->validate([
            'name'=>'required',
            'colors'=>'required',
            'description'=>'required',
            'logo'=>'required',
            'company'=>['required',Rule::unique('shoes','company')],
            'email'=>['required','email']
        ]);

        if($request->hasfile('logo')){
            $formFields['logo']=$request->file('logo')->store('logos','public');
        }

        Shoe::create($formFields);

        return redirect('/shoe')->with('message','New shoe created successfully!');
    }
    public function edit(Shoe $shoe){
        
        return view('shoes.edit',['shoe'=>$shoe]);
    }
    public function update(Request $request,Shoe $shoe){
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

        $shoe->update($formFields);

        return redirect('/shoe')->with('error','Shoe updated successfully!');
    }
    public function destroy(Shoe $shoe){
        $shoe->delete();

        return redirect('/product')->with('delete','Shoe deleted successfully!');
    }
}
