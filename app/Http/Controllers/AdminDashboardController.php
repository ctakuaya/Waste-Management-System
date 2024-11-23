<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard'); 
        // Create the view at resources/views/admin/dashboard.blade.php
    }


    public function getStaff() { 
        $staffMembers = User::where('role', 'Staff')->get(); 
        $customers = User::where('role', 'Customer')->get();
        return view('admin.dashboard', compact('staffMembers', 'customers'));
    }
}