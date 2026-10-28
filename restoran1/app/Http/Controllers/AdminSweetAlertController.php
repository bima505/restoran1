<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSweetAlertController extends Controller
{
    public function index()
    {
        return view('admin.sweet-alert');
    }
}
