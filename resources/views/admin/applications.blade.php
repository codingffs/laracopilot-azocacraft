@extends('layouts.admin')

@section('title', 'Application Management - JobPortal Admin')
@section('page-title', 'Application Management')
@section('page-description', 'Track and analyze job applications across the platform')

@section('content')
<!-- Application Stats -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
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
                <p class="text-sm font-medium text-slate-500 mb-1">This Month</p>
                <p class="text-3xl font-bold text-slate-800">12,456</p>
            </div>
            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-calendar text-white"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Success Rate</p>
                <p class="text-3xl font-bold text-slate-800">18.5%</p>
            </div>
            <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-purple-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-chart-line text-white"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Avg. Response Time</p>
                <p class="text-3xl font-bold text-slate-800">3.2</p>
                <p class="text-xs text-slate-500">days</p>
            </div>
            <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-orange-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-clock text-white"></i>
            </div>
        </div>
    </div>
</div>

<!-- Application Analytics Chart -->
<div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6 mb-8">
    <h3 class="text-lg font-semibold text-slate-800 mb-4">Application Analytics (Last 12 Months)</h3>
    <div class="w-full overflow-x-auto">
        <div style="width: 800px; height: 400px; min-width: 800px;">
            <canvas id="applicationAnalyticsChart" width="800" height="400"></canvas>
        </div>
    </div>
    <p class="text-sm text-slate-500 mt-4">*Optimized for desktop viewing - scroll horizontally on smaller screens</p>
</div>

<!-- Recent Applications Table -->
<div class="bg-white rounded-2xl shadow-lg border border-slate-100">
    <div class="p-6 border-b border-slate-200">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-slate-800">Recent Applications</h3>
            <div class="flex items-center space-x-4">
                <select class="border border-slate-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Status</option>
                    <option>Pending</option>
                    <option>Reviewed</option>
                    <option>Interview</option>
                    <option>Hired</option>
                    <option>Rejected</option>
                </select>
                <div class="relative">
                    <input type="text" placeholder="Search applications..." 
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
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Applicant</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Job Position</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Company</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Applied</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                <tr class="hover:bg-slate-50">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold text-sm">JS</span>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-slate-900">John Smith</div>
                                <div class="text-sm text-slate-500">john@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm font-medium text-slate-900">Senior Software Engineer</div>
                        <div class="text-sm text-slate-500">Full-time • San Francisco, CA</div>
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
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                            Under Review
                        </span>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-500">2 hours ago</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-green-600 hover:text-green-800 transition-colors duration-200">
                                <i class="fas fa-download"></i>
                            </button>
                            <button class="text-purple-600 hover:text-purple-800 transition-colors duration-200">
                                <i class="fas fa-envelope"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold text-sm">MJ</span>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-slate-900">Maria Johnson</div>
                                <div class="text-sm text-slate-500">maria@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm font-medium text-slate-900">Digital Marketing Manager</div>
                        <div class="text-sm text-slate-500">Remote • Full-time</div>
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
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            Interview Scheduled
                        </span>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-500">5 hours ago</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-green-600 hover:text-green-800 transition-colors duration-200">
                                <i class="fas fa-download"></i>
                            </button>
                            <button class="text-purple-600 hover:text-purple-800 transition-colors duration-200">
                                <i class="fas fa-envelope"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold text-sm">AD</span>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-slate-900">Alex Davis</div>
                                <div class="text-sm text-slate-500">alex@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm font-medium text-slate-900">UX/UI Designer</div>
                        <div class="text-sm text-slate-500">Hybrid • New York, NY</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-purple-600 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-palette text-white text-xs"></i>
                            </div>
                            <span class="text-sm text-slate-900">DesignStudio</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Hired
                        </span>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-500">1 day ago</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-green-600 hover:text-green-800 transition-colors duration-200">
                                <i class="fas fa-download"></i>
                            </button>
                            <button class="text-purple-600 hover:text-purple-800 transition-colors duration-200">
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
                Showing 1 to 10 of 89,126 results
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
    // Application Analytics Chart
    const analyticsCtx = document.getElementById('applicationAnalyticsChart').getContext('2d');
    new Chart(analyticsCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Total Applications',
                data: [4200, 5100, 6800, 7500, 8900, 9200, 10100, 8700, 9500, 11200, 12000, 12456],
                borderColor: 'rgb(59, 130, 246)',
                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                tension: 0.4,
                fill: true
            }, {
                label: 'Successful Hires',
                data: [780, 945, 1260, 1388, 1647, 1704, 1869, 1609, 1758, 2074, 2220, 2304],
                borderColor: 'rgb(16, 185, 129)',
                backgroundColor: 'rgba(16, 185, 129, 0.1)',
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