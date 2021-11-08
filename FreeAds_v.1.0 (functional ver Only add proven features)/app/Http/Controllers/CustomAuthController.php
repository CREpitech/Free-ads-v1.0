<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
/* use Illuminate\Support\Facades\Auth; */


class CustomAuthController extends Controller
{
    
   /*  start of registration */
    public function registration(){
            return view("auth.registration");

    }
    function sendToUser()
    {
        return route('send-mail');
    }

    
    public function registerUser(Request $request){
        $request->validate([
            'full_name'=>'required',
            'username'=>'required',
            'phone_number'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);
        $newuser = new User();
        $newuser->full_name = $request->full_name;
        $newuser->username= $request->username;
        $newuser->phone_number = $request->phone_number;
        $newuser->email = $request->email;
        $newuser->password = Hash::make($request->password);


        $res = $newuser->save();  
        $details = [
            'title' => 'Welcome To free-ads.com',
            'body' => "We are glad that you have decided to join us, 
            we expect that you can reach to your public, "
        ];
        Mail::to($newuser->email)->send(new WelcomeEmail($details));
        
        if($res)
        { 
           return back()->with('success','You have registered successfully');
        }else{
            return back()->with('fail','Something wrong');
        }
 
    }//We need to redirect to home-page.
   
 
    //****************End of registration funcs*****************//



    public function login(){
        return view("auth.login");
    }

    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $user = User::where('email','=',$request->email)->first();
        if ($user){
        if (Hash::check($request->password, $user->password)){
            $request->session()->put('loginId',$user->id);
            return redirect('dashboard');
        }else{
            return back()->with('fail','Password not matches !');
        }
        }else{
        return back()->with('fail','This email is not registered !');
        }
    }

    public function dashboard(){
        return view("dashboard");
    }
    public function logout(){
        if (Session::has('loginId')){
            Session::pull('loginId');
            return redirect('auth.login');
        }
    }
}
