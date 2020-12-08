<?php

namespace App\Http\Controllers;

use App\models\booking;
use Illuminate\Http\Request;
use App\Models\countries;
use App\Models\plan;

class HomeController extends Controller
{
    
    
    public function index()
    {
         $country = countries::all();
         $plan = plan::all();

        return view('user.homepage.home',
        [
            "country"   => $country,
            "plan"      => $plan
        ]);
    }

    public function contactUs()
    {
        $country = countries::all();
        return view('user.contactFo.contact',
        [
            "country"   => $country
        ]);
    }

    

    public function userPlan()
    {
        $plan = plan::all();
        return view('user.picePlan.priceplan',
        [
            "plan"      => $plan
        ]);
    }

    public function book($id = null)
    {   
        
        $plan = plan::all();

        $country = countries::all();
        return view('user.bookTrial.index',
        [
            "country"   => $country,
            "plan"      => $plan
        ]);
    }

    public function bookTrial(Request $request)
    {
        $request->validate([
            'firstname' =>'required',
            'lastname'  =>'required',
            'email'     =>'required',
            'phone'     =>'required',
            'gender'    =>'required',
            'country'   =>'required'
        ]);

        $trial = booking::create([
            "b_firstname"   =>$request->firstname,
            "b_lastname"    =>$request->lastname,
            "b_email"       =>$request->email,
            "b_country"     =>$request->country,
            "b_phone"       =>$request->phone,
            "b_plan"        =>$request->plan,
            "b_gender"      =>$request->gender,
            "b_comment"     =>$request->comment
        ]);

        
        return redirect()->route('book')->with('state','success booking');
        
    }
}
