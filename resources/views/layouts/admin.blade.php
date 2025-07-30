<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - JobPortal')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-100">
    @if(!session('admin_logged_in'))
        <script>window.location.href = "{{ route('admin.login') }}";</script>
    @endif

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gradient-to-b from-slate-900 to-slate-800 text-white flex-shrink-0">
            <!-- Logo -->
            <div class="p-6 border-b border-slate-700">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-indigo-700 rounded-lg flex items-center justify-center">
                        <i class="fas fa-briefcase text-white"></i>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold">JobPortal</h1>
                        <p class="text-xs text-slate-300">Admin Panel</p>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-slate-700 transition-colors duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-slate-700' : '' }}">
                            <i class="fas fa-chart-pie"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-slate-700 transition-colors duration-200 {{ request()->routeIs('admin.users') ? 'bg-slate-700' : '' }}">
                            <i class="fas fa-users"></i>
                            <span>User Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.jobs') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-slate-700 transition-colors duration-200 {{ request()->routeIs('admin.jobs') ? 'bg-slate-700' : '' }}">
                            <i class="fas fa-briefcase"></i>
                            <span>Job Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.companies') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-slate-700 transition-colors duration-200 {{ request()->routeIs('admin.companies') ? 'bg-slate-700' : '' }}">
                            <i class="fas fa-building"></i>
                            <span>Companies</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.applications') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-slate-700 transition-colors duration-200 {{ request()->routeIs('admin.applications') ? 'bg-slate-700' : '' }}">
                            <i class="fas fa-file-alt"></i>
                            <span>Applications</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.roles') }}" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-slate-700 transition-colors duration-200 {{ request()->routeIs('admin.roles') ? 'bg-slate-700' : '' }}">
                            <i class="fas fa-user-shield"></i>
                            <span>Role Management</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Back to Website -->
            <div class="p-4 border-t border-slate-700 mt-auto">
                <a href="/" class="flex items-center space-x-3 p-3 rounded-lg bg-gradient-to-r from-blue-600 to-indigo-700 hover:from-blue-700 hover:to-indigo-800 transition-all duration-300 text-center">
                    <i class="fas fa-globe"></i>
                    <span>Back to Website</span>
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white shadow-sm border-b border-slate-200 p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-2xl font-bold text-slate-800">@yield('page-title', 'Dashboard')</h1>
                        <p class="text-slate-600">@yield('page-description', 'Manage your JobPortal platform')</p>
                    </div>
                    
                    <!-- User Info -->
                    <div class="flex items-center space-x-4">
                        <div class="text-right">
                            <p class="text-sm font-medium text-slate-800">{{ session('admin_role', 'Administrator') }}</p>
                            <p class="text-xs text-slate-500">{{ session('admin_email', 'admin@jobportal.com') }}</p>
                        </div>
                        <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-indigo-700 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <form method="POST" action="{{ route('admin.logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-slate-500 hover:text-red-600 transition-colors duration-200">
                                <i class="fas fa-sign-out-alt"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 p-6 overflow-y-auto">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>