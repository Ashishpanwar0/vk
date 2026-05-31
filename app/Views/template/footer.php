<footer class="bg-[#1c1511] text-white relative overflow-hidden">

    <!-- Top Border -->
    <div class="h-px bg-gradient-to-r from-transparent via-[#d4a843]/30 to-transparent"></div>

    <div class="max-w-[1400px] mx-auto px-6 lg:px-14 py-20">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

            <!-- Logo -->
            <div>
                <div class="flex items-center gap-3 mb-6">

                    <div class="w-12 h-12 rounded-xl bg-[#d4a843] flex items-center justify-center text-black font-bold">
                        VK
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold">
                            VK Grand Hotel
                        </h3>

                        <p class="text-[10px] tracking-[3px] uppercase text-[#d4a843]">
                            Kannauj • UP
                        </p>
                    </div>

                </div>

                <p class="text-gray-400 leading-7 max-w-[280px]">
                    Kannauj's premier luxury hotel offering world-class hospitality since our founding.
                </p>

                <div class="flex items-center gap-3 mt-8">

                    <a href="#" class="w-11 h-11 rounded-full bg-white/5 hover:bg-[#d4a843] hover:text-black transition flex items-center justify-center">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="#" class="w-11 h-11 rounded-full bg-white/5 hover:bg-[#d4a843] hover:text-black transition flex items-center justify-center">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="#" class="w-11 h-11 rounded-full bg-white/5 hover:bg-[#d4a843] hover:text-black transition flex items-center justify-center">
                        <i class="fab fa-google"></i>
                    </a>

                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="uppercase tracking-[2px] text-sm font-semibold text-white mb-8">
                    Quick Links
                </h4>

                <ul class="space-y-4">

                    <li><a href="<?= base_url('/') ?>" class="text-gray-400 hover:text-[#d4a843] transition">Home</a></li>

                    <li><a href="<?= base_url('rooms') ?>" class="text-gray-400 hover:text-[#d4a843] transition">Rooms</a></li>

                    <li><a href="<?= base_url('restaurant') ?>" class="text-gray-400 hover:text-[#d4a843] transition">Amenities</a></li>

                    <li><a href="<?= base_url('gallery') ?>" class="text-gray-400 hover:text-[#d4a843] transition">Gallery</a></li>

                    <li><a href="<?= base_url('about') ?>" class="text-gray-400 hover:text-[#d4a843] transition">About</a></li>

                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="uppercase tracking-[2px] text-sm font-semibold text-white mb-8">
                    Services
                </h4>

                <ul class="space-y-4">

                    <li><a href="#" class="text-gray-400 hover:text-[#d4a843] transition">Banquet Hall</a></li>

                    <li><a href="#" class="text-gray-400 hover:text-[#d4a843] transition">Restaurant</a></li>

                    <li><a href="#" class="text-gray-400 hover:text-[#d4a843] transition"></a></li>

                    <li><a href="#" class="text-gray-400 hover:text-[#d4a843] transition"></a></li>

                    <li><a href="#" class="text-gray-400 hover:text-[#d4a843] transition"></a></li>

                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="uppercase tracking-[2px] text-sm font-semibold text-white mb-8">
                    Contact
                </h4>

                <div class="space-y-4">

                    <p class="text-gray-400 leading-7">
                        Main Road, Kannauj<br>
                        Uttar Pradesh 209725
                    </p>

                    <a href="tel:+918052065111"
                        class="block text-[#d4a843] font-semibold hover:text-white transition">
                        +91 80520 65111
                    </a>

                    <a href="mailto:info@vkgrand.com"
                        class="block text-gray-400 hover:text-[#d4a843] transition">
                        info@vkgrand.com
                    </a>

                </div>
            </div>

        </div>

        <!-- Bottom -->
        <div class="border-t border-white/10 mt-16 pt-8">

            <div class="flex flex-col md:flex-row items-center justify-between gap-4">

                <p class="text-gray-500 text-sm">
                    © <?= date('Y') ?> VK Grand Hotel, Kannauj. All rights reserved.
                </p>

                <div class="flex items-center gap-6 text-sm">

                    <a href="#" class="text-gray-500 hover:text-[#d4a843] transition">
                        Privacy Policy
                    </a>

                    <a href="#" class="text-gray-500 hover:text-[#d4a843] transition">
                        Terms
                    </a>

                </div>

            </div>

        </div>

    </div>

</footer>