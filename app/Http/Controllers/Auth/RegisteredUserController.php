<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'role' => 'required|in:Admin,Customer,Staff',
        ]);
    

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'role' => $request->role,
        ]);

        event(new Registered($user));

        Auth::login($user);

        // return redirect(route('dashboard', absolute: false));
        return $this->redirectToDashboard($user);
    }

    protected function redirectToDashboard(User $user): RedirectResponse { 

        switch ($user->role) { 
            case 'Admin': return redirect()->route('admin.dashboard'); 
            case 'Customer': return redirect()->route('customer.dashboard'); 
            case 'Staff': return redirect()->route('staff.dashboard'); 
            default: return redirect()->route('welcome'); 
        // Default fallback route 
        } 
    }
}
