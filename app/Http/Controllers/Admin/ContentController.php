<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    //
	
public function listContent()
{

	 return view('admin.contentv');
}
}
