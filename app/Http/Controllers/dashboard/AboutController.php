<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\about;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index ()
    {
        $aboutData = about::all();
        
        return view('dashboard.about',['about'=>$aboutData]);
    }

}