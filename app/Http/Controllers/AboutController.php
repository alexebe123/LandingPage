<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;

class AboutController extends Controller
{
    public function index(){
        return view('about');
    }
    public function indexAdmin(){
        return view('admin.pages.about');
    }
}
