<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>VK Grand Hotel</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'serif': ['Cormorant Garamond', 'serif'],
                    },
                    colors: {
                        'gold': '#C09130',
                        'green': '#0F6B5B',
                        'dark': '#111111',
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Base Font */
        html, body, * {
            font-family: 'Cormorant Garamond', serif !important;
        }
        
        /* Font Awesome Fix */
        i, .fas, .far, .fab, .fa-solid, .fa-regular, .fa-brands {
            font-family: "Font Awesome 6 Free" !important;
        }
        
        .fab, .fa-brands {
            font-family: "Font Awesome 6 Brands" !important;
        }
        
        /* Base Body */
        body {
            background-color: #F8F5EF;
            overflow-x: hidden;
        }
        
        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 5px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #C09130;
            border-radius: 5px;
        }
    </style>
</head>
<body class="font-serif bg-[#F8F5EF]">

<!-- Header -->
<header class="bg-white sticky top-0 z-50 shadow-sm transition-all duration-300" id="navbar">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-10 xl:px-14">
        <div class="flex items-center justify-between py-3 sm:py-4 md:py-5">
            
            <!-- Logo -->
            <a href="<?= base_url('/') ?>" class="flex-shrink-0">
                <img src="<?= base_url('Hero-image/Hero-logo-image/vk-grand-logo.webp') ?>" 
                     class="h-14 sm:h-16 md:h-20 lg:h-24 w-auto object-contain" 
                     alt="VK Grand Logo">
            </a>
            
            <!-- Desktop Navigation - Large Fonts -->
            <nav class="hidden lg:flex items-center gap-8 xl:gap-12">
                <a href="<?= base_url('/') ?>" class="text-[18px] xl:text-[20px] font-semibold text-[#222] hover:text-gold transition-colors relative after:absolute after:bottom-[-6px] after:left-0 after:w-0 after:h-[2px] after:bg-gold after:transition-all hover:after:w-full">Home</a>
                
                <a href="<?= base_url('about') ?>" class="text-[18px] xl:text-[20px] font-semibold text-[#222] hover:text-gold transition-colors relative after:absolute after:bottom-[-6px] after:left-0 after:w-0 after:h-[2px] after:bg-gold after:transition-all hover:after:w-full">About Us</a>
                
                <a href="<?= base_url('rooms') ?>" class="text-[18px] xl:text-[20px] font-semibold text-[#222] hover:text-gold transition-colors relative after:absolute after:bottom-[-6px] after:left-0 after:w-0 after:h-[2px] after:bg-gold after:transition-all hover:after:w-full">Our Rooms</a>
                
                <!-- Restaurant Dropdown - MAWA & BAITHAK -->
                <div class="relative group">
                    <button class="flex items-center gap-2 text-[18px] xl:text-[20px] font-semibold text-[#222] hover:text-gold transition-colors">
                        Restaurant
                        <i class="fa-solid fa-angle-down text-sm transition-transform group-hover:rotate-180"></i>
                    </button>
                    <div class="absolute top-full left-1/2 -translate-x-1/2 mt-4 bg-white min-w-[220px] rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all py-2 border border-gray-100 z-50">
                        <a href="<?= base_url('mawa') ?>" class="block px-6 py-3 text-[17px] font-medium hover:bg-gray-50 hover:text-gold transition-colors">
                            <i class="fa-solid fa-utensils text-gold mr-3 text-sm"></i>MAAVA
                        </a>
                        <a href="<?= base_url('baithak') ?>" class="block px-6 py-3 text-[17px] font-medium hover:bg-gray-50 hover:text-gold transition-colors">
                            <i class="fa-solid fa-mug-hot text-gold mr-3 text-sm"></i> BAITHAK
                        </a>
                    </div>
                </div>
                
                <!-- Venue Dropdown - BANQUET & LAWN -->
                <div class="relative group">
                    <button class="flex items-center gap-2 text-[18px] xl:text-[20px] font-semibold text-[#222] hover:text-gold transition-colors">
                        Our Venue
                        <i class="fa-solid fa-angle-down text-sm transition-transform group-hover:rotate-180"></i>
                    </button>
                    <div class="absolute top-full left-1/2 -translate-x-1/2 mt-4 bg-white min-w-[220px] rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all py-2 border border-gray-100 z-50">
                        <a href="<?= base_url('banquet') ?>" class="block px-6 py-3 text-[17px] font-medium hover:bg-gray-50 hover:text-gold transition-colors">
                            <i class="fa-solid fa-champagne-glasses text-gold mr-3 text-sm"></i> BANQUET
                        </a>
                        <a href="<?= base_url('lawn') ?>" class="block px-6 py-3 text-[17px] font-medium hover:bg-gray-50 hover:text-gold transition-colors">
                            <i class="fa-solid fa-tree text-gold mr-3 text-sm"></i> LAWN
                        </a>
                    </div>
                </div>
                
                <a href="<?= base_url('contact') ?>" class="text-[18px] xl:text-[20px] font-semibold text-[#222] hover:text-gold transition-colors relative after:absolute after:bottom-[-6px] after:left-0 after:w-0 after:h-[2px] after:bg-gold after:transition-all hover:after:w-full">Contact Us</a>
            </nav>
            
            <!-- Right Side - Book Now Button -->
            <div class="flex items-center gap-4">
                <a href="<?= base_url('book-now') ?>" 
                   class="hidden lg:flex items-center gap-2 px-6 xl:px-8 py-3 xl:py-3.5 bg-gold text-white font-bold text-[16px] xl:text-[18px] rounded-full hover:bg-green transition-all shadow-md hover:shadow-xl">
                    <i class="fa-regular fa-calendar-check"></i> Book Now
                </a>
                
                <!-- Mobile Menu Button -->
                <button id="hamburger" class="lg:hidden w-11 h-11 md:w-12 md:h-12 flex items-center justify-center text-2xl text-green border-2 border-gray-200 rounded-xl hover:bg-gold hover:text-white hover:border-gold transition-all">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Menu Overlay -->
<div id="overlay" class="fixed inset-0 bg-black/70 z-[998] opacity-0 invisible transition-all duration-300"></div>

<!-- Mobile Menu -->
<div id="mobileMenu" class="fixed top-0 right-[-100%] w-[85%] max-w-[350px] h-screen bg-dark z-[999] transition-all duration-500 overflow-y-auto shadow-2xl">
    <!-- Header -->
    <div class="p-5 flex items-center justify-between border-b border-white/15">
        <img src="<?= base_url('Hero-image/Hero-logo-image/vk-grand-logo.webp') ?>" class="h-14 w-auto" alt="Logo">
        <button id="closeBtn" class="text-white text-3xl hover:text-gold transition-colors">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    
    <!-- Menu Links -->
    <div class="px-5 py-6">
        <a href="<?= base_url('/') ?>" class="block py-4 text-white text-[18px] font-medium border-b border-white/15 hover:text-gold transition-colors">Home</a>
        <a href="<?= base_url('about') ?>" class="block py-4 text-white text-[18px] font-medium border-b border-white/15 hover:text-gold transition-colors">About Us</a>
        <a href="<?= base_url('rooms') ?>" class="block py-4 text-white text-[18px] font-medium border-b border-white/15 hover:text-gold transition-colors">Our Rooms</a>
        
        <!-- Restaurant Section -->
        <div class="mt-6 mb-3 text-gold text-[13px] font-bold tracking-wider uppercase">Restaurant</div>
        <a href="<?= base_url('mawa') ?>" class="flex items-center gap-3 py-3 text-white/80 pl-4 text-[16px] hover:text-gold transition-colors">
            <i class="fa-solid fa-utensils text-gold text-sm"></i> MAWA
        </a>
        <a href="<?= base_url('baithak') ?>" class="flex items-center gap-3 py-3 text-white/80 pl-4 text-[16px] hover:text-gold transition-colors">
            <i class="fa-solid fa-mug-hot text-gold text-sm"></i> BAITHAK
        </a>
        
        <!-- Venue Section -->
        <div class="mt-6 mb-3 text-gold text-[13px] font-bold tracking-wider uppercase">Our Venue</div>
        <a href="<?= base_url('banquet') ?>" class="flex items-center gap-3 py-3 text-white/80 pl-4 text-[16px] hover:text-gold transition-colors">
            <i class="fa-solid fa-champagne-glasses text-gold text-sm"></i> BANQUET
        </a>
        <a href="<?= base_url('lawn') ?>" class="flex items-center gap-3 py-3 text-white/80 pl-4 text-[16px] hover:text-gold transition-colors">
            <i class="fa-solid fa-tree text-gold text-sm"></i> LAWN
        </a>
        
        <a href="<?= base_url('contact') ?>" class="block py-4 text-white text-[18px] font-medium border-t border-white/15 mt-6 pt-4 hover:text-gold transition-colors">Contact Us</a>
    </div>
    
    <!-- Bottom Section -->
    <div class="p-5 border-t border-white/15">
        <a href="<?= base_url('book-now') ?>" class="block w-full text-center bg-gold hover:bg-green py-4 rounded-full text-white font-bold text-[18px] transition-all">
            <i class="fa-regular fa-calendar-check mr-2"></i> Book Now
        </a>
        
        <div class="mt-6 text-center">
            <a href="tel:+918052065111" class="text-white/70 hover:text-gold text-[16px] flex items-center justify-center gap-2 transition-colors">
                <i class="fa-solid fa-phone"></i> +91-8052065111
            </a>
        </div>
        
        <div class="flex justify-center gap-3 mt-6">
            <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white text-base hover:bg-gold hover:text-dark transition-all">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white text-base hover:bg-gold hover:text-dark transition-all">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white text-base hover:bg-gold hover:text-dark transition-all">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white text-base hover:bg-gold hover:text-dark transition-all">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
    </div>
</div>

<script>
// Mobile Menu JavaScript
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');
const overlay = document.getElementById('overlay');
const closeBtn = document.getElementById('closeBtn');
const navbar = document.getElementById('navbar');

function openMenu() {
    mobileMenu.style.right = '0';
    overlay.classList.add('opacity-100', 'visible');
    document.body.style.overflow = 'hidden';
}

function closeMenu() {
    mobileMenu.style.right = '-100%';
    overlay.classList.remove('opacity-100', 'visible');
    document.body.style.overflow = 'auto';
}

if (hamburger) hamburger.addEventListener('click', openMenu);
if (closeBtn) closeBtn.addEventListener('click', closeMenu);
if (overlay) overlay.addEventListener('click', closeMenu);

// Navbar shadow on scroll
window.addEventListener('scroll', () => {
    if (navbar) {
        if (window.scrollY > 50) {
            navbar.classList.add('shadow-md');
            navbar.classList.add('bg-white/95');
            navbar.classList.add('backdrop-blur-sm');
        } else {
            navbar.classList.remove('shadow-md');
            navbar.classList.remove('bg-white/95');
            navbar.classList.remove('backdrop-blur-sm');
        }
    }
});
</script>

<!-- Main Content Starts -->