<?php

namespace App\Http\Controllers;

use App\Models\Trouser;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TrouserController extends Controller
{
    public function index(){
        return view('trousers.index',[
            'trousers'=>Trouser::latest()->filter(request(['color','size','search']))->paginate(6)
        ]);
    }
    public function show(Trouser $trouser){
        return view('trousers.show',[
            'trouser'=>$trouser
        ]);
    }
    public function create(){
        return view('trousers.trousercreate');
    }
    public function trouserstore(Request $request){
        $formFields=$request->validate([
            'name'=>'required',
            'company'=>['required',Rule::unique('trousers','company')],
            'email'=>['required','email'],
            'colors'=>'required',
            'sizes'=>'required',
            'logo'=>'required',
            'description'=>'required'
        ]);

        if($request->hasfile('logo')){
            $formFields['logo']=$request->file('logo')->store('logos','public');
        }

        Trouser::create($formFields);

        return redirect('/trouser')->with('message','New Trouser created!');
    }
    public function edit(Trouser $trouser){
        return view('trousers.edit',['trouser'=>$trouser]);
    }
    public function update(Request $request,Trouser $trouser){
        $formFields=$request->validate([
            'name'=>'required',
            'company'=>['required'],
            'email'=>['required','email'],
            'colors'=>'required',
            'sizes'=>'required',
            'logo'=>'required',
            'description'=>'required'
        ]);

        if($request->hasfile('logo')){
            $formFields['logo']=$request->file('logo')->store('logos','public');
        }

        $trouser->update($formFields);

        return redirect('/trouser')->with('error','asdf');
    }
    public function destroy(Trouser $trouser){
        $trouser->delete();

        return redirect('/trouser')->with('delete','Trouser deleted successfully!');
    }
}
