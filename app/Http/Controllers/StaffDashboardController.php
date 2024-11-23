<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class StaffDashboardController extends Controller
{
    public function index()
    {
        $staffMembers = User::where('role', 'Staff')->get(); 
        return view('staff.dashboard', compact('staffMembers'));
        // return view('staff.dashboard'); 
        // Create the view at resources/views/staff/dashboard.blade.php
    }

    // Get staff member by ID
    public function viewStaffByID($id) { $staff = User::findOrFail($id); 
        return view('admin.view-staff', compact('staff')); 
    }
}
