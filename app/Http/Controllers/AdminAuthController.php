<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    // Static admin credentials
    private $adminCredentials = [
        [
            'email' => 'admin@business.com',
            'password' => 'admin123',
            'name' => 'System Administrator',
            'role' => 'Admin'
        ],
        [
            'email' => 'manager@business.com',
            'password' => 'manager123',
            'name' => 'Business Manager',
            'role' => 'Manager'
        ],
        [
            'email' => 'supervisor@business.com',
            'password' => 'supervisor123',
            'name' => 'Department Supervisor',
            'role' => 'Supervisor'
        ]
    ];

    public function showLogin()
    {
        // If already logged in, redirect to dashboard
        if (Session::has('admin_user')) {
            return redirect('/admin/dashboard');
        }
        
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        // Validate credentials against static data
        foreach ($this->adminCredentials as $admin) {
            if ($admin['email'] === $email && $admin['password'] === $password) {
                // Create admin session
                Session::put('admin_user', [
                    'email' => $admin['email'],
                    'name' => $admin['name'],
                    'role' => $admin['role'],
                    'login_time' => now()
                ]);

                return redirect('/admin/dashboard')->with('success', 'Welcome back, ' . $admin['name'] . '!');
            }
        }

        // Invalid credentials
        return back()->withErrors(['login' => 'Invalid email or password. Please check the credentials below.'])->withInput();
    }

    public function logout()
    {
        Session::forget('admin_user');
        Session::flush();
        
        return redirect('/admin/login')->with('success', 'You have been logged out successfully.');
    }

    public function checkAuth()
    {
        if (!Session::has('admin_user')) {
            return redirect('/admin/login')->with('error', 'Please login to access admin panel.');
        }
        
        return null;
    }
}