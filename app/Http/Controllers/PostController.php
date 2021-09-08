<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class PostController extends Controller
{
    public function input(){
        return view('home');
    }

    public function confirm(Request $request){

        $item = new Contact($request->all());      

        
        // $this->validate($request,[
        // //     // 'lastname'=>'required',
        // //     // 'firstname'=>'required',
        //     'gender'=>'required',
        //     'email'=>'required|email',
        //     'postcode'=>'required',
        //     'address'=>'required',
        //     'opinion'=>'required'
        // ]);
        
        $request->session()->put('item',$item);

        return view('confirm',compact('item'));
    }

    public function create(Request $request){

        

        if($request->has('back')){
            return redirect('home')->withInput();
        }

        $item= $request->session()->get('item');

        $item->save();

        return redirect('complete');
    }

    public function complete(Request $request){
        return view('complete');
    } 

    public function find(){
        return view('find');
    }

    public function search(Request $request){

        $keyemail = $request->input('email');
        $keygender = $request->input('gender');
        $keyname = $request->input('name');
        $keyfirstday = $request->input('firstday');
        $keylastday = $request->input('lastday');
        $query = Contact::query();

        if(!empty($keyemail)){
            $query->where('email','LIKE',"%{$keyemail}%");
        }

        if(!empty($keyname)){
            $query->where('fullname','LIKE',"%{$keyname}%");
        }

        if(!empty($keygender)){
            $query->where('gender',$keygender);
        }

        if(!empty($keyfirstday) || !empty($keylastday)){
            $query->whereBetween('created_at',[$keyfirstday,$keylastday]);
        }

        $data = $query->paginate(10);

        
        
        return view('find',compact('data'));
    }
}
