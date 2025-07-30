<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'JobPortal - Connect Talent with Opportunity')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-slate-50">
    <!-- Navigation Header -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-600 to-indigo-700 rounded-xl flex items-center justify-center">
                        <i class="fas fa-briefcase text-white text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold gradient-text">JobPortal</h1>
                        <p class="text-xs text-slate-500">Connect • Grow • Succeed</p>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-slate-700 hover:text-blue-600 font-medium transition-colors duration-300">
                        <i class="fas fa-home mr-1"></i>Home
                    </a>
                    <a href="#jobs" class="text-slate-700 hover:text-blue-600 font-medium transition-colors duration-300">
                        <i class="fas fa-search mr-1"></i>Browse Jobs
                    </a>
                    <a href="#companies" class="text-slate-700 hover:text-blue-600 font-medium transition-colors duration-300">
                        <i class="fas fa-building mr-1"></i>Companies
                    </a>
                    <a href="#resources" class="text-slate-700 hover:text-blue-600 font-medium transition-colors duration-300">
                        <i class="fas fa-book mr-1"></i>Resources
                    </a>
                    <a href="#contact" class="text-slate-700 hover:text-blue-600 font-medium transition-colors duration-300">
                        <i class="fas fa-envelope mr-1"></i>Contact
                    </a>
                </div>

                <!-- User Actions -->
                <div class="hidden md:flex items-center space-x-4">
                    <button class="bg-white border border-blue-600 text-blue-600 px-6 py-2 rounded-lg font-semibold hover:bg-blue-50 transition-all duration-300">
                        <i class="fas fa-sign-in-alt mr-1"></i>Sign In
                    </button>
                    <button class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white px-6 py-2 rounded-lg font-semibold hover:from-blue-700 hover:to-indigo-800 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <i class="fas fa-user-plus mr-1"></i>Register
                    </button>
                    <a href="{{ route('admin.login') }}" class="text-slate-500 hover:text-slate-700 transition-colors duration-300">
                        <i class="fas fa-cog text-lg"></i>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-slate-700 hover:text-blue-600 transition-colors duration-300">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <div class="space-y-2">
                    <a href="/" class="block py-2 px-4 text-slate-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all duration-300">
                        <i class="fas fa-home mr-2"></i>Home
                    </a>
                    <a href="#jobs" class="block py-2 px-4 text-slate-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all duration-300">
                        <i class="fas fa-search mr-2"></i>Browse Jobs
                    </a>
                    <a href="#companies" class="block py-2 px-4 text-slate-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all duration-300">
                        <i class="fas fa-building mr-2"></i>Companies
                    </a>
                    <a href="#resources" class="block py-2 px-4 text-slate-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all duration-300">
                        <i class="fas fa-book mr-2"></i>Resources
                    </a>
                    <a href="#contact" class="block py-2 px-4 text-slate-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-all duration-300">
                        <i class="fas fa-envelope mr-2"></i>Contact
                    </a>
                    <div class="border-t border-slate-200 pt-4 mt-4">
                        <div class="space-y-2">
                            <button class="w-full bg-white border border-blue-600 text-blue-600 py-2 rounded-lg font-semibold hover:bg-blue-50 transition-all duration-300">
                                <i class="fas fa-sign-in-alt mr-1"></i>Sign In
                            </button>
                            <button class="w-full bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-2 rounded-lg font-semibold hover:from-blue-700 hover:to-indigo-800 transition-all duration-300">
                                <i class="fas fa-user-plus mr-1"></i>Register
                            </button>
                            <a href="{{ route('admin.login') }}" class="block text-center py-2 text-slate-500 hover:text-slate-700 transition-colors duration-300">
                                <i class="fas fa-cog mr-1"></i>Admin Panel
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Four Column Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                
                <!-- Column 1: Company Info -->
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-indigo-700 rounded-lg flex items-center justify-center">
                            <i class="fas fa-briefcase text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold">JobPortal</h3>
                    </div>
                    <p class="text-slate-300 text-sm mb-4 leading-relaxed">
                        Connecting talented students with amazing career opportunities. Your gateway to professional success and growth.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-slate-800 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-slate-800 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-twitter text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-slate-800 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-slate-800 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">For Job Seekers</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm flex items-center"><i class="fas fa-search mr-2"></i>Browse Jobs</a></li>
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm flex items-center"><i class="fas fa-user mr-2"></i>Create Profile</a></li>
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm flex items-center"><i class="fas fa-file-alt mr-2"></i>Upload Resume</a></li>
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm flex items-center"><i class="fas fa-bell mr-2"></i>Job Alerts</a></li>
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm flex items-center"><i class="fas fa-chart-line mr-2"></i>Career Tips</a></li>
                    </ul>
                </div>

                <!-- Column 3: Services -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">For Employers</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm flex items-center"><i class="fas fa-plus mr-2"></i>Post Jobs</a></li>
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm flex items-center"><i class="fas fa-users mr-2"></i>Find Candidates</a></li>
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm flex items-center"><i class="fas fa-building mr-2"></i>Company Profile</a></li>
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm flex items-center"><i class="fas fa-analytics mr-2"></i>Hiring Analytics</a></li>
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm flex items-center"><i class="fas fa-handshake mr-2"></i>Recruitment Services</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Info</h3>
                    <div class="space-y-3">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-blue-400 mt-1"></i>
                            <div>
                                <p class="text-slate-300 text-sm">123 Career Street</p>
                                <p class="text-slate-300 text-sm">Suite 100, Professional City, PC 12345</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone text-blue-400"></i>
                            <p class="text-slate-300 text-sm">+1 (555) 123-JOBS</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-blue-400"></i>
                            <p class="text-slate-300 text-sm">contact@jobportal.com</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-clock text-blue-400"></i>
                            <p class="text-slate-300 text-sm">Mon-Fri: 9AM-6PM</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Border and Copyright -->
            <div class="border-t border-slate-700 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <!-- Left: Copyright -->
                    <div class="text-sm text-slate-400 mb-4 md:mb-0">
                        © {{ date('Y') }} JobPortal. All rights reserved.
                    </div>
                    
                    <!-- Center: Privacy Links -->
                    <div class="flex space-x-6 mb-4 md:mb-0">
                        <a href="#" class="text-slate-400 hover:text-white transition-colors duration-300 text-sm">Privacy Policy</a>
                        <a href="#" class="text-slate-400 hover:text-white transition-colors duration-300 text-sm">Terms of Service</a>
                        <a href="#" class="text-slate-400 hover:text-white transition-colors duration-300 text-sm">Cookie Policy</a>
                    </div>
                    
                    <!-- Right: LaraCopilot Branding -->
                    <div class="text-sm text-slate-400">
                        Made with ❤️ <span class="text-white font-medium">LaraCopilot</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            // Mobile menu toggle
            $('#mobile-menu-btn').click(function() {
                $('#mobile-menu').slideToggle(300);
                const icon = $(this).find('i');
                icon.toggleClass('fa-bars fa-times');
            });

            // Smooth scrolling for anchor links
            $('a[href^="#"]').click(function(e) {
                e.preventDefault();
                const target = $(this.getAttribute('href'));
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 80
                    }, 800);
                }
            });

            // Header background on scroll
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('nav').addClass('shadow-xl').removeClass('shadow-lg');
                } else {
                    $('nav').addClass('shadow-lg').removeClass('shadow-xl');
                }
            });
        });
    </script>
</body>
</html>