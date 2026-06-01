<?= view('template/header') ?>

<!-- Hero Section -->
<?= view('componants/hero', [
    'title' => 'Book Now',
    'subtitle' => 'Reserve Your Stay at VK Grand',
    'bg' => 'Hero-image/Hero-logo-image/slider-1.webp'
]) ?>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 md:py-20">
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 md:gap-10">
        
        <!-- Booking Form - Main Area -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 md:p-8">
                <div class="mb-6">
                    <span class="text-[#C09130] text-xs font-semibold tracking-wider uppercase">Reserve Your Stay</span>
                    <h2 class="font-serif text-2xl md:text-3xl text-[#111] mt-1">Book Your Room</h2>
                    <div class="w-12 h-0.5 bg-[#C09130] mt-3"></div>
                    <p class="text-gray-500 text-sm mt-3">Fill in your details to confirm your booking</p>
                </div>
                
                <!-- Booking Form -->
                <?= view('forms/booking-form') ?>
            </div>
        </div>
        
        <!-- Sidebar - Booking Info -->
        <div class="lg:col-span-1 space-y-6">
            
            <!-- Contact Info -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-full bg-[#C09130] flex items-center justify-center">
                        <i class="fa-solid fa-phone text-white text-sm"></i>
                    </div>
                    <h3 class="font-semibold text-lg text-[#111]">Need Help?</h3>
                </div>
                <p class="text-gray-600 text-sm mb-3">Call us for instant booking assistance</p>
                <a href="tel:+918052065111" class="text-xl font-bold text-[#C09130] hover:text-[#0F6B5B] transition">+91-8052065111</a>
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <a href="mailto:info@vkgrand.com" class="text-gray-600 hover:text-[#C09130] transition">info@vkgrand.com</a>
                </div>
            </div>
            
            <!-- Room Types -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6">
                <h3 class="font-semibold text-lg text-[#111] mb-4">Our Rooms</h3>
                <div class="space-y-3">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Deluxe Room</span>
                        <span class="text-[#C09130] font-semibold">₹4,999/night</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Super Deluxe</span>
                        <span class="text-[#C09130] font-semibold">₹6,999/night</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Executive Suite</span>
                        <span class="text-[#C09130] font-semibold">₹9,999/night</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Presidential Suite</span>
                        <span class="text-[#C09130] font-semibold">₹15,999/night</span>
                    </div>
                </div>
            </div>
            
            <!-- Amenities -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6">
                <h3 class="font-semibold text-lg text-[#111] mb-4">Amenities</h3>
                <div class="grid grid-cols-2 gap-2">
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-wifi text-[#C09130]"></i> Free WiFi
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-tv text-[#C09130]"></i> Smart TV
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-utensils text-[#C09130]"></i> Restaurant
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-car text-[#C09130]"></i> Parking
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-dumbbell text-[#C09130]"></i> Gym
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <i class="fa-solid fa-spa text-[#C09130]"></i> Spa
                    </div>
                </div>
            </div>
            
            <!-- Payment Info -->
            <div class="bg-[#faf8f3] rounded-2xl p-6 border border-[#f1e8d2]">
                <div class="flex items-center gap-3 mb-3">
                    <i class="fa-solid fa-credit-card text-[#C09130] text-xl"></i>
                    <h3 class="font-semibold text-[#111]">Payment Options</h3>
                </div>
                <p class="text-gray-600 text-sm">We accept all major credit/debit cards, UPI, and net banking. 50% advance required for booking confirmation.</p>
                <div class="flex gap-3 mt-4 text-2xl text-gray-400">
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-mastercard"></i>
                    <i class="fab fa-cc-amex"></i>
                    <i class="fab fa-google-pay"></i>
                    <i class="fab fa-paypal"></i>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?= view('template/footer') ?>