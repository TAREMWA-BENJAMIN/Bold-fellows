<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Bold Fellows</title>
    <!-- Google Fonts: Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background: radial-gradient(circle at 10% 20%, rgb(11, 17, 54) 0%, rgb(6, 9, 32) 90%);
            overflow: hidden;
        }

        /* Abstract glowing spheres */
        .glow-sphere {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            z-index: 1;
            opacity: 0.45;
            pointer-events: none;
        }
        .glow-1 {
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(97, 84, 248, 0.4) 0%, rgba(0, 0, 0, 0) 70%);
            top: -100px;
            left: -100px;
            animation: float-slow 12s infinite alternate ease-in-out;
        }
        .glow-2 {
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(79, 70, 229, 0.35) 0%, rgba(0, 0, 0, 0) 70%);
            bottom: -150px;
            right: -100px;
            animation: float-slow 15s infinite alternate-reverse ease-in-out;
        }

        @keyframes float-slow {
            0% { transform: translateY(0px) scale(1); }
            100% { transform: translateY(30px) scale(1.05); }
        }

        /* Glassmorphism card */
        .glass-card {
            background: rgba(15, 23, 67, 0.55);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
        }

        /* Soft input glow */
        .glow-input:focus {
            box-shadow: 0 0 15px rgba(90, 75, 250, 0.25);
            border-color: rgba(90, 75, 250, 0.6);
        }
    </style>
</head>
<body class="h-full flex items-center justify-center p-4 relative">

    <!-- Decorative background elements -->
    <div class="glow-sphere glow-1"></div>
    <div class="glow-sphere glow-2"></div>

    <div class="w-full max-w-md z-10 transition-all duration-300 transform">
        <!-- Logo Header -->
        <div class="text-center mb-6">
            @php
                $adminLogoContent = \App\Models\FrontendContent::where('section', 'Header Settings')->where('key', 'logo')->first();
            @endphp
            <div class="inline-flex items-center justify-center bg-white rounded-2xl h-20 w-20 shadow-xl overflow-hidden p-2.5 mb-4 border border-white/10 transition-transform duration-300 hover:scale-105">
                @if(isset($adminLogoContent->value) && !empty(trim($adminLogoContent->value)))
                    <img src="{{ asset($adminLogoContent->value) }}" alt="Logo" class="max-h-full max-w-full object-contain" />
                @else
                    <span class="text-lg text-indigo-900 font-extrabold tracking-wider">BOLD</span>
                @endif
            </div>
            <h2 class="text-3xl font-extrabold text-white tracking-tight">Bold Fellows</h2>
    
        </div>

        <!-- Glassmorphism Login Card -->
        <div class="glass-card rounded-2xl p-8 md:p-10 transition-all">
            
            <!-- Success / Alert Notifications -->
            @if(session('success'))
                <div class="mb-5 flex items-center bg-emerald-500/15 border border-emerald-500/30 text-emerald-300 px-4 py-3 rounded-xl text-sm animate-fade-in gap-3">
                    <i class="fas fa-check-circle text-base"></i>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if($errors->any())
                <div class="mb-5 flex flex-col bg-red-500/15 border border-red-500/30 text-red-300 px-4 py-3 rounded-xl text-sm gap-1">
                    <div class="flex items-center gap-3 font-semibold">
                        <i class="fas fa-exclamation-circle text-base"></i>
                        <span>Authentication Failed</span>
                    </div>
                    <ul class="list-disc list-inside pl-7 mt-1 text-red-200/90 text-xs">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ url('/admin/login') }}" method="POST" class="space-y-6">
                @csrf
                
                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider mb-2">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-500">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <input type="email" name="email" id="email" required autofocus value="{{ old('email') }}"
                            class="w-full bg-slate-900/60 border border-slate-700/60 rounded-xl py-3 pl-10 pr-4 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 glow-input transition-all duration-200 text-sm"
                            placeholder="name@company.com">
                    </div>
                </div>

                <!-- Password Field -->
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label for="password" class="block text-xs font-semibold text-gray-300 uppercase tracking-wider">Password</label>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-500">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input type="password" name="password" id="password" required
                            class="w-full bg-slate-900/60 border border-slate-700/60 rounded-xl py-3 pl-10 pr-10 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 glow-input transition-all duration-200 text-sm"
                            placeholder="••••••••">
                        <button type="button" onclick="togglePasswordVisibility()" class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-gray-500 hover:text-white transition-colors duration-150">
                            <i id="passwordToggleIcon" class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <!-- Remember Me & Extra Options -->
                <div class="flex items-center justify-between text-xs">
                    <label class="flex items-center text-gray-300 cursor-pointer select-none">
                        <input type="checkbox" name="remember" class="sr-only peer">
                        <div class="w-4 h-4 bg-slate-900/60 border border-slate-700 rounded flex items-center justify-center mr-2 peer-checked:bg-indigo-600 peer-checked:border-indigo-600 transition-colors">
                            <i class="fas fa-check text-[10px] text-white hidden peer-checked:block"></i>
                        </div>
                        <span>Remember me</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-gradient-to-r from-indigo-500 to-indigo-600 hover:from-indigo-600 hover:to-indigo-700 text-white font-bold py-3 px-4 rounded-xl shadow-lg transition-all duration-200 hover:shadow-indigo-500/20 active:scale-[0.99] focus:outline-none focus:ring-2 focus:ring-indigo-500/50 text-sm flex items-center justify-center gap-2">
                    <span>Sign In</span>
                    <i class="fas fa-arrow-right text-xs"></i>
                </button>
            </form>
        </div>

        <!-- Footer Info -->
        <p class="text-center text-xs text-gray-500 mt-6">
            &copy; {{ date('Y') }} Bold Fellows. All rights reserved. Secure administrator access only.
        </p>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('passwordToggleIcon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>
