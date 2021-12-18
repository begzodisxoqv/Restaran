<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Reservation;


class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view('admin.users.users',compact("data"));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletemenu($id)
    {
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateview($id)
    {
        $data=food::find($id);
        return view('admin.ourmenu.updateview',compact("data"));
    }

   public function update(Request $request,$id )
   {
      
       $data=food::find($id); 
        
       $image= $request->image;

       $imagename = time(). '.' .$image->getClientOriginalExtension();
       $request->image->move('ourmenuimage',$imagename);

       $data->image=$imagename;
       $data->title=$request->title;
       $data->price=$request->price;
       $data->description=$request->description;

       $data->save();
       return redirect()->back();

   }

    public function ourmenu()
    {
        $data=food::all();
        return view('admin.ourmenu.ourmenu',compact("data"));

    }


    public function upload(Request $request)
    {
        $data= new food; 
        
        $image= $request->image;

        $imagename = time(). '.' .$image->getClientOriginalExtension();
        $request->image->move('ourmenuimage',$imagename);

        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $data->save();
        return redirect()->back();
    }

    public function reservetion(Request $request)
    {
        $data= new reservation;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;

        $data->save();
        return   redirect()->back();

    }

    public function viewreservations()
    {
        $data= Reservation::all();
        return view("admin.reservetion.viewreservations",compact("data"));
    }

    // ourchefs
   
    public function viewchefs()
    {
        $data=foodchef::all();
        return view("admin.ourchefs.ourchefs",compact("data"));
    }

    public function uploadchefs(Request $request)
    {
        $data=new foodchef; 
        
        $image=$request->image;

        $imagename = time(). '.' .$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);

        $data->image=$imagename;

        $data->name=$request->name;
        $data->speciality=$request->speciality;
        

        $data->save();
        return redirect()->back();

        
    }

    public function updatechef($id)
    {
        $data=Foodchef::all();
        return view('admin.ourchefs.updatechef');
    }
  
}
