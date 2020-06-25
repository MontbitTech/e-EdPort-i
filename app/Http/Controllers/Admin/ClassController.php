<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
class ClassController extends Controller
{
    //

public function listClass()
{

	 return view('admin.classv');
}

}
