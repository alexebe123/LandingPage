<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   function index (){
    return view('admin.index');
   }
   function tabel (){
      return view('admin.pages.tables.basic-table');
     }
}
