    <?= view('template/header') ?>
    <?= view('componants/hero', [

        'title' => 'Rooms',
        'subtitle' => 'Welcome to VK Grand',
        'bg' => 'Hero-image/Rooms-Img/Vk-Rooms (2).webp'

    ]) ?>
  
  <?=view('componants/rooms-card')?>

 <!-- Luxury CTA Section -->
<section class="relative py-8 bg-[#120d08] overflow-hidden lg:max-w-7xl mx-auto rounded-2xl mb-12 w-[90%]">
    
    <!-- Background Glow -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-yellow-500/10 blur-[120px] rounded-full"></div>

    <div class="max-w-[1400px] mx-auto px-5 lg:px-14 relative z-10">

        <div class="flex flex-col lg:flex-row items-center justify-between gap-12">

            <!-- Left Content -->
            <div class="max-w-2xl">
                
                <div class="flex items-center gap-4 mb-5">
                    <span class="w-16 h-[1px] bg-yellow-600"></span>
                    <span class="text-yellow-600 uppercase tracking-[3px] text-xs font-semibold">
                        Plan Your Stay
                    </span>
                    <span class="w-16 h-[1px] bg-yellow-600"></span>
                </div>

                <h2 class="text-white text-4xl md:text-6xl leading-tight font-serif">
                    Ready for an <br>
                    <span class="text-yellow-500 italic">
                        Unforgettable
                    </span>
                    Stay?
                </h2>

                <p class="text-gray-400 mt-6 text-xl max-w-xl">
                    Book directly for the best rates and exclusive offers.
                    Our team is ready to make your stay exceptional.
                </p>

            </div>

            <!-- Right Buttons -->
            <div class="flex flex-wrap justify-center gap-5">

                <a href="tel:+918052065111"
                   class="px-10 py-4 bg-yellow-600 hover:bg-yellow-500 text-black font-semibold rounded-full transition duration-300 flex items-center gap-3 shadow-lg shadow-yellow-600/20">
                    <i class="fa-solid fa-calendar-check"></i>
                    BOOK NOW
                </a>

                <a href="tel:+918052065111"
                   class="px-10 py-4 border border-white/30 text-white hover:bg-white hover:text-black rounded-full transition duration-300 flex items-center gap-3">
                    <i class="fa-solid fa-phone"></i>
                    CALL US
                </a>

            </div>

        </div>
    </div>
</section>

    <?= view('template/footer') ?>