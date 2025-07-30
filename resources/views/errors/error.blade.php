<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oops! - JobPortal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 min-h-screen">
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="text-center max-w-2xl mx-auto">
            <!-- Error Icon -->
            <div class="mb-8">
                <div class="w-32 h-32 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl">
                    <i class="fas fa-exclamation-triangle text-white text-5xl"></i>
                </div>
            </div>

            <!-- Error Content -->
            <h1 class="text-4xl md:text-6xl font-bold text-slate-800 mb-4">Oops!</h1>
            <h2 class="text-2xl md:text-3xl font-semibold text-slate-600 mb-6">Career Path Not Found</h2>
            <p class="text-lg text-slate-500 mb-8 leading-relaxed">
                It looks like this opportunity has moved to a different location! 
                Don't worry - there are plenty of other great paths to explore.
            </p>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="/" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    <i class="fas fa-home mr-2"></i>
                    Back to JobPortal
                </a>
                <button onclick="history.back()" class="inline-flex items-center px-8 py-4 bg-white border border-slate-300 hover:bg-slate-50 text-slate-700 rounded-xl font-semibold transition-all duration-300 shadow-md hover:shadow-lg">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Go Back
                </button>
            </div>

            <!-- Helpful Links -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white/50">
                <h3 class="text-lg font-semibold text-slate-800 mb-4">
                    <i class="fas fa-compass mr-2 text-blue-600"></i>
                    Explore These Opportunities
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <a href="#jobs" class="flex items-center p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors duration-300">
                        <i class="fas fa-search text-blue-600 mr-3"></i>
                        <span class="text-slate-700 font-medium">Browse Jobs</span>
                    </a>
                    <a href="#companies" class="flex items-center p-3 bg-green-50 hover:bg-green-100 rounded-lg transition-colors duration-300">
                        <i class="fas fa-building text-green-600 mr-3"></i>
                        <span class="text-slate-700 font-medium">Top Companies</span>
                    </a>
                    <a href="#resources" class="flex items-center p-3 bg-purple-50 hover:bg-purple-100 rounded-lg transition-colors duration-300">
                        <i class="fas fa-book text-purple-600 mr-3"></i>
                        <span class="text-slate-700 font-medium">Career Tips</span>
                    </a>
                </div>
            </div>

            <!-- Contact Support -->
            <div class="mt-8">
                <p class="text-slate-500 text-sm mb-2">Need help finding your way?</p>
                <a href="mailto:support@jobportal.com" class="text-blue-600 hover:text-blue-800 font-medium transition-colors duration-300">
                    <i class="fas fa-envelope mr-1"></i>
                    Contact our support team
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="fixed bottom-4 right-4">
        <p class="text-slate-400 text-sm bg-white/80 backdrop-blur-sm px-4 py-2 rounded-lg shadow-lg">
            Made with ❤️ <span class="font-semibold text-slate-600">LaraCopilot</span>
        </p>
    </div>
</body>
</html>