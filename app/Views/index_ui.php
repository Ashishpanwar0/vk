<?= view('template/header') ?>

<?= view('componants/hero_section.php')?>
<!-- ── PREMIUM MARQUEE ── -->
<div class="overflow-hidden bg-[#F8F3E7] border-y border-[#D4A843]/20 py-3" aria-hidden="true">
    <div class="flex items-center gap-12 whitespace-nowrap w-max animate-[marquee_28s_linear_infinite]">

        <span class="flex items-center gap-3 text-[14px] font-bold tracking-[0.28em] uppercase text-[#B8860B]">
            <i class="fas fa-bed text-[14px]"></i>87 Luxury Rooms
        </span>

        <span class="flex items-center gap-3 text-[14px] font-bold tracking-[0.28em] uppercase text-[#B8860B]">
            <i class="fas fa-utensils text-[14px]"></i>Pure Vegetarian Restaurant
        </span>

        <span class="flex items-center gap-3 text-[14px] font-bold tracking-[0.28em] uppercase text-[#B8860B]">
            <i class="fas fa-swimming-pool text-[14px]"></i>Swimming Pool
        </span>

        <span class="flex items-center gap-3 text-[14px] font-bold tracking-[0.28em] uppercase text-[#B8860B]">
            <i class="fas fa-dumbbell text-[14px]"></i>Fitness Centre
        </span>

        <span class="flex items-center gap-3 text-[14px] font-bold tracking-[0.28em] uppercase text-[#B8860B]">
            <i class="fas fa-spa text-[14px]"></i>Spa & Wellness
        </span>

        <span class="flex items-center gap-3 text-[14px] font-bold tracking-[0.28em] uppercase text-[#B8860B]">
            <i class="fas fa-glass-cheers text-[14px]"></i>Banquet Halls
        </span>

        <span class="flex items-center gap-3 text-[14px] font-bold tracking-[0.28em] uppercase text-[#B8860B]">
            <i class="fas fa-tree text-[14px]"></i>Expansive Event Lawns
        </span>

        <span class="flex items-center gap-3 text-[14px] font-bold tracking-[0.28em] uppercase text-[#B8860B]">
            <i class="fas fa-hot-tub text-[14px]"></i>Jacuzzi • Sauna • Steam
        </span>

        <span class="flex items-center gap-3 text-[14px] font-bold tracking-[0.28em] uppercase text-[#B8860B]">
            <i class="fas fa-map-marker-alt text-[14px]"></i>Kannauj, Uttar Pradesh
        </span>

        <!-- Duplicate for smooth marquee -->

        <span class="flex items-center gap-3 text-[14px] font-bold tracking-[0.28em] uppercase text-[#B8860B]">
            <i class="fas fa-bed text-[14px]"></i>87 Luxury Rooms
        </span>

        <span class="flex items-center gap-3 text-[14px] font-bold tracking-[0.28em] uppercase text-[#B8860B]">
            <i class="fas fa-utensils text-[14px]"></i>Pure Vegetarian Restaurant
        </span>

        <span class="flex items-center gap-3 text-[14px] font-bold tracking-[0.28em] uppercase text-[#B8860B]">
            <i class="fas fa-swimming-pool text-[14px]"></i>Swimming Pool
        </span>

        <span class="flex items-center gap-3 text-[14px] font-bold tracking-[0.28em] uppercase text-[#B8860B]">
            <i class="fas fa-dumbbell text-[14px]"></i>Fitness Centre
        </span>

        <span class="flex items-center gap-3 text-[14px] font-bold tracking-[0.28em] uppercase text-[#B8860B]">
            <i class="fas fa-spa text-[14px]"></i>Spa & Wellness
        </span>

        <span class="flex items-center gap-3 text-[14px] font-bold tracking-[0.28em] uppercase text-[#B8860B]">
            <i class="fas fa-glass-cheers text-[14px]"></i>Banquet Halls
        </span>

        <span class="flex items-center gap-3 text-[14px] font-bold tracking-[0.28em] uppercase text-[#B8860B]">
            <i class="fas fa-tree text-[14px]"></i>Expansive Event Lawns
        </span>

        <span class="flex items-center gap-3 text-[14px] font-bold tracking-[0.28em] uppercase text-[#B8860B]">
            <i class="fas fa-hot-tub text-[14px]"></i>Jacuzzi • Sauna • Steam
        </span>

        <span class="flex items-center gap-3 text-[14px] font-bold tracking-[0.28em] uppercase text-[#B8860B]">
            <i class="fas fa-map-marker-alt text-[14px]"></i>Kannauj, Uttar Pradesh
        </span>

    </div>
</div>

<style>
@keyframes marquee{
0%{transform:translateX(0)}
100%{transform:translateX(-50%)}
}
</style>



<!-- ================= ABOUT SECTION START ================= -->
<section class="bg-[#F8F6F3] py-8">
    <div class="max-w-7xl mx-auto px-5">

        <!-- Heading -->
        <div class="mb-10">
            <p class="uppercase tracking-[4px] text-[16px] font-bold text-[#c8a25d]">
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
                        <p class="text-[18px] font-bold uppercase tracking-widest">
                            Call Us
                        </p>

                        <h4 class="font-medium text-gray-800 text-xl">
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
                        <p class="text-[18px] font-bold uppercase tracking-widest">
                            WhatsApp
                        </p>

                        <h4 class="font-medium text-gray-800 text-xl">
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
                        <p class="text-[18px] font-bold uppercase tracking-widest">
                            Email
                        </p>

                        <h4 class="font-medium text-gray-800 text-xl">
                            info@vkgrand.com
                        </h4>
                    </div>

                </div>

                <i class="fa-solid fa-chevron-right text-[#c8a25d]"></i>

            </a>

            <!-- Address -->
            <a href="https://maps.google.com/?q=Hotel+VK+Grand+Kannauj"
                target="_blank"
                class="bg-white rounded-2xl px-6 py-5 flex items-center justify-between shadow hover:shadow-lg transition">

                <div class="flex items-center gap-4">

                    <div class="w-12 h-12 rounded-xl bg-[#f7f1e3] flex items-center justify-center">
                        <i class="fa-solid fa-location-dot text-[#c8a25d]"></i>
                    </div>

                    <div>
                        <p class="text-[18px] font-bold uppercase tracking-widest">
                            Address
                        </p>

                        <h4 class="font-medium text-gray-800 text-xl">
                            Tirwa Road, Kannauj, Uttar Pradesh - 209727
                        </h4>
                    </div>

                </div>

                <i class="fa-solid fa-chevron-right text-[#c8a25d]"></i>

            </a>

        </div>

        <!-- Google Map -->
        <div class="mt-5 rounded-2xl overflow-hidden border border-[#ddd] shadow">

            <iframe
                src="https://www.google.com/maps?q=Hotel+VK+Grand+Kannauj&output=embed"
                width="100%"
                height="350"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>

        </div>

    </div>
</section>


 <!-- rooms slider page -->
  <?= view('componants/rooms-slider')?>
<!-- cta button -->
<?= view('componants/cta-card')?>
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
            <p class="uppercase tracking-[4px] text-[16px] font-bold text-[#c8a25d]">
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
                        <p class="text-[18px] font-bold uppercase tracking-widest">
                            Call Us
                        </p>

                        <h4 class="font-medium text-gray-800 text-xl">
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
                        <p class="text-[18px] font-bold uppercase tracking-widest">
                            WhatsApp
                        </p>

                        <h4 class="font-medium text-gray-800 text-xl">
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
                        <p class="text-[18px] font-bold uppercase tracking-widest">
                            Email
                        </p>

                        <h4 class="font-medium text-gray-800 text-xl">
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
                        <p class="text-[18px] font-bold uppercase tracking-widest">
                            Address
                        </p>

                        <h4 class="font-medium text-gray-800 text-xl">
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

<!-- Footer Section  -->
<?= view('template/footer') ?>


 