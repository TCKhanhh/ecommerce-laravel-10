<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct() {}

    public function index()
    {
    
        $template = 'Admin.Dashboard.home.index';
        return view('Admin.Dashboard.layout', compact('template'));
        
    }
}