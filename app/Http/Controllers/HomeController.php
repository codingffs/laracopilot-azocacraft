<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function getFeaturedJobs()
    {
        return response()->json([
            'jobs' => [
                [
                    'id' => 1,
                    'title' => 'Senior Software Engineer',
                    'company' => 'TechCorp Inc.',
                    'location' => 'San Francisco, CA',
                    'salary' => '$120k - $150k',
                    'type' => 'Full-time',
                    'skills' => ['React', 'Node.js', 'AWS'],
                    'applications' => 15
                ],
                [
                    'id' => 2,
                    'title' => 'Digital Marketing Manager',
                    'company' => 'GrowthCo',
                    'location' => 'Remote',
                    'salary' => '$80k - $100k',
                    'type' => 'Remote',
                    'skills' => ['SEO', 'PPC', 'Analytics'],
                    'applications' => 28
                ],
                [
                    'id' => 3,
                    'title' => 'UX/UI Designer',
                    'company' => 'DesignStudio',
                    'location' => 'New York, NY',
                    'salary' => '$90k - $110k',
                    'type' => 'Hybrid',
                    'skills' => ['Figma', 'Sketch', 'Prototyping'],
                    'applications' => 42
                ]
            ]
        ]);
    }

    public function getTopCompanies()
    {
        return response()->json([
            'companies' => [
                ['name' => 'Apple', 'category' => 'Technology', 'jobs' => 45],
                ['name' => 'Google', 'category' => 'Technology', 'jobs' => 67],
                ['name' => 'Microsoft', 'category' => 'Technology', 'jobs' => 52],
                ['name' => 'Amazon', 'category' => 'E-commerce', 'jobs' => 89],
                ['name' => 'Meta', 'category' => 'Social Media', 'jobs' => 34],
                ['name' => 'SpaceX', 'category' => 'Aerospace', 'jobs' => 23]
            ]
        ]);
    }
}