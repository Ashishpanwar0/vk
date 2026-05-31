<?= view('template/header') ?>
<?= view('componants/hero', [

    'title' => 'About Us',
    'subtitle' => 'Welcome to our website',
    'bg' => 'Hero-image/Hero-logo-image/slider-3.webp'

]) ?>
<!-- About Section -->
<section class="py-24 bg-[#f7f5f1] overflow-hidden">

    <div class="max-w-[1400px] mx-auto px-5 lg:px-14">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- Left Content -->
            <div>

                <span class="uppercase tracking-[4px] text-xs text-[#c6953a] font-semibold">
                    Our Story
                </span>

                <h2 class="mt-4 text-5xl lg:text-6xl font-serif leading-tight text-[#111]">
                    Born from a Passion
                    <br>
                    for
                    <span class="italic text-[#c6953a]">
                        Hospitality
                    </span>
                </h2>

                <p class="mt-8 text-gray-600 leading-8">
                    VK Grand Hotel was founded with a singular vision — to create
                    a luxurious sanctuary in the heart of Kannauj, where every guest
                    feels like royalty. What began as a dream to bring world-class
                    hospitality to Uttar Pradesh has grown into Kannauj's most
                    celebrated hotel.
                </p>

                <p class="mt-6 text-gray-600 leading-8">
                    Kannauj — the perfume capital of India — deserved a hotel that
                    matched its rich heritage and cultural depth. We built VK Grand
                    to honour this city, its warmth, its traditions, and its spirit
                    of welcome.
                </p>

                <p class="mt-6 text-gray-600 leading-8">
                    From intimate family stays to grand wedding receptions, from
                    executive business travel to romantic getaways — VK Grand has
                    been the chosen destination for thousands of guests from across India.
                </p>

                <div class="flex items-center gap-5 mt-10">

                    <span class="w-40 h-[1px] bg-[#d7c5a4]"></span>

                    <span class="uppercase tracking-[5px] text-[11px] text-[#c6953a] font-medium">
                        Our Journey
                    </span>

                </div>

            </div>

            <!-- Right Image Area -->
            <div class="relative">

                <!-- Main Image -->
                <div class="h-[450px] rounded-3xl overflow-hidden shadow-2xl">

                    <img src="<?= base_url('uploads/about-hotel.jpg') ?>"
                        alt="VK Grand Hotel"
                        class="w-full h-full object-cover">

                </div>

                <!-- Floating Card -->
                <!-- <div class="absolute -bottom-8 left-0 lg:-left-8 bg-white rounded-2xl p-6 shadow-xl border-4 border-white">

                    <div class="flex items-center gap-4">

                        <div class="w-14 h-14 rounded-full bg-[#d4a843]/20 flex items-center justify-center">
                            <i class="fa-solid fa-users text-[#d4a843] text-xl"></i>
                        </div>
                    </div>

                </div> -->

            </div>

        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 mt-24">

            <div class="bg-white rounded-3xl p-8 text-center shadow-sm">
                <h3 class="text-5xl font-serif text-[#c6953a]">
                    40+
                </h3>
                <p class="text-gray-500 mt-2">
                    Premium Rooms
                </p>
            </div>

            <div class="bg-white rounded-3xl p-8 text-center shadow-sm">
                <h3 class="text-5xl font-serif text-[#c6953a]">
                    500+
                </h3>
                <p class="text-gray-500 mt-2">
                    Events Hosted
                </p>
            </div>

            <div class="bg-white rounded-3xl p-8 text-center shadow-sm">
                <h3 class="text-5xl font-serif text-[#c6953a]">
                    10K+
                </h3>
                <p class="text-gray-500 mt-2">
                    Happy Guests
                </p>
            </div>

            <div class="bg-white rounded-3xl p-8 text-center shadow-sm">
                <h3 class="text-5xl font-serif text-[#c6953a]">
                    4.8★
                </h3>
                <p class="text-gray-500 mt-2">
                    Average Rating
                </p>
            </div>

        </div>

    </div>

</section>

<!-- Mission & Vision -->
<section class="py-24 bg-[#120d08] relative overflow-hidden">

    <!-- Glow Effect -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-[#d4a843]/10 blur-[150px] rounded-full"></div>

    <div class="max-w-[1400px] mx-auto px-5 lg:px-14 relative z-10">

        <!-- Heading -->
        <div class="text-center mb-16">

            <span class="uppercase tracking-[5px] text-[#d4a843] text-xs font-semibold">
                What Drives Us
            </span>

            <h2 class="mt-4 text-4xl md:text-6xl font-serif text-white">
                Mission &
                <span class="italic text-[#d4a843]">
                    Vision
                </span>
            </h2>

        </div>

        <!-- Cards -->
        <div class="grid lg:grid-cols-2 gap-8">

            <!-- Mission -->
            <div class="group bg-white/[0.03] border border-[#d4a843]/20 rounded-3xl p-10 hover:border-[#d4a843]/50 hover:-translate-y-2 transition-all duration-500">

                <div class="w-16 h-16 rounded-2xl bg-[#d4a843]/15 flex items-center justify-center mb-8">

                    <i class="fa-solid fa-bullseye text-[#d4a843] text-2xl"></i>

                </div>

                <h3 class="text-3xl font-serif text-white mb-5">
                    Our Mission
                </h3>

                <p class="text-gray-400 leading-8 text-lg">
                    To deliver exceptional hospitality experiences that surpass
                    expectations — providing every guest with comfort, warmth,
                    and memorable service that honours the traditions of Kannauj.
                </p>

            </div>

            <!-- Vision -->
            <div class="group bg-white/[0.03] border border-[#d4a843]/20 rounded-3xl p-10 hover:border-[#d4a843]/50 hover:-translate-y-2 transition-all duration-500">

                <div class="w-16 h-16 rounded-2xl bg-[#d4a843]/15 flex items-center justify-center mb-8">

                    <i class="fa-solid fa-eye text-[#d4a843] text-2xl"></i>

                </div>

                <h3 class="text-3xl font-serif text-white mb-5">
                    Our Vision
                </h3>

                <p class="text-gray-400 leading-8 text-lg">
                    To be the most trusted and beloved hotel brand in Uttar Pradesh —
                    setting a new benchmark for luxury, warmth, and excellence in
                    hospitality across the region.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- Core Values Section -->
<section class="py-24 bg-[#f8f6f1]">

    <div class="max-w-[1400px] mx-auto px-5 lg:px-14">

        <!-- Heading -->
        <div class="mb-12">

            <span class="uppercase tracking-[4px] text-[11px] text-[#c79b47] font-semibold">
                What We Stand For
            </span>

            <h2 class="text-4xl lg:text-5xl font-serif text-[#111] mt-3">
                Our Core
                <span class="italic text-[#c79b47]">
                    Values
                </span>
            </h2>

        </div>

        <!-- Values Grid -->
        <div class="grid md:grid-cols-2 gap-6">

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-[#eee] flex gap-4">
                <div class="w-12 h-12 rounded-xl bg-[#f5eedc] flex items-center justify-center flex-shrink-0">
                    <i class="fa-solid fa-heart text-[#c79b47]"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-[#111] mb-2">Genuine Warmth</h4>
                    <p class="text-gray-600 text-sm leading-6">
                        We treat every guest like family — with sincerity, care, and a smile that comes from the heart.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-[#eee] flex gap-4">
                <div class="w-12 h-12 rounded-xl bg-[#f5eedc] flex items-center justify-center flex-shrink-0">
                    <i class="fa-solid fa-gem text-[#c79b47]"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-[#111] mb-2">Uncompromising Quality</h4>
                    <p class="text-gray-600 text-sm leading-6">
                        From the finest linen to the freshest ingredients — every detail is held to the highest standard.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-[#eee] flex gap-4">
                <div class="w-12 h-12 rounded-xl bg-[#f5eedc] flex items-center justify-center flex-shrink-0">
                    <i class="fa-solid fa-feather text-[#c79b47]"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-[#111] mb-2">Respect for Heritage</h4>
                    <p class="text-gray-600 text-sm leading-6">
                        We celebrate Kannauj's rich culture and history in everything we do — from our décor to our meals.
                    </p>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-[#eee] flex gap-4">
                <div class="w-12 h-12 rounded-xl bg-[#f5eedc] flex items-center justify-center flex-shrink-0">
                    <i class="fa-solid fa-handshake text-[#c79b47]"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-[#111] mb-2">Trust & Transparency</h4>
                    <p class="text-gray-600 text-sm leading-6">
                        No hidden charges. No surprises. We believe in honest pricing and clear, straightforward service.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- Milestones Section -->
<section class="py-24 bg-[#efe9dd]">

    <div class="max-w-[1400px] mx-auto px-5 lg:px-14">

        <div class="grid lg:grid-cols-2 gap-20 items-center">

            <!-- Left Timeline -->
            <div>

                <span class="uppercase tracking-[4px] text-[11px] text-[#c79b47] font-semibold">
                    Our Journey
                </span>

                <h2 class="text-4xl lg:text-5xl font-serif text-[#111] mt-3 mb-12">
                    Milestones &
                    <span class="italic text-[#c79b47]">
                        Growth
                    </span>
                </h2>

                <div class="relative border-l border-[#c79b47] ml-4">

                    <!-- Item -->
                    <div class="relative pl-10 pb-10">
                        <span class="absolute -left-[11px] top-1 w-5 h-5 bg-white border-2 border-[#c79b47] rounded-full"></span>

                        <p class="text-[#c79b47] uppercase text-[11px] tracking-[2px] mb-2">
                            Foundation
                        </p>

                        <h4 class="font-semibold text-[#111] mb-2">
                            VK Grand Opens Its Doors
                        </h4>

                        <p class="text-gray-600 text-sm leading-6">
                            VK Grand Hotel inaugurated in Kannauj with 20 premium rooms and a vision to serve the city.
                        </p>
                    </div>

                    <div class="relative pl-10 pb-10">
                        <span class="absolute -left-[11px] top-1 w-5 h-5 bg-white border-2 border-[#c79b47] rounded-full"></span>

                        <p class="text-[#c79b47] uppercase text-[11px] tracking-[2px] mb-2">
                            Expansion
                        </p>

                        <h4 class="font-semibold text-[#111] mb-2">
                            Restaurant & Banquet Launch
                        </h4>

                        <p class="text-gray-600 text-sm leading-6">
                            The Grand Kitchen and 500+ seat Banquet Hall opened, transforming VK Grand into Kannauj's premier event venue.
                        </p>
                    </div>

                    <div class="relative pl-10 pb-10">
                        <span class="absolute -left-[11px] top-1 w-5 h-5 bg-white border-2 border-[#c79b47] rounded-full"></span>

                        <p class="text-[#c79b47] uppercase text-[11px] tracking-[2px] mb-2">
                            Recognition
                        </p>

                        <h4 class="font-semibold text-[#111] mb-2">
                            Best Hotel in Kannauj Award
                        </h4>

                        <p class="text-gray-600 text-sm leading-6">
                            Recognized as the best hospitality property in Kannauj district with a 4.8-star guest rating.
                        </p>
                    </div>

                    <div class="relative pl-10">
                        <span class="absolute -left-[11px] top-1 w-5 h-5 bg-white border-2 border-[#c79b47] rounded-full"></span>

                        <p class="text-[#c79b47] uppercase text-[11px] tracking-[2px] mb-2">
                            Today
                        </p>

                        <h4 class="font-semibold text-[#111] mb-2">
                            40+ Rooms, 10,000+ Happy Guests
                        </h4>

                        <p class="text-gray-600 text-sm leading-6">
                            Now home to 40+ premium rooms and suites, having hosted over 10,000 satisfied guests from across India.
                        </p>
                    </div>

                </div>

            </div>

            <!-- Right Image -->
            <div>

                <div class="relative overflow-hidden rounded-3xl shadow-xl">

                    <img
                        src="<?= base_url('uploads/hotel-history.jpg'); ?>"
                        alt="VK Grand Hotel"
                        class="w-full h-[500px] object-cover">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- cta -->
 <?=view('componants/cta-card')?>

<?= view('template/footer') ?>