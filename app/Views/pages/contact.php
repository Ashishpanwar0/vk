<?= view('template/header') ?>

<!-- =========== HERO =========== -->
<?= view('componants/hero', [
    'title'       => 'Contact Us',
    'subtitle'    => 'Get in Touch with VK Grand',
    'bg'          => 'Hero-image/Hero-Section/home-hero-other.png'
]) ?>

<!-- =========== MAIN CONTENT =========== -->
<div class="max-w-[1300px] mx-auto px-5 py-16 md:py-24">
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
        
        <div class="bg-white rounded-3xl p-8 text-center border border-black/5 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 group">
            <div class="w-16 h-16 mx-auto rounded-2xl bg-[#D4A843] flex items-center justify-center text-3xl text-white group-hover:bg-[#0F6B5B] transition-all">
                <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="text-[#D4A843] text-base font-semibold tracking-widest uppercase mt-6 mb-3">Address</div>
            <div class="text-gray-700 text-xl leading-relaxed">
                VK Grand Hotel,<br>
                Kannauj, Uttar Pradesh
            </div>
        </div>

        <div class="bg-white rounded-3xl p-8 text-center border border-black/5 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 group">
            <div class="w-16 h-16 mx-auto rounded-2xl bg-[#D4A843] flex items-center justify-center text-3xl text-white group-hover:bg-[#0F6B5B] transition-all">
                <i class="fa-solid fa-phone"></i>
            </div>
            <div class="text-[#D4A843] text-base font-semibold tracking-widest uppercase mt-6 mb-3">Phone</div>
            <div class="text-gray-700">
                <a href="tel:+918052065111" class="text-xl hover:text-[#0F6B5B] transition-colors">+91 80520 65111</a>
            </div>
        </div>

        <div class="bg-white rounded-3xl p-8 text-center border border-black/5 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 group">
            <div class="w-16 h-16 mx-auto rounded-2xl bg-[#D4A843] flex items-center justify-center text-3xl text-white group-hover:bg-[#0F6B5B] transition-all">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="text-[#D4A843] text-base font-semibold tracking-widest uppercase mt-6 mb-3">Email</div>
            <div class="text-gray-700">
                <a href="mailto:info@vkgrand.com" class="text-xl hover:text-[#0F6B5B] transition-colors">info@vkgrand.com</a>
            </div>
        </div>

        <div class="bg-white rounded-3xl p-8 text-center border border-black/5 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 group">
            <div class="w-16 h-16 mx-auto rounded-2xl bg-[#D4A843] flex items-center justify-center text-3xl text-white group-hover:bg-[#0F6B5B] transition-all">
                <i class="fa-solid fa-clock"></i>
            </div>
            <div class="text-[#D4A843] text-base font-semibold tracking-widest uppercase mt-6 mb-3">Check-In / Check-Out</div>
            <div class="text-gray-700 text-xl leading-relaxed">
                Check-in: <span class="font-semibold">12:00 PM</span><br>
                Check-out: <span class="font-semibold">11:00 AM</span>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

        <?= view('forms/contact-form') ?>

        <div class="space-y-10">

            <div class="rounded-3xl overflow-hidden border border-black/5 shadow-xl">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.9458787068574!2d80.94620147519788!3d26.845694476678255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be2e6c0000001%3A0x0!2zMjbCsDUwJzQ0LjUiTiA4MMKwNTYnNTYuMyJF!5e0!3m2!1sen!2sin!4v1700000000000"
                    width="100%" 
                    height="380" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="bg-white rounded-3xl p-8 border border-black/5 shadow-xl">
                <div class="text-[#D4A843] text-2xl font-semibold tracking-widest uppercase mb-8">Hotel Timings</div>
                
                <div class="space-y-6 text-xl">
                    <div class="flex justify-between items-center pb-5 border-b">
                        <span class="flex items-center gap-3"><i class="fa-solid fa-concierge-bell text-[#D4A843]"></i> Front Desk</span>
                        <span class="font-semibold text-[#0F6B5B]">24 Hours</span>
                    </div>
                    <div class="flex justify-between items-center pb-5 border-b">
                        <span class="flex items-center gap-3"><i class="fa-solid fa-utensils text-[#D4A843]"></i> Restaurant</span>
                        <span class="font-semibold text-[#0F6B5B]">7:00 AM – 11:00 PM</span>
                    </div>
                    <div class="flex justify-between items-center pb-5 border-b">
                        <span class="flex items-center gap-3"><i class="fa-solid fa-glass-cheers text-[#D4A843]"></i> Banquet Hall</span>
                        <span class="font-semibold text-[#0F6B5B]">By Booking</span>
                    </div>
                    <div class="flex justify-between items-center pb-5 border-b">
                        <span class="flex items-center gap-3"><i class="fa-solid fa-leaf text-[#D4A843]"></i> Lawn</span>
                        <span class="font-semibold text-[#0F6B5B]">6:00 AM – 10:00 PM</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="flex items-center gap-3"><i class="fa-solid fa-car text-[#D4A843]"></i> Parking</span>
                        <span class="font-semibold text-[#0F6B5B]">24 Hours 
                            <span class="ml-2 text-sm bg-green-100 text-green-700 px-4 py-1 rounded-full">Free</span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-[#D4A843] to-[#C18F2F] rounded-3xl p-8 text-white">
                <div class="mb-6">
                    <p class="font-serif text-3xl font-bold">Follow VK Grand</p>
                    <p class="text-base opacity-90 mt-2">Stay updated with latest offers & events</p>
                </div>
                <div class="flex gap-4">
                    <a href="#" class="w-12 h-12 bg-white/20 hover:bg-white hover:text-[#D4A843] rounded-2xl flex items-center justify-center text-xl transition-all"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="w-12 h-12 bg-white/20 hover:bg-white hover:text-[#D4A843] rounded-2xl flex items-center justify-center text-xl transition-all"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="w-12 h-12 bg-white/20 hover:bg-white hover:text-[#D4A843] rounded-2xl flex items-center justify-center text-xl transition-all"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="w-12 h-12 bg-white/20 hover:bg-white hover:text-[#D4A843] rounded-2xl flex items-center justify-center text-xl transition-all"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

        </div>
    </div>
</div>

<?= view('template/footer') ?>