<?php
$hotelData = include APPPATH . 'Data/hotel_data.php';
$rooms = $hotelData['rooms'] ?? [];

$icons = [
    'LED TV'       => 'fa-solid fa-tv',
    'Free WiFi'    => 'fa-solid fa-wifi',
    'Breakfast'    => 'fa-solid fa-mug-hot',
    'In-Room Safe' => 'fa-solid fa-vault',
    'Work Desk'    => 'fa-solid fa-briefcase',
    'Mini Bar'     => 'fa-solid fa-wine-glass',
    'Hair Dryer'   => 'fa-solid fa-wind',
    'Mini Fridge'  => 'fa-solid fa-snowflake',
    'Balcony'      => 'fa-solid fa-building'
];
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<style>
.roomGallery .swiper-pagination{
    bottom:10px !important;
}

.roomGallery .swiper-pagination-bullet{
    width:8px;
    height:8px;
    background:#fff;
    opacity:.7;
}

.roomGallery .swiper-pagination-bullet-active{
    background:#D4A843;
    opacity:1;
}
</style>

<section class="py-16 bg-[#F8F5EF]">

<div class="max-w-[1400px] mx-auto px-5 lg:px-10">

    <!-- Heading -->
    <div class="text-center mb-10">

        <span class="uppercase tracking-[4px] text-[#D4A843] text-sm">
            ACCOMMODATION
        </span>

        <h2 class="text-3xl md:text-4xl lg:text-5xl mt-2 text-[#1A1A1A]">
            Rooms &
            <span class="italic text-[#D4A843]">Suites</span>
        </h2>

    </div>

    <!-- Grid - Responsive (Sirf Tailwind classes) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">

        <?php foreach($rooms as $room): ?>

        <div>

            <div class="bg-white rounded-[28px] overflow-hidden shadow-xl border border-[#EFE6D6] h-full">

                <!-- Image Slider - Responsive height -->
                <div class="swiper roomGallery h-[200px] sm:h-[240px] md:h-[260px] relative">

                    <div class="swiper-wrapper">

                        <?php foreach($room['images'] as $image): ?>

                        <div class="swiper-slide">

                            <img
                                src="<?= base_url($image) ?>"
                                alt="<?= esc($room['title']) ?>"
                                class="w-full h-[200px] sm:h-[240px] md:h-[260px] object-cover">

                        </div>

                        <?php endforeach; ?>

                    </div>

                    <div class="swiper-pagination"></div>

                </div>

                <!-- Content -->
                <div class="p-5 md:p-6 pb-2">

                    <?php
                    $tagClass = 'bg-[#D4A843] text-white';

                    if(($room['tag'] ?? '') === 'PREMIUM'){
                        $tagClass = 'bg-[#0F6B5B] text-white';
                    }

                    if(($room['tag'] ?? '') === 'LUXURY'){
                        $tagClass = 'bg-[#2A1C12] text-white';
                    }
                    ?>

                    <div class="flex items-center justify-between mb-3 flex-wrap gap-2">

                        <h3 class="text-xl md:text-2xl lg:text-[28px] text-[#1A1A1A]">
                            <?= esc($room['title']) ?>
                        </h3>

                        <span class="px-3 py-1 rounded-full text-xs font-semibold whitespace-nowrap <?= $tagClass ?>">
                            <?= esc($room['tag']) ?>
                        </span>

                    </div>

                    <p class="text-gray-600 leading-relaxed text-sm md:text-base min-h-[50px] md:min-h-[70px]">
                        <?= esc($room['description']) ?>
                    </p>

                    <!-- Features -->
                    <div class="flex flex-wrap gap-1.5 md:gap-2 mt-4 md:mt-5">

                        <?php foreach($room['features'] as $feature): ?>

                        <div class="px-2 md:px-3 py-1.5 md:py-2 rounded-full bg-[#F7F3EB] flex items-center gap-1 md:gap-2">

                            <i class="<?= $icons[$feature] ?? 'fa-solid fa-check' ?> text-[#D4A843] text-[10px] md:text-xs"></i>

                            <span class="text-xs md:text-sm text-gray-700">
                                <?= esc($feature) ?>
                            </span>

                        </div>

                        <?php endforeach; ?>

                    </div>

                    <!-- Button -->
                    <div class="mt-5 mb-2">

                        <a href="<?= esc($room['book_url']) ?>"
                           class="w-full flex items-center justify-center bg-[#D4A843] hover:bg-[#C29435] text-white py-2.5 md:py-3 rounded-full font-semibold transition text-sm md:text-base">

                            BOOK NOW

                        </a>

                    </div>

                </div>

            </div>

        </div>

        <?php endforeach; ?>

    </div>

</div>

</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
document.querySelectorAll('.roomGallery').forEach(function(slider){

    new Swiper(slider,{

        loop:true,

        slidesPerView:1,

        speed:700,

        autoplay:{
            delay:2500,
            disableOnInteraction:false
        },

        pagination:{
            el: slider.querySelector('.swiper-pagination'),
            clickable:true
        }

    });

});
</script>