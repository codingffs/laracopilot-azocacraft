<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        return view('admin.users');
    }

    public function jobs()
    {
        return view('admin.jobs');
    }

    public function companies()
    {
        return view('admin.companies');
    }

    public function applications()
    {
        return view('admin.applications');
    }

    public function roles()
    {
        return view('admin.roles');
    }

    public function getDashboardData()
    {
        return response()->json([
            'stats' => [
                'total_users' => 52341,
                'active_jobs' => 15247,
                'applications' => 89126,
                'success_rate' => 94.5
            ],
            'recent_users' => [
                ['name' => 'John Smith', 'email' => 'john@example.com', 'type' => 'Job Seeker', 'time' => '2 hours ago'],
                ['name' => 'TechCorp Inc.', 'email' => 'hr@techcorp.com', 'type' => 'Company', 'time' => '5 hours ago'],
                ['name' => 'Maria Johnson', 'email' => 'maria@example.com', 'type' => 'Job Seeker', 'time' => '1 day ago']
            ],
            'recent_jobs' => [
                ['title' => 'Senior Software Engineer', 'company' => 'TechCorp Inc.', 'location' => 'San Francisco, CA', 'applications' => 15],
                ['title' => 'Digital Marketing Manager', 'company' => 'GrowthCo', 'location' => 'Remote', 'applications' => 28],
                ['title' => 'UX/UI Designer', 'company' => 'DesignStudio', 'location' => 'New York, NY', 'applications' => 42]
            ]
        ]);
    }

    public function getUsersData()
    {
        return response()->json([
            'users' => [
                ['id' => 1, 'name' => 'John Smith', 'email' => 'john@example.com', 'type' => 'Job Seeker', 'status' => 'Active', 'joined' => '2024-01-15'],
                ['id' => 2, 'name' => 'TechCorp Inc.', 'email' => 'hr@techcorp.com', 'type' => 'Company', 'status' => 'Active', 'joined' => '2024-01-10'],
                ['id' => 3, 'name' => 'Maria Johnson', 'email' => 'maria@example.com', 'type' => 'Job Seeker', 'status' => 'Pending', 'joined' => '2024-01-20']
            ]
        ]);
    }

    public function getJobsData()
    {
        return response()->json([
            'jobs' => [
                ['id' => 1, 'title' => 'Senior Software Engineer', 'company' => 'TechCorp Inc.', 'location' => 'San Francisco, CA', 'status' => 'Active', 'applications' => 15, 'posted' => '2024-01-20'],
                ['id' => 2, 'title' => 'Digital Marketing Manager', 'company' => 'GrowthCo', 'location' => 'Remote', 'status' => 'Active', 'applications' => 28, 'posted' => '2024-01-19'],
                ['id' => 3, 'title' => 'UX/UI Designer', 'company' => 'DesignStudio', 'location' => 'New York, NY', 'status' => 'Review', 'applications' => 42, 'posted' => '2024-01-18']
            ]
        ]);
    }
}