<?php
$slides = include APPPATH . 'Data/maat-data.php';
?>

<?= view('template/header') ?>
<?= view('componants/hero', [
    'title' => 'Contact Us',
    'subtitle' => 'Welcome to VK Grand ',
    'bg' => 'Hero-image/Hero-logo-image/slider-3.webp'
]) ?>

<section class="py-6 sm:py-8 md:py-12 lg:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Main Grid Section -->
        <div class="flex flex-col lg:grid lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 xl:gap-16">
            
            <!-- Slider Section -->
            <div class="w-full">
                <div class="swiper maatSlider rounded-xl sm:rounded-2xl lg:rounded-3xl overflow-hidden shadow-lg sm:shadow-xl">
                    <div class="swiper-wrapper">
                        <?php foreach ($maat['gallery'] as $image): ?>
                            <div class="swiper-slide">
                                <img 
                                    src="<?= base_url($image) ?>" 
                                    alt="<?= esc($maat['heading']) ?>" 
                                    class="w-full h-56 xs:h-64 sm:h-80 md:h-96 lg:h-[420px] xl:h-[480px] object-cover"
                                >
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <!-- Navigation Buttons -->
                    <div class="swiper-button-prev !w-8 !h-8 sm:!w-10 sm:!h-10 !bg-[#C09130] !rounded-full !text-white hover:!bg-[#0F6B5B] transition-colors after:!text-xs sm:after:!text-sm"></div>
                    <div class="swiper-button-next !w-8 !h-8 sm:!w-10 sm:!h-10 !bg-[#C09130] !rounded-full !text-white hover:!bg-[#0F6B5B] transition-colors after:!text-xs sm:after:!text-sm"></div>
                    
                    <!-- Pagination -->
                    <div class="swiper-pagination !bottom-2 sm:!bottom-4"></div>
                </div>
            </div>
            
            <!-- Content Section -->
            <div class="w-full">
                <span class="inline-block uppercase tracking-[2px] sm:tracking-[3px] md:tracking-[4px] text-xl text-[#C09130] font-semibold mb-2 sm:mb-3">
                    Signature Dining
                </span>
                
                <h2 class="font-serif text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-[#111] leading-tight">
                    <?= esc($maat['heading']) ?>
                </h2>
                
                <div class="w-16 sm:w-20 md:w-24 h-0.5 bg-[#C09130] my-4 sm:my-5 md:my-6"></div>
                
                <p class="text-gray-600 text-lg leading-relaxed sm:leading-loose mb-3 sm:mb-4">
                    <?= esc($maat['description_1']) ?>
                </p>
                
                <p class="text-gray-600 text-lg leading-relaxed sm:leading-loose">
                    <?= esc($maat['description_2']) ?>
                </p>
            </div>
        </div>
        
        <!-- Highlights Section -->
        <div class="mt-12 sm:mt-16 md:mt-20 lg:mt-24">
            <div class="text-center mb-8 sm:mb-10 md:mb-12">
                <span class="inline-block uppercase tracking-[2px] sm:tracking-[3px] md:tracking-[4px] text-[16px] text-[#C09130] font-semibold">
                    Why Choose MAAT
                </span>
                <h3 class="font-serif text-2xl sm:text-3xl md:text-4xl text-[#111] mt-2 sm:mt-3">
                    Highlights
                </h3>
            </div>
            
            <!-- Responsive Grid for Highlights -->
            <div class="grid grid-cols-1 xs:grid-cols-2 gap-3 sm:gap-4 md:gap-5 lg:gap-6">
                <?php foreach ($maat['highlights'] as $item): ?>
                    <div class="flex items-start gap-3 sm:gap-4 bg-[#faf8f3] p-4 sm:p-5 md:p-6 rounded-xl sm:rounded-2xl border border-[#f1e8d2] hover:border-[#C09130] transition-all duration-300 hover:shadow-md">
                        <div class="flex-shrink-0 w-7 h-7 sm:w-8 sm:h-8 md:w-9 md:h-9 rounded-full bg-[#C09130] text-white flex items-center justify-center mt-0.5">
                            <i class="fa-solid fa-check text-xl"></i>
                        </div>
                        <p class="text-gray-700 text-lg leading-relaxed flex-1">
                            <?= esc($item) ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <!-- Quote Section -->
        <div class="mt-12 sm:mt-16 md:mt-20 lg:mt-24">
            <div class="bg-gradient-to-br from-[#120d08] to-[#1a140e] text-white rounded-xl sm:rounded-2xl lg:rounded-3xl p-6 sm:p-8 md:p-10 lg:p-12 xl:p-14 text-center">
                <i class="fa-solid fa-utensils text-[#C09130] text-2xl sm:text-3xl md:text-4xl mb-4 sm:mb-5 md:mb-6 inline-block"></i>
                <p class="max-w-3xl mx-auto text-sm sm:text-base md:text-lg leading-relaxed sm:leading-loose text-gray-200">
                    <?= esc($maat['footer_text']) ?>
                </p>
            </div>
        </div>
        
    </div>
</section>

<!-- Swiper CSS & JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.maatSlider', {
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 1,
        spaceBetween: 0,
        effect: 'slide',
        speed: 800,
    });
});
</script>

<!-- Responsive fixes for very small devices -->
<style>
    @media (max-width: 480px) {
        .swiper-button-prev,
        .swiper-button-next {
            display: none !important;
        }
    }
    
    .swiper-pagination-bullet {
        background: white !important;
        opacity: 0.7 !important;
    }
    
    .swiper-pagination-bullet-active {
        background: #C09130 !important;
        opacity: 1 !important;
    }
</style>

<?= view('template/footer') ?>