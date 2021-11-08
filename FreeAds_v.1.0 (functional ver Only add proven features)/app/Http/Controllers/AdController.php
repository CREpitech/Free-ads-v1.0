<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;
use App\Http\Requests\AdStore;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;
use App\Models\categories;
use App\Models\User;

class AdController extends Controller
{
    public function list()
    {
        $data=Ad::all();
        return view('ads.list', ['items'=> $data]);
    }
    public function delete($id)
    {   
       $data = Ad::find($id);
       $data->delete();
       return redirect('ads-list');


    }
    //show info about user in a view for UsersCrud
    function showData($id)
    {
        $data = Ad::find($id);
       
        return view('ads.update', ['data'=>$data]);
    }
    //Actual function to edit the data 
    function editData(Request $request)
    {
        $data= Ad::find($request->id);
        $data->title=$request->title;
        $data->description=$request->description;
        $data->category_id=$request->category_id;
        $data->localisation=$request->localisation;
        $data->price=$request->price;
        $data->save();
        return redirect('ads-list');
    }
    public function create()
    {
        $categories = categories::all();
        return view('ads.create', ['categories' => $categories]);
    }

    public function store(AdStore $request )
    {
        if ($file = $request->hasFile('upload_img')) {
            $file = $request->file('upload_img');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path();
            $file->move($destinationPath, $fileName);
        }

        $validated = $request->validated();
        
        $ad = new Ad();
        $ad->upload_img = $request->upload_img->getClientOriginalName();
        $ad->title = $validated['title'];
       // $ad->user_id = session()->user()->id ;
        $ad->description = $validated['description'];
        $ad->category_id = $validated['category_id'];
        $ad->localisation = $validated['localisation'];
        $ad->price = $validated['price'];
        $ad->save();

        return redirect()->route('ads-list');
    }

    public function  categories()
    {
        $categories = categories::all();
        return view('create', ['categories' => $categories]);
    }
}
