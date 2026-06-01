<footer class="bg-[#1c1511] text-white relative overflow-hidden">
    
    <!-- Top Border -->
    <div class="h-px bg-gradient-to-r from-transparent via-[#C09130]/40 to-transparent"></div>
    
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-10 xl:px-14 py-12 sm:py-16 lg:py-20">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-10 lg:gap-12">
            
            <!-- Logo & Info Column -->
            <div>
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-12 h-12 rounded-xl bg-gold flex items-center justify-center text-dark font-bold text-lg">
                        VK
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-semibold">VK Grand Hotel</h3>
                        <p class="text-[10px] tracking-[3px] uppercase text-gold mt-1">Kannauj • UP</p>
                    </div>
                </div>
                
                <p class="text-gray-400 leading-relaxed text-sm md:text-base max-w-[280px]">
                    Kannauj's premier luxury hotel offering world-class hospitality since our founding.
                </p>
                
                <div class="flex items-center gap-3 mt-6">
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-gold hover:text-dark transition-all duration-300 flex items-center justify-center text-gray-300 hover:text-dark">
                        <i class="fab fa-facebook-f text-sm"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-gold hover:text-dark transition-all duration-300 flex items-center justify-center text-gray-300 hover:text-dark">
                        <i class="fab fa-instagram text-sm"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-gold hover:text-dark transition-all duration-300 flex items-center justify-center text-gray-300 hover:text-dark">
                        <i class="fab fa-youtube text-sm"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 hover:bg-gold hover:text-dark transition-all duration-300 flex items-center justify-center text-gray-300 hover:text-dark">
                        <i class="fab fa-whatsapp text-sm"></i>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h4 class="uppercase tracking-[2px] text-sm font-semibold text-gold mb-6">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="<?= base_url('/') ?>" class="text-gray-400 hover:text-gold transition-colors duration-300 text-sm md:text-base">Home</a></li>
                    <li><a href="<?= base_url('about') ?>" class="text-gray-400 hover:text-gold transition-colors duration-300 text-sm md:text-base">About Us</a></li>
                    <li><a href="<?= base_url('rooms') ?>" class="text-gray-400 hover:text-gold transition-colors duration-300 text-sm md:text-base">Our Rooms</a></li>
                    <li><a href="<?= base_url('contact') ?>" class="text-gray-400 hover:text-gold transition-colors duration-300 text-sm md:text-base">Contact Us</a></li>
                    <li><a href="<?= base_url('book-now') ?>" class="text-gray-400 hover:text-gold transition-colors duration-300 text-sm md:text-base">Book Now</a></li>
                </ul>
            </div>
            
            <!-- Our Venues -->
            <div>
                <h4 class="uppercase tracking-[2px] text-sm font-semibold text-gold mb-6">Our Venues</h4>
                <ul class="space-y-3">
                    <li><a href="<?= base_url('banquet') ?>" class="text-gray-400 hover:text-gold transition-colors duration-300 text-sm md:text-base">Banquet Hall</a></li>
                    <li><a href="<?= base_url('lawn') ?>" class="text-gray-400 hover:text-gold transition-colors duration-300 text-sm md:text-base">Lawn</a></li>
                    <li><a href="<?= base_url('mawa') ?>" class="text-gray-400 hover:text-gold transition-colors duration-300 text-sm md:text-base">MAWA Restaurant</a></li>
                    <li><a href="<?= base_url('baithak') ?>" class="text-gray-400 hover:text-gold transition-colors duration-300 text-sm md:text-base">BAITHAK Lounge</a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div>
                <h4 class="uppercase tracking-[2px] text-sm font-semibold text-gold mb-6">Contact Info</h4>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-location-dot text-gold text-base mt-1"></i>
                        <p class="text-gray-400 leading-relaxed text-sm md:text-base">
                            Main Road, Kannauj<br>
                            Uttar Pradesh 209725
                        </p>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-phone text-gold text-base"></i>
                        <a href="tel:+918052065111" class="text-gray-400 hover:text-gold transition-colors duration-300 text-sm md:text-base">
                            +91 80520 65111
                        </a>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-envelope text-gold text-base"></i>
                        <a href="mailto:info@vkgrand.com" class="text-gray-400 hover:text-gold transition-colors duration-300 text-sm md:text-base">
                            info@vkgrand.com
                        </a>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fa-regular fa-clock text-gold text-base"></i>
                        <p class="text-gray-400 text-sm md:text-base">
                            24/7 Guest Service
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Section -->
        <div class="border-t border-white/10 mt-10 sm:mt-12 lg:mt-16 pt-6 sm:pt-8">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-gray-500 text-xs sm:text-sm text-center sm:text-left">
                    © <?= date('Y') ?> VK Grand Hotel, Kannauj. All rights reserved.
                </p>
                
                <div class="flex items-center gap-4 sm:gap-6">
                    <a href="#" class="text-gray-500 hover:text-gold transition-colors duration-300 text-xs sm:text-sm">
                        Privacy Policy
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gold transition-colors duration-300 text-xs sm:text-sm">
                        Terms & Conditions
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gold transition-colors duration-300 text-xs sm:text-sm">
                        Sitemap
                    </a>
                </div>
            </div>
        </div>
        
    </div>
</footer>

<!-- Back to Top Button -->
<button id="backToTop" class="fixed bottom-6 right-6 w-11 h-11 rounded-full bg-gold text-dark hover:bg-green hover:text-white transition-all duration-300 shadow-lg flex items-center justify-center z-40 opacity-0 invisible">
    <i class="fa-solid fa-arrow-up text-lg"></i>
</button>

<script>
    // Back to Top Button
    const backToTop = document.getElementById('backToTop');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTop.classList.remove('opacity-0', 'invisible');
            backToTop.classList.add('opacity-100', 'visible');
        } else {
            backToTop.classList.add('opacity-0', 'invisible');
            backToTop.classList.remove('opacity-100', 'visible');
        }
    });
    
    backToTop.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>

</body>
</html>