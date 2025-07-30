@extends('layouts.admin')

@section('title', 'Job Management - JobPortal Admin')
@section('page-title', 'Job Management')
@section('page-description', 'Monitor and manage job postings across the platform')

@section('content')
<!-- Job Stats -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Active Jobs</p>
                <p class="text-3xl font-bold text-slate-800">15,247</p>
            </div>
            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-briefcase text-white"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Pending Review</p>
                <p class="text-3xl font-bold text-slate-800">342</p>
            </div>
            <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-orange-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-clock text-white"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Total Applications</p>
                <p class="text-3xl font-bold text-slate-800">89,126</p>
            </div>
            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-file-alt text-white"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Avg. Applications</p>
                <p class="text-3xl font-bold text-slate-800">5.8</p>
            </div>
            <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-purple-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-chart-bar text-white"></i>
            </div>
        </div>
    </div>
</div>

<!-- Job Category Distribution Chart -->
<div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6 mb-8">
    <h3 class="text-lg font-semibold text-slate-800 mb-4">Job Distribution by Category</h3>
    <div class="w-full overflow-x-auto">
        <div style="width: 800px; height: 400px; min-width: 800px;">
            <canvas id="jobCategoryChart" width="800" height="400"></canvas>
        </div>
    </div>
    <p class="text-sm text-slate-500 mt-4">*Optimized for desktop viewing - scroll horizontally on smaller screens</p>
</div>

<!-- Job Management Table -->
<div class="bg-white rounded-2xl shadow-lg border border-slate-100">
    <div class="p-6 border-b border-slate-200">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-slate-800">All Job Postings</h3>
            <div class="flex items-center space-x-4">
                <select class="border border-slate-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Categories</option>
                    <option>Technology</option>
                    <option>Marketing</option>
                    <option>Design</option>
                    <option>Finance</option>
                </select>
                <div class="relative">
                    <input type="text" placeholder="Search jobs..." 
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
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Job Details</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Company</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Applications</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Posted</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                <tr class="hover:bg-slate-50">
                    <td class="px-6 py-4">
                        <div>
                            <div class="text-sm font-medium text-slate-900">Senior Software Engineer</div>
                            <div class="text-sm text-slate-500">San Francisco, CA • $120k - $150k</div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-code text-white text-xs"></i>
                            </div>
                            <span class="text-sm text-slate-900">TechCorp Inc.</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Active
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <span class="text-sm font-medium text-slate-900">15</span>
                            <span class="text-xs text-slate-500 ml-1">applications</span>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-500">Jan 20, 2024</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-green-600 hover:text-green-800 transition-colors duration-200">
                                <i class="fas fa-check"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800 transition-colors duration-200">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50">
                    <td class="px-6 py-4">
                        <div>
                            <div class="text-sm font-medium text-slate-900">Digital Marketing Manager</div>
                            <div class="text-sm text-slate-500">Remote • $80k - $100k</div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-gradient-to-r from-green-500 to-green-600 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-chart-line text-white text-xs"></i>
                            </div>
                            <span class="text-sm text-slate-900">GrowthCo</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Active
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <span class="text-sm font-medium text-slate-900">28</span>
                            <span class="text-xs text-slate-500 ml-1">applications</span>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-500">Jan 19, 2024</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-green-600 hover:text-green-800 transition-colors duration-200">
                                <i class="fas fa-check"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800 transition-colors duration-200">
                                <i class="fas fa-times"></i>
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
                Showing 1 to 10 of 15,589 results
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
    // Job Category Distribution Chart
    const jobCtx = document.getElementById('jobCategoryChart').getContext('2d');
    new Chart(jobCtx, {
        type: 'bar',
        data: {
            labels: ['Technology', 'Marketing', 'Design', 'Finance', 'Healthcare', 'Education', 'Sales', 'Other'],
            datasets: [{
                label: 'Active Jobs',
                data: [5342, 2156, 1834, 1523, 1287, 945, 823, 1337],
                backgroundColor: [
                    'rgba(59, 130, 246, 0.8)',
                    'rgba(16, 185, 129, 0.8)',
                    'rgba(168, 85, 247, 0.8)',
                    'rgba(245, 158, 11, 0.8)',
                    'rgba(239, 68, 68, 0.8)',
                    'rgba(34, 197, 94, 0.8)',
                    'rgba(99, 102, 241, 0.8)',
                    'rgba(107, 114, 128, 0.8)'
                ],
                borderColor: [
                    'rgb(59, 130, 246)',
                    'rgb(16, 185, 129)',
                    'rgb(168, 85, 247)',
                    'rgb(245, 158, 11)',
                    'rgb(239, 68, 68)',
                    'rgb(34, 197, 94)',
                    'rgb(99, 102, 241)',
                    'rgb(107, 114, 128)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
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