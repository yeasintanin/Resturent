<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Food;
use App\Models\Chefs;

class HomeController extends Controller
{
    public function index()
    {
        $data=food::all();
        $value=chefs::all();
        return view("home",compact("data","value"));
    }

    public function redirects(){
        $usertype= Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.adminhome');
        }
        else
        {
            return view('home');
        }
    }
}
