<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersFreeAdsController extends Controller

{   
    public $full_name;
    public $username;
    public $phone_number;
    public $email;
    public $password;
    public $is_admin;
   
    /*
     * Start of "Admin controller" AKA: "UsersCrud" 
     * 
     * function list() returns a view of the registers in table "User" == SELECT * FROM User;
     * function delete($id) erase register by $id from table
     * function showData($id) show information from  table "User" specific to the id given as parameter
     * function editData(Request $request) retrieves information obtained through "function showData($id)", and saves the edit + redirects to the list where changes can be observed
     * 
     * 
     */

    public function list()
    {
        $data=User::all();
        return view('list', ['clients'=> $data]);
    }

    public function nuevo(){
        return view("create");
    }


    function recreate(Request $request)
    {
          /*
        * the following code writes into db through the submit button of  html form.
        * we need to create a new instance of (in this case) "User"
        * subsequently  we will take $request->input('name_in_html_form') as values for variables
        * (the attributes declared for "UsersFreeAdsController" correspond to the names in model/table
        * if ignored or not correctly written cannot write from form.)
        *
        */
        $request->validate([
            'name'=>'required',
            'username'=>'required',
            'phone_number'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);

        $client=new User();
        $client->full_name=$request->input('name');
        $client->username=$request->input('username');
        $client->phone_number=$request->input('phone_number');
        $client->email=$request->input('email');
        $client->password=password_hash($request->input('password'),PASSWORD_BCRYPT);
        $client->save();
        //$arr=array($client->full_name,$client->username,$client->phone_number,$client->email,$client->password);

       // return view("welcome"); //This view must be the main page but as logged user
       // print_r($arr);

       // return $request->all();
        return redirect('list');
    }

    public function delete($id)
    {   
       $data = User::find($id);
       $data->delete();
       return redirect('list');


    }
    //show info about user in a view for UsersCrud
    function showData($id)
    {
        $data = User::find($id);
       
        return view('update', ['data'=>$data]);
    }
    //Actual function to edit the data 
    function editData(Request $request)
    {
        $data= User::find($request->id);
        $data->full_name=$request->name;
        $data->username=$request->username;
        $data->phone_number=$request->phone_number;
        $data->email=$request->email;
        $data->is_admin=$request->is_admin;
        $data->save();
        return redirect('list');
    }

    /*End of "AdminController AKA:"UsersCRUD" */


}