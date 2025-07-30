@extends('layouts.admin')

@section('title', 'User Management - JobPortal Admin')
@section('page-title', 'User Management')
@section('page-description', 'Manage job seekers, companies, and admin accounts')

@section('content')
<!-- User Stats -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Job Seekers</p>
                <p class="text-3xl font-bold text-slate-800">45,231</p>
            </div>
            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-user text-white"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Companies</p>
                <p class="text-3xl font-bold text-slate-800">2,456</p>
            </div>
            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-building text-white"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Pending Approvals</p>
                <p class="text-3xl font-bold text-slate-800">127</p>
            </div>
            <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-orange-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-clock text-white"></i>
            </div>
        </div>
    </div>
</div>

<!-- User Management Table -->
<div class="bg-white rounded-2xl shadow-lg border border-slate-100">
    <div class="p-6 border-b border-slate-200">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-slate-800">All Users</h3>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <input type="text" placeholder="Search users..." 
                           class="pl-10 pr-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
                </div>
                <button class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white px-4 py-2 rounded-lg font-semibold hover:from-blue-700 hover:to-indigo-800 transition-all duration-300">
                    <i class="fas fa-plus mr-2"></i>Add User
                </button>
            </div>
        </div>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-slate-50">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">User</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Type</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Joined</th>
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
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            Job Seeker
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Active
                        </span>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-500">Jan 15, 2024</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-green-600 hover:text-green-800 transition-colors duration-200">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800 transition-colors duration-200">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold text-sm">TC</span>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-slate-900">TechCorp Inc.</div>
                                <div class="text-sm text-slate-500">hr@techcorp.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Company
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Active
                        </span>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-500">Jan 10, 2024</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-green-600 hover:text-green-800 transition-colors duration-200">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800 transition-colors duration-200">
                                <i class="fas fa-trash"></i>
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
                Showing 1 to 10 of 47,687 results
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
@endsection