@extends('layouts.app')

@section('title', 'JobPortal - Your Gateway to Career Success')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-900 via-indigo-900 to-purple-900 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%23ffffff" fill-opacity="0.1"><circle cx="30" cy="30" r="4"/></g></svg>')"></div>
    </div>
    
    <div class="relative z-10 text-center text-white max-w-6xl mx-auto px-4">
        <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-white via-blue-100 to-purple-200">
            Your Dream Career Awaits
        </h1>
        <p class="text-xl md:text-2xl mb-8 text-blue-100 max-w-3xl mx-auto leading-relaxed">
            Connect with top employers, discover amazing opportunities, and take the next step in your professional journey
        </p>
        
        <!-- Search Bar -->
        <div class="bg-white/95 backdrop-blur-md rounded-2xl p-6 shadow-2xl max-w-4xl mx-auto mb-8">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-1">
                    <div class="relative">
                        <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
                        <input type="text" placeholder="Job title, keywords, or company" 
                               class="w-full pl-12 pr-4 py-4 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent text-slate-800">
                    </div>
                </div>
                <div class="flex-1">
                    <div class="relative">
                        <i class="fas fa-map-marker-alt absolute left-4 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
                        <input type="text" placeholder="City, state, or remote" 
                               class="w-full pl-12 pr-4 py-4 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent text-slate-800">
                    </div>
                </div>
                <button class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    <i class="fas fa-search mr-2"></i>
                    Find Jobs
                </button>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-3xl mx-auto">
            <div class="bg-white/10 backdrop-blur-md rounded-xl p-6 border border-white/20">
                <div class="text-3xl font-bold text-blue-200 mb-2">15K+</div>
                <div class="text-blue-100">Active Jobs</div>
            </div>
            <div class="bg-white/10 backdrop-blur-md rounded-xl p-6 border border-white/20">
                <div class="text-3xl font-bold text-purple-200 mb-2">2.5K+</div>
                <div class="text-purple-100">Companies</div>
            </div>
            <div class="bg-white/10 backdrop-blur-md rounded-xl p-6 border border-white/20">
                <div class="text-3xl font-bold text-green-200 mb-2">50K+</div>
                <div class="text-green-100">Success Stories</div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Jobs Section -->
<section id="jobs" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-slate-800 mb-6">
                Featured <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Opportunities</span>
            </h2>
            <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                Discover hand-picked job opportunities from leading companies actively seeking talented professionals
            </p>
        </div>

        <!-- Job Categories -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 shadow-lg hover:shadow-xl">
                All Jobs
            </button>
            <button class="bg-white border border-slate-300 text-slate-700 px-6 py-3 rounded-full font-semibold hover:bg-slate-50 transition-all duration-300">
                Technology
            </button>
            <button class="bg-white border border-slate-300 text-slate-700 px-6 py-3 rounded-full font-semibold hover:bg-slate-50 transition-all duration-300">
                Marketing
            </button>
            <button class="bg-white border border-slate-300 text-slate-700 px-6 py-3 rounded-full font-semibold hover:bg-slate-50 transition-all duration-300">
                Design
            </button>
            <button class="bg-white border border-slate-300 text-slate-700 px-6 py-3 rounded-full font-semibold hover:bg-slate-50 transition-all duration-300">
                Finance
            </button>
        </div>

        <!-- Job Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Job Card 1 -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-slate-100 hover:-translate-y-2">
                <div class="p-6">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-code text-white text-xl"></i>
                        </div>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">Full-time</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Senior Software Engineer</h3>
                    <p class="text-blue-600 font-semibold mb-2">TechCorp Inc.</p>
                    <p class="text-slate-600 mb-4">Build scalable web applications using modern technologies...</p>
                    <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                        <span><i class="fas fa-map-marker-alt mr-1"></i>San Francisco, CA</span>
                        <span><i class="fas fa-dollar-sign mr-1"></i>$120k - $150k</span>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-xs">React</span>
                        <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-xs">Node.js</span>
                        <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-xs">AWS</span>
                    </div>
                    <button class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-3 rounded-xl font-semibold hover:from-blue-700 hover:to-purple-700 transition-all duration-300">
                        Apply Now
                    </button>
                </div>
            </div>

            <!-- Job Card 2 -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-slate-100 hover:-translate-y-2">
                <div class="p-6">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-chart-line text-white text-xl"></i>
                        </div>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-semibold">Remote</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Digital Marketing Manager</h3>
                    <p class="text-green-600 font-semibold mb-2">GrowthCo</p>
                    <p class="text-slate-600 mb-4">Lead digital marketing campaigns and drive user acquisition...</p>
                    <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                        <span><i class="fas fa-map-marker-alt mr-1"></i>Remote</span>
                        <span><i class="fas fa-dollar-sign mr-1"></i>$80k - $100k</span>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-xs">SEO</span>
                        <span class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-xs">PPC</span>
                        <span class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-xs">Analytics</span>
                    </div>
                    <button class="w-full bg-gradient-to-r from-green-600 to-blue-600 text-white py-3 rounded-xl font-semibold hover:from-green-700 hover:to-blue-700 transition-all duration-300">
                        Apply Now
                    </button>
                </div>
            </div>

            <!-- Job Card 3 -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-slate-100 hover:-translate-y-2">
                <div class="p-6">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-purple-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-palette text-white text-xl"></i>
                        </div>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">Hybrid</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">UX/UI Designer</h3>
                    <p class="text-purple-600 font-semibold mb-2">DesignStudio</p>
                    <p class="text-slate-600 mb-4">Create intuitive user experiences for mobile and web applications...</p>
                    <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                        <span><i class="fas fa-map-marker-alt mr-1"></i>New York, NY</span>
                        <span><i class="fas fa-dollar-sign mr-1"></i>$90k - $110k</span>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-purple-50 text-purple-700 px-3 py-1 rounded-full text-xs">Figma</span>
                        <span class="bg-purple-50 text-purple-700 px-3 py-1 rounded-full text-xs">Sketch</span>
                        <span class="bg-purple-50 text-purple-700 px-3 py-1 rounded-full text-xs">Prototyping</span>
                    </div>
                    <button class="w-full bg-gradient-to-r from-purple-600 to-pink-600 text-white py-3 rounded-xl font-semibold hover:from-purple-700 hover:to-pink-700 transition-all duration-300">
                        Apply Now
                    </button>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <button class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-xl font-semibold hover:from-blue-700 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                View All Jobs <i class="fas fa-arrow-right ml-2"></i>
            </button>
        </div>
    </div>
</section>

<!-- Top Companies Section -->
<section id="companies" class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-slate-800 mb-6">
                Top <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Companies</span>
            </h2>
            <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                Join thousands of professionals working at these industry-leading organizations
            </p>
        </div>

        <!-- Company Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6 mb-12">
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-slate-100">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-apple-alt text-white text-xl"></i>
                </div>
                <h3 class="text-center font-semibold text-slate-800">Apple</h3>
                <p class="text-center text-sm text-slate-500">Technology</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-slate-100">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center mx-auto mb-3">
                    <i class="fab fa-google text-white text-xl"></i>
                </div>
                <h3 class="text-center font-semibold text-slate-800">Google</h3>
                <p class="text-center text-sm text-slate-500">Technology</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-slate-100">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-xl flex items-center justify-center mx-auto mb-3">
                    <i class="fab fa-microsoft text-white text-xl"></i>
                </div>
                <h3 class="text-center font-semibold text-slate-800">Microsoft</h3>
                <p class="text-center text-sm text-slate-500">Technology</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-slate-100">
                <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl flex items-center justify-center mx-auto mb-3">
                    <i class="fab fa-amazon text-white text-xl"></i>
                </div>
                <h3 class="text-center font-semibold text-slate-800">Amazon</h3>
                <p class="text-center text-sm text-slate-500">E-commerce</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-slate-100">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-700 to-blue-800 rounded-xl flex items-center justify-center mx-auto mb-3">
                    <i class="fab fa-facebook text-white text-xl"></i>
                </div>
                <h3 class="text-center font-semibold text-slate-800">Meta</h3>
                <p class="text-center text-sm text-slate-500">Social Media</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-slate-100">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-rocket text-white text-xl"></i>
                </div>
                <h3 class="text-center font-semibold text-slate-800">SpaceX</h3>
                <p class="text-center text-sm text-slate-500">Aerospace</p>
            </div>
        </div>

        <!-- Company Stats -->
        <div class="bg-white rounded-3xl p-8 shadow-xl border border-slate-100">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-600 mb-2">2,500+</div>
                    <div class="text-slate-600">Partner Companies</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-green-600 mb-2">95%</div>
                    <div class="text-slate-600">Success Rate</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-purple-600 mb-2">15k+</div>
                    <div class="text-slate-600">Jobs Posted</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-orange-600 mb-2">50k+</div>
                    <div class="text-slate-600">Successful Hires</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Career Resources Section -->
<section id="resources" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-slate-800 mb-6">
                Career <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Resources</span>
            </h2>
            <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                Boost your career with expert tips, guides, and resources designed to help you succeed
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Resource Card 1 -->
            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 border border-blue-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-file-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Resume Builder</h3>
                <p class="text-slate-600 mb-6">Create professional resumes that get noticed by employers and ATS systems.</p>
                <button class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white px-6 py-3 rounded-xl font-semibold hover:from-blue-700 hover:to-indigo-800 transition-all duration-300">
                    Build Resume
                </button>
            </div>

            <!-- Resource Card 2 -->
            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 border border-green-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-comments text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Interview Prep</h3>
                <p class="text-slate-600 mb-6">Master common interview questions and techniques to land your dream job.</p>
                <button class="bg-gradient-to-r from-green-600 to-emerald-700 text-white px-6 py-3 rounded-xl font-semibold hover:from-green-700 hover:to-emerald-800 transition-all duration-300">
                    Start Prep
                </button>
            </div>

            <!-- Resource Card 3 -->
            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 border border-purple-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-chart-line text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Salary Guide</h3>
                <p class="text-slate-600 mb-6">Research competitive salaries and negotiate with confidence.</p>
                <button class="bg-gradient-to-r from-purple-600 to-pink-700 text-white px-6 py-3 rounded-xl font-semibold hover:from-purple-700 hover:to-pink-800 transition-all duration-300">
                    View Guide
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-gradient-to-br from-slate-900 to-blue-900">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Get In <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Touch</span>
            </h2>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Have questions? We're here to help you find the perfect career opportunity
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="space-y-8">
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-map-marker-alt text-white"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-white mb-2">Visit Our Office</h3>
                        <p class="text-blue-100">123 Career Street, Suite 100<br>Professional City, PC 12345</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-phone text-white"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-white mb-2">Call Us</h3>
                        <p class="text-blue-100">+1 (555) 123-JOBS<br>Mon-Fri: 9AM-6PM</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-600 rounded-xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-envelope text-white"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-white mb-2">Email Us</h3>
                        <p class="text-blue-100">contact@jobportal.com<br>support@jobportal.com</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20">
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-white font-medium mb-2">First Name</label>
                            <input type="text" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-xl text-white placeholder-white/70 focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="John">
                        </div>
                        <div>
                            <label class="block text-white font-medium mb-2">Last Name</label>
                            <input type="text" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-xl text-white placeholder-white/70 focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Doe">
                        </div>
                    </div>
                    <div>
                        <label class="block text-white font-medium mb-2">Email</label>
                        <input type="email" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-xl text-white placeholder-white/70 focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="john@example.com">
                    </div>
                    <div>
                        <label class="block text-white font-medium mb-2">Subject</label>
                        <select class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-xl text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Select a topic</option>
                            <option value="job-seeker">Job Seeker Support</option>
                            <option value="employer">Employer Services</option>
                            <option value="technical">Technical Support</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-white font-medium mb-2">Message</label>
                        <textarea rows="5" class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-xl text-white placeholder-white/70 focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="How can we help you?"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 rounded-xl font-semibold hover:from-blue-700 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection