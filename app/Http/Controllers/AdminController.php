<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Chefs;


class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
    }

    public function deleteuser($id)
    {
        $data =user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foods()
    {
        $data = food::all();
        return view("admin.food",compact("data"));
    }

    public function upload(Request $request)
    {

        $data = new food;

        $image = $request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $data->save();
        return redirect()->back();
    }

    public function deletefood($id)
    {
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatefood($id)
    {
        $data= food::find($id);
        return view("admin.updateview",compact("data"));
    }

    public function update(Request $request,$id)
    {
        $data=food::find($id);
        $image = $request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $data->save();
        return redirect()->back();

    }

    public function reservation(Request $request)
    {

        $data = new reservation;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;

        $data->save();
        return redirect()->back();
    }

    public function viewreservation(){
        $data = reservation::all();
        return view("admin.reservation",compact("data"));
    }

    public function viewChefs()
    {
        $data = chefs::all();
        return view("admin.chefs",compact("data"));
    }

    public function uploadchefs(Request $request)
    {
        $data = new chefs;

        $image = $request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefsimage',$imagename);

        $data->image=$imagename;

        $data->name=$request->name;
        $data->specialty=$request->specialty;

        $data->save();
        return redirect()->back();
    }

    public function deletechefs($id)
    {
        $data =chefs::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatechef($id)
    {
        $data= chefs::find($id);
        return view("admin.updatechef",compact("data"));
    }

    public function updatedchefs(Request $request,$id)
    {
        $data= chefs::find($id);
        $image = $request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefsimage',$imagename);

        $data->image=$imagename;
        $data->name=$request->name;
        $data->specialty=$request->specialty;

        $data->save();
        return redirect()->back();
    }
}
