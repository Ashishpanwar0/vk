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

<section class="py-10 pb-0 bg-[#F3EDE2]">

<div class="max-w-[1400px] mx-auto px-5 lg:px-10">

    <!-- Heading -->
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5 mb-12">

        <div>
            <span class="uppercase tracking-[4px] text-[#D4A843] text-xl font-bold">
                ACCOMMODATION
            </span>

            <h2 class="text-4xl lg:text-5xl mt-2 text-[#1A1A1A]">
                Rooms &
                <span class="italic text-[#D4A843]">Suites</span>
            </h2>
        </div>

        <a href="<?= base_url('rooms') ?>"
           class="inline-flex items-center justify-center px-6 py-3 rounded-full border border-[#D4A843] text-white hover:bg-[#0F6B5B] bg-gold hover:text-white transition">

            VIEW ALL ROOMS

        </a>

    </div>

    <!-- Main Slider -->
    <div class="swiper roomsSlider lg:h-[630px] h-[690px]">

        <div class="swiper-wrapper">

            <?php if(!empty($rooms)): ?>
                <?php foreach($rooms as $room): ?>

                <div class="swiper-slide">

                    <div class="bg-white rounded-[28px] overflow-hidden shadow-xl border border-[#EFE6D6]flex flex-col">

                        <?php if(!empty($room['images']) && is_array($room['images'])): ?>
                        <div class="swiper roomGallery h-[260px] w-full relative flex-shrink-0">

                            <div class="swiper-wrapper">

                                <?php foreach($room['images'] as $image): ?>

                                <div class="swiper-slide">

                                    <img
                                        src="<?= base_url($image) ?>"
                                        alt="<?= esc($room['title'] ?? 'Room Image') ?>"
                                        class="w-full h-[260px] object-cover">

                                </div>

                                <?php endforeach; ?>

                            </div>

                            <!-- Pagination -->
                            <div class="swiper-pagination"></div>

                        </div>
                        <?php endif; ?>

                        <!-- Content -->
                        <div class="p-6 flex-grow flex flex-col">

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

                                <h3 class="text-[28px] text-[#1A1A1A] leading-tight">
                                    <?= esc($room['title'] ?? 'Room Title') ?>
                                </h3>

                                <?php if(!empty($room['tag'])): ?>
                                <span class="px-3 py-1 rounded-full text-xs font-semibold whitespace-nowrap <?= $tagClass ?>">
                                    <?= esc($room['tag']) ?>
                                </span>
                                <?php endif; ?>

                            </div>

                            <p class="text-gray-600 leading-relaxed">
                                <?= esc($room['description'] ?? 'No description available') ?>
                            </p>

                            <!-- Features -->
                            <?php if(!empty($room['features']) && is_array($room['features'])): ?>
                            <div class="flex flex-wrap gap-2 mt-5">

                                <?php foreach($room['features'] as $feature): ?>

                                <div class="px-3 py-2 rounded-full bg-[#F7F3EB] flex items-center gap-2">

                                    <i class="<?= $icons[$feature] ?? 'fa-solid fa-check' ?> text-[#D4A843] text-xs"></i>

                                    <span class="text-sm text-gray-700">
                                        <?= esc($feature) ?>
                                    </span>

                                </div>

                                <?php endforeach; ?>

                            </div>
                            <?php endif; ?>

                            <!-- Button -->
                            <div class="mt-6">

                                <a href="<?= esc($room['book_url'] ?? '#') ?>"
                                   class="w-full flex items-center justify-center bg-[#D4A843] hover:bg-[#C29435] text-white py-3 rounded-full font-semibold transition text-center">

                                    BOOK NOW

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

                <?php endforeach; ?>
            <?php else: ?>
                <div class="swiper-slide">
                    <div class="bg-white rounded-[28px] overflow-hidden shadow-xl border border-[#EFE6D6] p-10 text-center">
                        <p class="text-gray-600">No rooms available at the moment.</p>
                    </div>
                </div>
            <?php endif; ?>

        </div>

    </div>

</div>

</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>

// Main Rooms Slider
new Swiper('.roomsSlider',{
    loop: true,
    spaceBetween: 24,
    autoHeight: false,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false
    },
    breakpoints: {
        0: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1200: { slidesPerView: 3 }
    }
});

// Room Image Sliders - Initialize each gallery separately
document.querySelectorAll('.roomGallery').forEach(function(slider){
    if(slider.querySelectorAll('.swiper-slide').length > 0) {
        new Swiper(slider, {
            loop: true,
            slidesPerView: 1,
            speed: 700,
            effect: 'slide',
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            },
            pagination: {
                el: slider.querySelector('.swiper-pagination'),
                clickable: true
            }
        });
    }
});

</script>