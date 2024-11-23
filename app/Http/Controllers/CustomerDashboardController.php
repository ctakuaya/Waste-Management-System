<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerDashboardController extends Controller
{
    public function index()
    {
        return view('customer.dashboard'); 
        // Create the view at resources/views/customer/dashboard.blade.php
    }
// handle fetching all customers
    public function getcustomers() { $customers = User::where('role', 'Customer')->get(); 
        return view('admin.customers', compact('customers'));
     }
    public function viewCustomerByID($id) { $customer = User::findOrFail($id);
         return view('admin.view-customer', compact('customer'));
         }
}
