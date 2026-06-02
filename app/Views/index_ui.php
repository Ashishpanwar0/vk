<?= view('template/header') ?>

<?= view('componants/hero_section.php')?>
<!-- ── PREMIUM MARQUEE ── -->
<div class="overflow-hidden bg-[#F8F3E7] border-y border-[#D4A843]/20 py-3" aria-hidden="true">
    <div class="flex items-center gap-12 whitespace-nowrap w-max animate-[marquee_28s_linear_infinite]">
        
        <span class="flex items-center gap-3 text-[11px] font-bold tracking-[0.28em] uppercase text-[#B8860B]"><i class="fas fa-star text-[11px]"></i>Luxury Rooms</span>

        <span class="flex items-center gap-3 text-[11px] font-bold tracking-[0.28em] uppercase text-[#B8860B]"><i class="fas fa-wifi text-[11px]"></i>Free High-Speed WiFi</span>

        <span class="flex items-center gap-3 text-[11px] font-bold tracking-[0.28em] uppercase text-[#B8860B]"><i class="fas fa-utensils text-[11px]"></i>Multi-Cuisine Restaurant</span>

        <span class="flex items-center gap-3 text-[11px] font-bold tracking-[0.28em] uppercase text-[#B8860B]"><i class="fas fa-glass-cheers text-[11px]"></i>Grand Banquet Hall</span>

        <span class="flex items-center gap-3 text-[11px] font-bold tracking-[0.28em] uppercase text-[#B8860B]"><i class="fas fa-concierge-bell text-[11px]"></i>24/7 Concierge</span>

        <span class="flex items-center gap-3 text-[11px] font-bold tracking-[0.28em] uppercase text-[#B8860B]"><i class="fas fa-parking text-[11px]"></i>Free Parking</span>

        <span class="flex items-center gap-3 text-[11px] font-bold tracking-[0.28em] uppercase text-[#B8860B]"><i class="fas fa-shield-alt text-[11px]"></i>Secure Stay</span>

        <span class="flex items-center gap-3 text-[11px] font-bold tracking-[0.28em] uppercase text-[#B8860B]"><i class="fas fa-map-marker-alt text-[11px]"></i>Kannauj, UP</span>

        <!-- DUPLICATE -->
        
        <span class="flex items-center gap-3 text-[11px] font-bold tracking-[0.28em] uppercase text-[#B8860B]"><i class="fas fa-star text-[11px]"></i>Luxury Rooms</span>

        <span class="flex items-center gap-3 text-[11px] font-bold tracking-[0.28em] uppercase text-[#B8860B]"><i class="fas fa-wifi text-[11px]"></i>Free High-Speed WiFi</span>

        <span class="flex items-center gap-3 text-[11px] font-bold tracking-[0.28em] uppercase text-[#B8860B]"><i class="fas fa-utensils text-[11px]"></i>Multi-Cuisine Restaurant</span>

        <span class="flex items-center gap-3 text-[11px] font-bold tracking-[0.28em] uppercase text-[#B8860B]"><i class="fas fa-glass-cheers text-[11px]"></i>Grand Banquet Hall</span>

        <span class="flex items-center gap-3 text-[11px] font-bold tracking-[0.28em] uppercase text-[#B8860B]"><i class="fas fa-concierge-bell text-[11px]"></i>24/7 Concierge</span>

        <span class="flex items-center gap-3 text-[11px] font-bold tracking-[0.28em] uppercase text-[#B8860B]"><i class="fas fa-parking text-[11px]"></i>Free Parking</span>

        <span class="flex items-center gap-3 text-[11px] font-bold tracking-[0.28em] uppercase text-[#B8860B]"><i class="fas fa-shield-alt text-[11px]"></i>Secure Stay</span>

        <span class="flex items-center gap-3 text-[11px] font-bold tracking-[0.28em] uppercase text-[#B8860B]"><i class="fas fa-map-marker-alt text-[11px]"></i>Kannauj, UP</span>

    </div>
</div>

<style>
@keyframes marquee{
0%{transform:translateX(0)}
100%{transform:translateX(-50%)}
}
</style>



<!-- ================= ABOUT SECTION START ================= -->
<section class="py-20 lg:py-28 bg-[#F8F5EF] overflow-hidden">
    <div class="max-w-[1450px] mx-auto px-5 lg:px-10">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- LEFT -->
            <div>

                <span class="uppercase tracking-[5px] text-[#B8842C] text-sm font-medium">
                    About VK Grand
                </span>

                <h2 class="mt-4 text-5xl lg:text-7xl leading-tight font-serif text-[#111]">
                    Kannauj's Finest
                    <br>
                    <span class="italic text-[#C39138] font-normal">
                        Luxury Hotel
                    </span>
                </h2>

                <div class="mt-8 space-y-6 text-[#555] text-lg leading-relaxed max-w-[700px]">

                    <p>
                        Nestled in Kannauj — India's perfume capital — VK Grand Hotel is a sanctuary of refined elegance and authentic Indian warmth. Every room, meal, and interaction is crafted to make your stay truly unforgettable.
                    </p>

                    <p>
                        Whether you're here for business, leisure, or a grand celebration, VK Grand delivers an experience that resonates long after checkout.
                    </p>

                </div>

                <div class="flex items-center mt-8 mb-8">
                    <div class="h-px flex-1 bg-[#E7DCC7]"></div>
                    <span class="px-5 text-xs tracking-[4px] uppercase text-[#B8842C]">
                        Est. In Kannauj, UP
                    </span>
                    <div class="h-px flex-1 bg-[#E7DCC7]"></div>
                </div>

                <a href="<?= base_url('about') ?>"
                   class="inline-flex items-center gap-3 border border-[#C39138] text-white px-8 py-4 rounded-full uppercase tracking-[2px] text-sm bg-[#C39138] hover:bg-[#0F6B5B] hover:text-white transition">

                    Our Story
                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>

            <!-- RIGHT -->
            <div class="relative">

                <!-- Main Image -->
                <div class="rounded-[24px] overflow-hidden shadow-xl">
                    <img
                        src="<?= base_url('Hero-image/Hero-logo-image/show-case-6.webp') ?>"
                        alt="VK Grand"
                        class="w-full h-[420px] lg:h-[500px] object-cover"
                    >
                </div>

                <!-- Floating Small Image -->
                <div class="absolute -bottom-8 right-0 lg:-right-5 w-[270px]">
                    <div class="bg-white p-2 rounded-3xl shadow-2xl">
                        <img
                            src="<?= base_url('Hero-image/Hero-logo-image/vk-grand (2).webp') ?>"
                            alt="Luxury Room"
                            class="w-full h-[170px] object-cover rounded-2xl"
                        >
                    </div>
                </div>

            </div>

        </div>

        <!-- STATS -->
        <div class="grid md:grid-cols-3 gap-5 mt-24">

            <div class="bg-white rounded-3xl p-8 text-center shadow-sm">
                <div class="text-5xl font-serif text-[#C39138]">
                    40+
                </div>
                <div class="mt-2 text-[#555]">
                    Premium Rooms
                </div>
            </div>

            <div class="bg-white rounded-3xl p-8 text-center shadow-sm">
                <div class="text-5xl font-serif text-[#C39138]">
                    500+
                </div>
                <div class="mt-2 text-[#555]">
                    Events Hosted
                </div>
            </div>

            <div class="bg-white rounded-3xl p-8 text-center shadow-sm">
                <div class="text-5xl font-serif text-[#C39138]">
                    4.8★
                </div>
                <div class="mt-2 text-[#555]">
                    Guest Rating
                </div>
            </div>

        </div>

    </div>
</section>


 <!-- rooms slider page -->
  <?= view('componants/rooms-slider')?>

<!-- hotel facilities  -->
<?= view('componants/facilities_section') ?>

<!-- vk grand expensive section -->
 <?= view('componants/vk-grand-expensive-section.php')?>

 <!-- testimonial section -->
  <?= view('componants/testimonials') ?>


  <!-- Contact Page start here -->
   <section class="bg-[#F8F6F3] py-8">
    <div class="max-w-7xl mx-auto px-5">

        <!-- Heading -->
        <div class="mb-10">
            <p class="uppercase tracking-[4px] text-[11px] text-[#c8a25d] font-medium">
                GET IN TOUCH
            </p>

            <h2 class="text-5xl font-serif text-black mt-2">
                Contact <span class="text-[#c8a25d] italic">VK Grand</span>
            </h2>
        </div>

        <!-- Contact Cards -->
        <div class="grid md:grid-cols-2 gap-5">

            <!-- Phone -->
            <a href="tel:+918052065111"
                class="bg-white rounded-2xl px-6 py-5 flex items-center justify-between shadow hover:shadow-lg transition">

                <div class="flex items-center gap-4">

                    <div class="w-12 h-12 rounded-xl bg-[#f7f1e3] flex items-center justify-center">
                        <i class="fa-solid fa-phone text-[#c8a25d]"></i>
                    </div>

                    <div>
                        <p class="text-[10px] uppercase tracking-widest text-gray-400">
                            Call Us
                        </p>

                        <h4 class="font-medium text-gray-800">
                            +91 8052065111
                        </h4>
                    </div>

                </div>

                <i class="fa-solid fa-chevron-right text-[#c8a25d]"></i>

            </a>

            <!-- WhatsApp -->
            <a href="https://wa.me/918052065111"
                target="_blank"
                class="bg-white rounded-2xl px-6 py-5 flex items-center justify-between shadow hover:shadow-lg transition">

                <div class="flex items-center gap-4">

                    <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center">
                        <i class="fab fa-whatsapp text-green-500 text-lg"></i>
                    </div>

                    <div>
                        <p class="text-[10px] uppercase tracking-widest text-gray-400">
                            WhatsApp
                        </p>

                        <h4 class="font-medium text-gray-800">
                            Chat With Us
                        </h4>
                    </div>

                </div>

                <i class="fa-solid fa-chevron-right text-[#c8a25d]"></i>

            </a>

            <!-- Email -->
            <a href="mailto:info@vkgrand.com"
                class="bg-white rounded-2xl px-6 py-5 flex items-center justify-between shadow hover:shadow-lg transition">

                <div class="flex items-center gap-4">

                    <div class="w-12 h-12 rounded-xl bg-[#f7f1e3] flex items-center justify-center">
                        <i class="fa-solid fa-envelope text-[#c8a25d]"></i>
                    </div>

                    <div>
                        <p class="text-[10px] uppercase tracking-widest text-gray-400">
                            Email
                        </p>

                        <h4 class="font-medium text-gray-800">
                            info@vkgrand.com
                        </h4>
                    </div>

                </div>

                <i class="fa-solid fa-chevron-right text-[#c8a25d]"></i>

            </a>

            <!-- Address -->
            <a href="https://maps.google.com/?q=VK+Grand+Hotel+Lucknow"
                target="_blank"
                class="bg-white rounded-2xl px-6 py-5 flex items-center justify-between shadow hover:shadow-lg transition">

                <div class="flex items-center gap-4">

                    <div class="w-12 h-12 rounded-xl bg-[#f7f1e3] flex items-center justify-center">
                        <i class="fa-solid fa-location-dot text-[#c8a25d]"></i>
                    </div>

                    <div>
                        <p class="text-[10px] uppercase tracking-widest text-gray-400">
                            Address
                        </p>

                        <h4 class="font-medium text-gray-800">
                            VK Grand Hotel, Lucknow, Uttar Pradesh
                        </h4>
                    </div>

                </div>

                <i class="fa-solid fa-chevron-right text-[#c8a25d]"></i>

            </a>

        </div>

        <!-- Google Map -->
        <div class="mt-5 rounded-2xl overflow-hidden border border-[#ddd] shadow">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.9458787068574!2d80.94620147519788!3d26.845694476678255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be2e6c0000001%3A0x0!2zMjbCsDUwJzQ0LjUiTiA4MMKwNTYnNTYuMyJF!5e0!3m2!1sen!2sin!4v1700000000000"
                width="100%"
                height="350"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>

            <!-- <div class="bg-[#ece7db] py-8 text-center">

                <i class="fa-solid fa-map-location-dot text-4xl text-[#c8a25d] mb-3"></i>

                <p class="text-gray-500 text-sm mb-5">
                    Find us easily with Google Maps
                </p>

                <a href="https://maps.google.com/?q=26.845694,80.946201"
                    target="_blank"
                    class="inline-flex items-center px-8 py-3 border border-[#c8a25d] rounded-full text-[#c8a25d] hover:bg-[#c8a25d] hover:text-white transition">

                    OPEN IN MAPS

                </a>

            </div> -->

        </div>

    </div>
</section>

<?= view('componants/cta-card')?>

<!-- Footer Section  -->
<?= view('template/footer') ?>


 