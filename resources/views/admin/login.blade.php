<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - JobPortal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-blue-900 via-indigo-900 to-purple-900 min-h-screen">
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="max-w-md w-full">
            <!-- Login Card -->
            <div class="bg-white/95 backdrop-blur-lg rounded-3xl shadow-2xl p-8 border border-white/20">
                <!-- Logo/Header -->
                <div class="text-center mb-8">
                    <div class="w-20 h-20 bg-gradient-to-r from-blue-600 to-indigo-700 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-briefcase text-white text-2xl"></i>
                    </div>
                    <h1 class="text-3xl font-bold text-slate-800 mb-2">Admin Portal</h1>
                    <p class="text-slate-600">JobPortal Management System</p>
                </div>

                <!-- Credentials Display -->
                <div class="bg-blue-50 border border-blue-200 rounded-xl p-4 mb-6">
                    <h3 class="font-semibold text-blue-800 mb-3 flex items-center">
                        <i class="fas fa-key mr-2"></i>
                        Admin Credentials
                    </h3>
                    <div class="space-y-2 text-sm">
                        <div class="bg-white rounded-lg p-3">
                            <p class="font-medium text-slate-700">Super Admin</p>
                            <p class="text-blue-600">admin@jobportal.com | admin123</p>
                        </div>
                        <div class="bg-white rounded-lg p-3">
                            <p class="font-medium text-slate-700">Admin Manager</p>
                            <p class="text-blue-600">manager@jobportal.com | manager123</p>
                        </div>
                        <div class="bg-white rounded-lg p-3">
                            <p class="font-medium text-slate-700">Supervisor</p>
                            <p class="text-blue-600">supervisor@jobportal.com | supervisor123</p>
                        </div>
                    </div>
                </div>

                <!-- Login Form -->
                <form method="POST" action="{{ route('admin.login.post') }}">
                    @csrf
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Email Address</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-slate-400"></i>
                                </div>
                                <input type="email" name="email" required 
                                       class="w-full pl-10 pr-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                                       placeholder="Enter admin email">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Password</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-slate-400"></i>
                                </div>
                                <input type="password" name="password" required 
                                       class="w-full pl-10 pr-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                                       placeholder="Enter password">
                            </div>
                        </div>

                        @if($errors->any())
                            <div class="bg-red-50 border border-red-200 rounded-xl p-4">
                                <div class="flex items-center">
                                    <i class="fas fa-exclamation-triangle text-red-500 mr-2"></i>
                                    <span class="text-red-700 text-sm">{{ $errors->first() }}</span>
                                </div>
                            </div>
                        @endif

                        <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-indigo-700 hover:from-blue-700 hover:to-indigo-800 text-white py-3 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                            <i class="fas fa-sign-in-alt mr-2"></i>
                            Sign In to Admin Panel
                        </button>
                    </div>
                </form>

                <!-- Back to Website -->
                <div class="mt-6 text-center">
                    <a href="/" class="text-blue-600 hover:text-blue-800 text-sm font-medium transition-colors duration-300">
                        <i class="fas fa-arrow-left mr-1"></i>
                        Back to JobPortal
                    </a>
                </div>
            </div>

            <!-- Footer -->
            <div class="text-center mt-6">
                <p class="text-white/80 text-sm">
                    Made with ❤️ <span class="font-semibold">LaraCopilot</span>
                </p>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Auto-fill demo credentials on click
            $('.bg-white.rounded-lg').click(function() {
                const email = $(this).find('.text-blue-600').text().split(' | ')[0];
                const password = $(this).find('.text-blue-600').text().split(' | ')[1];
                $('input[name="email"]').val(email);
                $('input[name="password"]').val(password);
            });
        });
    </script>
</body>
</html>