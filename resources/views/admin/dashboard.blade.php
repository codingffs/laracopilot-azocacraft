@extends('layouts.admin')

@section('title', 'Dashboard - JobPortal Admin')
@section('page-title', 'Dashboard Overview')
@section('page-description', 'Monitor platform performance and key metrics')

@section('content')
<!-- KPI Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Users -->
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Total Users</p>
                <p class="text-3xl font-bold text-slate-800">52,341</p>
                <p class="text-sm text-green-600 mt-2">
                    <i class="fas fa-arrow-up mr-1"></i>
                    +12% from last month
                </p>
            </div>
            <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center">
                <i class="fas fa-users text-white text-xl"></i>
            </div>
        </div>
    </div>

    <!-- Active Jobs -->
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Active Jobs</p>
                <p class="text-3xl font-bold text-slate-800">15,247</p>
                <p class="text-sm text-green-600 mt-2">
                    <i class="fas fa-arrow-up mr-1"></i>
                    +8% from last month
                </p>
            </div>
            <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 rounded-2xl flex items-center justify-center">
                <i class="fas fa-briefcase text-white text-xl"></i>
            </div>
        </div>
    </div>

    <!-- Applications -->
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Applications</p>
                <p class="text-3xl font-bold text-slate-800">89,126</p>
                <p class="text-sm text-green-600 mt-2">
                    <i class="fas fa-arrow-up mr-1"></i>
                    +15% from last month
                </p>
            </div>
            <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center">
                <i class="fas fa-file-alt text-white text-xl"></i>
            </div>
        </div>
    </div>

    <!-- Success Rate -->
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Success Rate</p>
                <p class="text-3xl font-bold text-slate-800">94.5%</p>
                <p class="text-sm text-green-600 mt-2">
                    <i class="fas fa-arrow-up mr-1"></i>
                    +2% from last month
                </p>
            </div>
            <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center">
                <i class="fas fa-chart-line text-white text-xl"></i>
            </div>
        </div>
    </div>
</div>

<!-- Charts Row -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    <!-- User Registration Chart -->
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <h3 class="text-lg font-semibold text-slate-800 mb-4">User Registrations (Last 6 Months)</h3>
        <div class="w-full overflow-x-auto">
            <div style="width: 800px; height: 400px; min-width: 800px;">
                <canvas id="userChart" width="800" height="400"></canvas>
            </div>
        </div>
        <p class="text-sm text-slate-500 mt-4">*Optimized for desktop viewing - scroll horizontally on smaller screens</p>
    </div>

    <!-- Job Applications Chart -->
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <h3 class="text-lg font-semibold text-slate-800 mb-4">Job Applications by Category</h3>
        <div class="w-full overflow-x-auto">
            <div style="width: 800px; height: 400px; min-width: 800px;">
                <canvas id="applicationChart" width="800" height="400"></canvas>
            </div>
        </div>
        <p class="text-sm text-slate-500 mt-4">*Optimized for desktop viewing - scroll horizontally on smaller screens</p>
    </div>
</div>

<!-- Recent Activity -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Recent Users -->
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-lg font-semibold text-slate-800">Recent Users</h3>
            <a href="{{ route('admin.users') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">View All</a>
        </div>
        <div class="space-y-4">
            <div class="flex items-center space-x-4 p-4 bg-slate-50 rounded-xl">
                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center">
                    <span class="text-white font-semibold">JS</span>
                </div>
                <div class="flex-1">
                    <p class="font-medium text-slate-800">John Smith</p>
                    <p class="text-sm text-slate-500">Job Seeker • john@example.com</p>
                </div>
                <div class="text-right">
                    <p class="text-sm text-slate-500">2 hours ago</p>
                    <span class="inline-block w-2 h-2 bg-green-500 rounded-full"></span>
                </div>
            </div>
            <div class="flex items-center space-x-4 p-4 bg-slate-50 rounded-xl">
                <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center">
                    <span class="text-white font-semibold">TC</span>
                </div>
                <div class="flex-1">
                    <p class="font-medium text-slate-800">TechCorp Inc.</p>
                    <p class="text-sm text-slate-500">Company • hr@techcorp.com</p>
                </div>
                <div class="text-right">
                    <p class="text-sm text-slate-500">5 hours ago</p>
                    <span class="inline-block w-2 h-2 bg-green-500 rounded-full"></span>
                </div>
            </div>
            <div class="flex items-center space-x-4 p-4 bg-slate-50 rounded-xl">
                <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full flex items-center justify-center">
                    <span class="text-white font-semibold">MJ</span>
                </div>
                <div class="flex-1">
                    <p class="font-medium text-slate-800">Maria Johnson</p>
                    <p class="text-sm text-slate-500">Job Seeker • maria@example.com</p>
                </div>
                <div class="text-right">
                    <p class="text-sm text-slate-500">1 day ago</p>
                    <span class="inline-block w-2 h-2 bg-yellow-500 rounded-full"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Jobs -->
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-lg font-semibold text-slate-800">Recent Job Posts</h3>
            <a href="{{ route('admin.jobs') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">View All</a>
        </div>
        <div class="space-y-4">
            <div class="p-4 bg-slate-50 rounded-xl">
                <div class="flex items-start justify-between mb-2">
                    <h4 class="font-medium text-slate-800">Senior Software Engineer</h4>
                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">Active</span>
                </div>
                <p class="text-sm text-slate-600 mb-2">TechCorp Inc. • San Francisco, CA</p>
                <p class="text-xs text-slate-500">Posted 2 hours ago • 15 applications</p>
            </div>
            <div class="p-4 bg-slate-50 rounded-xl">
                <div class="flex items-start justify-between mb-2">
                    <h4 class="font-medium text-slate-800">Digital Marketing Manager</h4>
                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">Active</span>
                </div>
                <p class="text-sm text-slate-600 mb-2">GrowthCo • Remote</p>
                <p class="text-xs text-slate-500">Posted 5 hours ago • 28 applications</p>
            </div>
            <div class="p-4 bg-slate-50 rounded-xl">
                <div class="flex items-start justify-between mb-2">
                    <h4 class="font-medium text-slate-800">UX/UI Designer</h4>
                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">Review</span>
                </div>
                <p class="text-sm text-slate-600 mb-2">DesignStudio • New York, NY</p>
                <p class="text-xs text-slate-500">Posted 1 day ago • 42 applications</p>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // User Registration Chart
    const userCtx = document.getElementById('userChart').getContext('2d');
    new Chart(userCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Job Seekers',
                data: [1200, 1900, 3000, 5000, 7200, 8500],
                borderColor: 'rgb(59, 130, 246)',
                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                tension: 0.4
            }, {
                label: 'Companies',
                data: [300, 450, 600, 800, 1100, 1350],
                borderColor: 'rgb(16, 185, 129)',
                backgroundColor: 'rgba(16, 185, 129, 0.1)',
                tension: 0.4
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Applications by Category Chart
    const appCtx = document.getElementById('applicationChart').getContext('2d');
    new Chart(appCtx, {
        type: 'doughnut',
        data: {
            labels: ['Technology', 'Marketing', 'Design', 'Finance', 'Healthcare', 'Other'],
            datasets: [{
                data: [35, 20, 15, 12, 10, 8],
                backgroundColor: [
                    'rgb(59, 130, 246)',
                    'rgb(16, 185, 129)',
                    'rgb(168, 85, 247)',
                    'rgb(245, 158, 11)',
                    'rgb(239, 68, 68)',
                    'rgb(107, 114, 128)'
                ]
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'right',
                }
            }
        }
    });
});
</script>
@endsection