@extends('layouts.admin')

@section('title', 'Company Management - JobPortal Admin')
@section('page-title', 'Company Management')
@section('page-description', 'Monitor and manage company profiles and activities')

@section('content')
<!-- Company Stats -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Total Companies</p>
                <p class="text-3xl font-bold text-slate-800">2,456</p>
            </div>
            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-building text-white"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Active Recruiters</p>
                <p class="text-3xl font-bold text-slate-800">1,823</p>
            </div>
            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-user-tie text-white"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Premium Members</p>
                <p class="text-3xl font-bold text-slate-800">567</p>
            </div>
            <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-purple-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-crown text-white"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Avg. Job Posts</p>
                <p class="text-3xl font-bold text-slate-800">6.2</p>
            </div>
            <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-orange-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-chart-bar text-white"></i>
            </div>
        </div>
    </div>
</div>

<!-- Company Performance Chart -->
<div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6 mb-8">
    <h3 class="text-lg font-semibold text-slate-800 mb-4">Company Registration Trends</h3>
    <div class="w-full overflow-x-auto">
        <div style="width: 800px; height: 400px; min-width: 800px;">
            <canvas id="companyTrendChart" width="800" height="400"></canvas>
        </div>
    </div>
    <p class="text-sm text-slate-500 mt-4">*Optimized for desktop viewing - scroll horizontally on smaller screens</p>
</div>

<!-- Top Companies Table -->
<div class="bg-white rounded-2xl shadow-lg border border-slate-100">
    <div class="p-6 border-b border-slate-200">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-slate-800">Company Directory</h3>
            <div class="flex items-center space-x-4">
                <select class="border border-slate-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Industries</option>
                    <option>Technology</option>
                    <option>Finance</option>
                    <option>Healthcare</option>
                    <option>Education</option>
                </select>
                <div class="relative">
                    <input type="text" placeholder="Search companies..." 
                           class="pl-10 pr-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-slate-50">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Company</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Industry</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Active Jobs</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Total Hires</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                <tr class="hover:bg-slate-50">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                                <i class="fas fa-code text-white"></i>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-slate-900">TechCorp Inc.</div>
                                <div class="text-sm text-slate-500">hr@techcorp.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            Technology
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm font-medium text-slate-900">23</div>
                        <div class="text-sm text-slate-500">jobs posted</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm font-medium text-slate-900">156</div>
                        <div class="text-sm text-slate-500">successful hires</div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <i class="fas fa-crown mr-1"></i>Premium
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-green-600 hover:text-green-800 transition-colors duration-200">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-orange-600 hover:text-orange-800 transition-colors duration-200">
                                <i class="fas fa-envelope"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center">
                                <i class="fas fa-chart-line text-white"></i>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-slate-900">GrowthCo</div>
                                <div class="text-sm text-slate-500">careers@growthco.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Marketing
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm font-medium text-slate-900">12</div>
                        <div class="text-sm text-slate-500">jobs posted</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm font-medium text-slate-900">89</div>
                        <div class="text-sm text-slate-500">successful hires</div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            Standard
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-green-600 hover:text-green-800 transition-colors duration-200">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-orange-600 hover:text-orange-800 transition-colors duration-200">
                                <i class="fas fa-envelope"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="px-6 py-4 border-t border-slate-200">
        <div class="flex items-center justify-between">
            <div class="text-sm text-slate-500">
                Showing 1 to 10 of 2,456 results
            </div>
            <div class="flex items-center space-x-2">
                <button class="px-3 py-1 border border-slate-300 rounded-md text-sm text-slate-500 hover:bg-slate-50">Previous</button>
                <button class="px-3 py-1 bg-blue-600 text-white rounded-md text-sm">1</button>
                <button class="px-3 py-1 border border-slate-300 rounded-md text-sm text-slate-500 hover:bg-slate-50">2</button>
                <button class="px-3 py-1 border border-slate-300 rounded-md text-sm text-slate-500 hover:bg-slate-50">3</button>
                <button class="px-3 py-1 border border-slate-300 rounded-md text-sm text-slate-500 hover:bg-slate-50">Next</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Company Registration Trends Chart
    const companyCtx = document.getElementById('companyTrendChart').getContext('2d');
    new Chart(companyCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'New Registrations',
                data: [45, 67, 89, 123, 156, 189, 234, 267, 298, 334, 367, 398],
                borderColor: 'rgb(59, 130, 246)',
                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                tension: 0.4,
                fill: true
            }, {
                label: 'Premium Upgrades',
                data: [12, 18, 25, 34, 42, 51, 67, 78, 89, 95, 102, 108],
                borderColor: 'rgb(168, 85, 247)',
                backgroundColor: 'rgba(168, 85, 247, 0.1)',
                tension: 0.4,
                fill: true
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
});
</script>
@endsection