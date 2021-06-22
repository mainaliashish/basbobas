<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $active_dashboard = "active";
        $title = "Admin - Dashboard";
        return view('backend.dashboard', compact('active_dashboard', 'title'));
    }

}