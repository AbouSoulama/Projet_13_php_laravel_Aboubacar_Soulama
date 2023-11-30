<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    
      /** 
        *
        * @return void
        */
        public function _construct()
        {
            $this->middleware('auth:admin');
        }
        
    public function index()
    {
        return view('admin.home');
    }
}
