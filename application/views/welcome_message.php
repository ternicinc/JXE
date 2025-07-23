<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ternic</title>

	<script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', '-apple-system', 'sans-serif']
                    }
                }
            }
        }
    </script>


</head>


<body class="bg-slate-900 text-slate-100 font-sans antialiased">

    <!-- Navigation -->
    <nav class="border-b border-slate-800 bg-slate-900/95 backdrop-blur-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-bold">
                    <a href="#" class="text-emerald-400 hover:text-emerald-300 transition-colors">
                        Ternic<span class="text-orange-400">VPS</span>
                    </a>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#features" class="text-slate-300 hover:text-white transition-colors text-sm font-medium">Features</a>
                    <a href="#plans" class="text-slate-300 hover:text-white transition-colors text-sm font-medium">Plans</a>
                    <a href="#faq" class="text-slate-300 hover:text-white transition-colors text-sm font-medium">FAQ</a>
                    <a href="https://ertixnodes.xyz/dash" class="bg-gradient-to-r from-emerald-500 to-orange-500 hover:from-emerald-600 hover:to-orange-600 text-white font-medium py-2 px-6 rounded-full transition-all duration-300 text-sm">
                        Get Started
                    </a>
                </div>
                
                <button id="menu-button" class="md:hidden text-slate-300 hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4 border-t border-slate-800 pt-4">
                <div class="flex flex-col space-y-3">
                    <a href="#features" class="text-slate-300 hover:text-white transition-colors text-sm font-medium">Features</a>
                    <a href="#plans" class="text-slate-300 hover:text-white transition-colors text-sm font-medium">Plans</a>
                    <a href="#faq" class="text-slate-300 hover:text-white transition-colors text-sm font-medium">FAQ</a>
                    <a href="https://ertixnodes.xyz/dash" class="bg-gradient-to-r from-emerald-500 to-orange-500 text-white font-medium py-2 px-6 rounded-full transition-all duration-300 text-sm text-center">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="max-w-6xl mx-auto px-6 pt-20 pb-32">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-7xl font-bold leading-tight mb-6">
                Free <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-orange-400">24/7 VPS</span> 
                <br>Hosting
            </h1>
            <p class="text-xl text-slate-400 mb-12 max-w-2xl mx-auto leading-relaxed">
                Start your projects with reliable, always-on VPS hosting. No credit card required.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="/dash" class="bg-gradient-to-r from-emerald-500 to-orange-500 hover:from-emerald-600 hover:to-orange-600 text-white font-medium py-4 px-8 rounded-full transition-all duration-300 transform hover:scale-105">
                    Get Started Free
                </a>
                <a href="https://discord.gg/VRPhZj7zTp" class="border border-slate-700 hover:border-orange-500 text-slate-300 hover:text-orange-400 font-medium py-4 px-8 rounded-full transition-all duration-300">
                    Join Discord
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="border-y border-slate-800 bg-slate-800/30 py-16">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="space-y-2">
                    <div class="text-4xl font-bold text-emerald-400">50+</div>
                    <div class="text-slate-400">Active Users</div>
                </div>
                <div class="space-y-2">
                    <div class="text-4xl font-bold text-emerald-400">12+</div>
                    <div class="text-slate-400">Running Servers</div>
                </div>
                <div class="space-y-2">
                    <div class="text-4xl font-bold text-emerald-400">98%</div>
                    <div class="text-slate-400">Uptime</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="max-w-6xl mx-auto px-6 py-24">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Why Choose TernicVPS?</h2>
            <p class="text-slate-400 text-lg">Everything you need to get started</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-slate-800/50 border border-slate-700 rounded-2xl p-8 hover:border-emerald-500/50 transition-all duration-300">
                <div class="w-12 h-12 bg-emerald-500/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Reliable Resources</h3>
                <p class="text-slate-400 leading-relaxed">
                    0.5GB RAM, 1 vCPU, and 3GB storage for all your projects. Shared resources optimized for performance.
                </p>
            </div>
            
            <div class="bg-slate-800/50 border border-slate-700 rounded-2xl p-8 hover:border-orange-500/50 transition-all duration-300">
                <div class="w-12 h-12 bg-orange-500/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">24/7 Uptime</h3>
                <p class="text-slate-400 leading-relaxed">
                    Your projects stay online around the clock with our reliable infrastructure and monitoring.
                </p>
            </div>
            
            <div class="bg-slate-800/50 border border-slate-700 rounded-2xl p-8 hover:border-emerald-500/50 transition-all duration-300">
                <div class="w-12 h-12 bg-emerald-500/20 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25a9.75 9.75 0 100 19.5 9.75 9.75 0 000-19.5zM8.25 12l7.5 0"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">24/7 Support</h3>
                <p class="text-slate-400 leading-relaxed">
                    Get help whenever you need it from our dedicated support team via Discord.
                </p>
            </div>
        </div>
    </section>

    <!-- Plans Section -->
    <section id="plans" class="bg-slate-800/30 py-24">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Simple Pricing</h2>
                <p class="text-slate-400 text-lg">Start free, upgrade as you grow</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <div class="bg-slate-800/50 border border-slate-700 rounded-2xl p-8 text-center">
                    <h3 class="text-2xl font-bold mb-4 text-emerald-400">Free Forever</h3>
                    <p class="text-slate-400 mb-6">Perfect for learning and small projects</p>
                    <div class="text-3xl font-bold mb-6">$0<span class="text-lg text-slate-400">/month</span></div>
                </div>
                
                <div class="bg-slate-800/50 border border-slate-700 rounded-2xl p-8 text-center">
                    <h3 class="text-2xl font-bold mb-4 text-orange-400">Earn Credits</h3>
                    <p class="text-slate-400 mb-6">Watch ads to unlock additional resources</p>
                    <div class="text-3xl font-bold mb-6">Watch<span class="text-lg text-slate-400"> & earn</span></div>
                </div>
                
                <div class="bg-slate-800/50 border border-slate-700 rounded-2xl p-8 text-center">
                    <h3 class="text-2xl font-bold mb-4 text-emerald-400">AFK Rewards</h3>
                    <p class="text-slate-400 mb-6">Stay active to upgrade your VPS automatically</p>
                    <div class="text-3xl font-bold mb-6">Auto<span class="text-lg text-slate-400"> upgrade</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="max-w-4xl mx-auto px-6 py-24">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">Frequently Asked Questions</h2>
            <p class="text-slate-400 text-lg">Everything you need to know</p>
        </div>
        
        <div class="space-y-4">
            <div class="faq-item bg-slate-800/30 border border-slate-700 rounded-xl overflow-hidden">
                <div class="faq-question p-6 cursor-pointer flex justify-between items-center hover:bg-slate-800/50 transition-colors">
                    <h3 class="font-medium text-lg">What is TernicVPS?</h3>
                    <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-300 faq-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
                <div class="faq-answer hidden px-6 pb-6">
                    <p class="text-slate-400">TernicVPS is a free VPS hosting provider that offers reliable Linux containers for learning, development, and small projects. No credit card required.</p>
                </div>
            </div>
            
            <div class="faq-item bg-slate-800/30 border border-slate-700 rounded-xl overflow-hidden">
                <div class="faq-question p-6 cursor-pointer flex justify-between items-center hover:bg-slate-800/50 transition-colors">
                    <h3 class="font-medium text-lg">How do I create a VPS?</h3>
                    <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-300 faq-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
                <div class="faq-answer hidden px-6 pb-6">
                    <p class="text-slate-400">Simply sign up at our dashboard, choose a name for your VPS, and start using it immediately. The process takes less than a minute.</p>
                </div>
            </div>
            
            <div class="faq-item bg-slate-800/30 border border-slate-700 rounded-xl overflow-hidden">
                <div class="faq-question p-6 cursor-pointer flex justify-between items-center hover:bg-slate-800/50 transition-colors">
                    <h3 class="font-medium text-lg">Is a credit card required?</h3>
                    <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-300 faq-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
                <div class="faq-answer hidden px-6 pb-6">
                    <p class="text-slate-400">No credit card needed! Our free tier is completely free with no hidden costs or payment requirements.</p>
                </div>
            </div>
            
            <div class="faq-item bg-slate-800/30 border border-slate-700 rounded-xl overflow-hidden">
                <div class="faq-question p-6 cursor-pointer flex justify-between items-center hover:bg-slate-800/50 transition-colors">
                    <h3 class="font-medium text-lg">What virtualization technology do you use?</h3>
                    <svg class="w-5 h-5 text-slate-400 transform transition-transform duration-300 faq-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
                <div class="faq-answer hidden px-6 pb-6">
                    <p class="text-slate-400">We use LXC (Linux Containers) virtualization, which provides excellent performance and resource efficiency for your applications.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-slate-800 bg-slate-800/30 py-12">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-start space-y-8 md:space-y-0">
                <div class="space-y-4">
                    <div class="text-2xl font-bold">
                        <span class="text-emerald-400">Ternic</span><span class="text-orange-400">VPS</span>
                    </div>
                    <p class="text-slate-400 max-w-sm">Free Linux VPS hosting for developers, students, and enthusiasts. Start building today.</p>
                    <p class="text-slate-500 text-sm">© 2025 TernicVPS. All rights reserved.</p>
                </div>
                
                <div class="flex flex-col space-y-4">
                    <h4 class="font-semibold text-lg">Quick Links</h4>
                    <div class="flex flex-col space-y-2">
                        <a href="https://discord.gg/xD297NPWzs" class="text-slate-400 hover:text-emerald-400 transition-colors">Discord Community</a>
                        <a href="/dash" class="text-slate-400 hover:text-emerald-400 transition-colors">Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // FAQ functionality
        document.querySelectorAll('.faq-question').forEach(item => {
            item.addEventListener('click', () => {
                const answer = item.nextElementSibling;
                const arrow = item.querySelector('.faq-arrow');
                const isOpen = !answer.classList.contains('hidden');
                
                // Close all other FAQ items
                document.querySelectorAll('.faq-answer').forEach(a => a.classList.add('hidden'));
                document.querySelectorAll('.faq-arrow').forEach(arr => arr.classList.remove('rotate-180'));
                
                if (!isOpen) {
                    answer.classList.remove('hidden');
                    arrow.classList.add('rotate-180');
                }
            });
        });

        // Mobile menu functionality
        document.getElementById('menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>


</html>
