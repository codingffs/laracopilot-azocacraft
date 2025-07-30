@extends('layouts.admin')

@section('title', 'Role Management - JobPortal Admin')
@section('page-title', 'Role Management')
@section('page-description', 'Manage user roles and permissions across the platform')

@section('content')
<!-- Role Stats -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Super Admins</p>
                <p class="text-3xl font-bold text-slate-800">3</p>
            </div>
            <div class="w-12 h-12 bg-gradient-to-r from-red-500 to-red-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-user-shield text-white"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Admin Managers</p>
                <p class="text-3xl font-bold text-slate-800">8</p>
            </div>
            <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-orange-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-user-cog text-white"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Supervisors</p>
                <p class="text-3xl font-bold text-slate-800">15</p>
            </div>
            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-users-cog text-white"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500 mb-1">Support Staff</p>
                <p class="text-3xl font-bold text-slate-800">42</p>
            </div>
            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center">
                <i class="fas fa-headset text-white"></i>
            </div>
        </div>
    </div>
</div>

<!-- Role Permissions Matrix -->
<div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6 mb-8">
    <h3 class="text-lg font-semibold text-slate-800 mb-6">Role Permissions Matrix</h3>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b border-slate-200">
                    <th class="text-left py-3 px-4 font-medium text-slate-700">Permission</th>
                    <th class="text-center py-3 px-4 font-medium text-slate-700">Super Admin</th>
                    <th class="text-center py-3 px-4 font-medium text-slate-700">Admin Manager</th>
                    <th class="text-center py-3 px-4 font-medium text-slate-700">Supervisor</th>
                    <th class="text-center py-3 px-4 font-medium text-slate-700">Support Staff</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <tr>
                    <td class="py-3 px-4 text-slate-800">User Management</td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-check text-green-600"></i></td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-check text-green-600"></i></td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-eye text-blue-600"></i></td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-times text-red-600"></i></td>
                </tr>
                <tr>
                    <td class="py-3 px-4 text-slate-800">Job Management</td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-check text-green-600"></i></td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-check text-green-600"></i></td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-check text-green-600"></i></td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-eye text-blue-600"></i></td>
                </tr>
                <tr>
                    <td class="py-3 px-4 text-slate-800">Company Management</td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-check text-green-600"></i></td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-check text-green-600"></i></td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-eye text-blue-600"></i></td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-times text-red-600"></i></td>
                </tr>
                <tr>
                    <td class="py-3 px-4 text-slate-800">Application Review</td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-check text-green-600"></i></td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-check text-green-600"></i></td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-check text-green-600"></i></td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="py-3 px-4 text-slate-800">System Settings</td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-check text-green-600"></i></td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-times text-red-600"></i></td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-times text-red-600"></i></td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-times text-red-600"></i></td>
                </tr>
                <tr>
                    <td class="py-3 px-4 text-slate-800">Role Management</td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-check text-green-600"></i></td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-times text-red-600"></i></td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-times text-red-600"></i></td>
                    <td class="py-3 px-4 text-center"><i class="fas fa-times text-red-600"></i></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Admin Users Table -->
<div class="bg-white rounded-2xl shadow-lg border border-slate-100">
    <div class="p-6 border-b border-slate-200">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-slate-800">Admin Users</h3>
            <div class="flex items-center space-x-4">
                <select class="border border-slate-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option>All Roles</option>
                    <option>Super Admin</option>
                    <option>Admin Manager</option>
                    <option>Supervisor</option>
                    <option>Support Staff</option>
                </select>
                <button class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white px-4 py-2 rounded-lg font-semibold hover:from-blue-700 hover:to-indigo-800 transition-all duration-300">
                    <i class="fas fa-plus mr-2"></i>Add Admin
                </button>
            </div>
        </div>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-slate-50">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Admin User</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Role</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Permissions</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Last Active</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                <tr class="hover:bg-slate-50">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-r from-red-500 to-red-600 rounded-full flex items-center justify-center">
                                <i class="fas fa-crown text-white"></i>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-slate-900">System Administrator</div>
                                <div class="text-sm text-slate-500">admin@jobportal.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                            <i class="fas fa-shield-alt mr-1"></i>Super Admin
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-slate-500">Full Access</div>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-500">2 minutes ago</td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <span class="w-1.5 h-1.5 bg-green-600 rounded-full mr-1"></span>Online
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-green-600 hover:text-green-800 transition-colors duration-200">
                                <i class="fas fa-key"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-r from-orange-500 to-orange-600 rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold text-sm">AM</span>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-slate-900">Admin Manager</div>
                                <div class="text-sm text-slate-500">manager@jobportal.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-100 text-orange-800">
                            <i class="fas fa-user-cog mr-1"></i>Admin Manager
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-slate-500">User & Job Management</div>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-500">1 hour ago</td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <span class="w-1.5 h-1.5 bg-green-600 rounded-full mr-1"></span>Online
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-green-600 hover:text-green-800 transition-colors duration-200">
                                <i class="fas fa-key"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800 transition-colors duration-200">
                                <i class="fas fa-user-slash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold text-sm">SV</span>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-slate-900">Supervisor</div>
                                <div class="text-sm text-slate-500">supervisor@jobportal.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            <i class="fas fa-users-cog mr-1"></i>Supervisor
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-slate-500">Job & Application Review</div>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-500">3 hours ago</td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-800">
                            <span class="w-1.5 h-1.5 bg-slate-600 rounded-full mr-1"></span>Offline
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-green-600 hover:text-green-800 transition-colors duration-200">
                                <i class="fas fa-key"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800 transition-colors duration-200">
                                <i class="fas fa-user-slash"></i>
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
                Showing 1 to 10 of 68 admin users
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