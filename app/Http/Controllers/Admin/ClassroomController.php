<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class ClassroomController extends Controller
{
    public function index()
    {
        return view('admin.classroom');
    }
}
