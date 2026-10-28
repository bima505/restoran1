<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTableController extends Controller
{
    public function index()
    {
        return view('admin.table');
    }
}