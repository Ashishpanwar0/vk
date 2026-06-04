<?php
$differencePoints = [
    ['number' => '01', 'title' => 'Prime Location in Kannauj', 'desc' => 'Centrally located with easy access to city centre, railway station and major highways.'],
    ['number' => '02', 'title' => 'Authentic Warm Hospitality', 'desc' => 'Our team treats every guest like family with genuine care and attention.'],
    ['number' => '03', 'title' => 'Best Price Guarantee', 'desc' => 'Book direct and enjoy the lowest rates with flexible cancellation options.'],
    ['number' => '04', 'title' => 'Impeccable Clean Rooms', 'desc' => 'Fresh linen, daily housekeeping and rigorous hygiene standards maintained always.']
];

// All cards now support multiple images (Slider)
$experienceCards = [
    [
        'title' => 'Luxury Accommodation',
        'images' => [
            base_url('Hero-image/Hero-logo-image/show-case-6.webp'),
            base_url('Hero-image/Hero-logo-image/vk-grand-slider-1.webp'),
            base_url('Hero-image/Hero-logo-image/vk-grand-img.webp')
        ]
    ],
    [
        'title' => 'Premium Rooms',
        'images' => [
            base_url('Hero-image/Rooms-Img/vk-Rooms (9).webp'),
            base_url('Hero-image/Rooms-Img/vk-Rooms (10).webp'),
            base_url('Hero-image/Rooms-Img/vk-Rooms (13).webp')
        ]
    ],
    [
        'title' => 'Fine Dining',
        'images' => [
            base_url('Hero-image/Maava/vk-mawa (4).webp'),
            base_url('Hero-image/Maava/vk-mawa (5).webp'),
            base_url('Hero-image/Maava/vk-mawa (6).webp')
        ]
    ],
    [
        'title' => 'Event Venues',
        'images' => [
            base_url('Hero-image/Banquet/vk-Banquet (6).webp'),
            base_url('Hero-image/Banquet/vk-Banquet (7).webp'),
            base_url('Hero-image/Banquet/vk-Banquet (5).webp')
        ]
    ],
    [
        'title' => 'Lawan',
        'images' => [
            base_url('Hero-image/lawan/lawan (7).webp'),
            base_url('Hero-image/lawan/lawan (3).webp'),
            base_url('Hero-image/lawan/lawan (5).webp')
        ]
    ]
];
?>

<style>
.vk-card{
    overflow:hidden;
    cursor:pointer;
    transition: all 0.4s ease;
    position: relative;
}

.vk-card img{
    transition: all 0.8s ease;
}

.vk-card:hover img{
    transform: scale(1.08);
}

.vk-overlay{
    background: linear-gradient(180deg, rgba(0,0,0,.15), rgba(0,0,0,.75));
}

/* Slider Styles */
.slider-container {
    position: relative;
    height: 100%;
    overflow: hidden;
}

.slide {
    position: absolute;
    inset: 0;
    opacity: 0;
    transition: opacity 0.8s ease;
}

.slide.active {
    opacity: 1;
}

.slider-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>

<section>

<!-- ================= WHY VK GRAND ================= -->
<div class="bg-[#1C1814] py-12 px-5 md:px-10 lg:px-20">
    <div class="max-w-[1400px] mx-auto">
        <span class="uppercase tracking-[4px] text-[#D4A843] text-[16px] font-bold">WHY VK GRAND</span>
        
        <h2 class="text-white text-3xl md:text-4xl lg:text-5xl mt-3 leading-tight">
            The <span class="italic text-[#D4A843]">Difference</span> You Feel
        </h2>

        <div class="grid md:grid-cols-2 gap-x-12 gap-y-10 mt-10">
            <?php foreach($differencePoints as $item): ?>
            <div class="flex gap-5">
                <div class="text-[#D4A843] text-4xl lg:text-5xl font-light flex-shrink-0">
                    <?= $item['number'] ?>
                </div>
                <div>
                    <h3 class="text-white text-lg lg:text-xl mb-2">
                        <?= $item['title'] ?>
                    </h3>
                    <p class="text-gray-400 text-[17px] leading-relaxed">
                        <?= $item['desc'] ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- ================= VISUAL TOUR ================= -->
<div class="bg-[#0F0D0A] py-14 px-5 lg:px-20">
    <div class="max-w-[1400px] mx-auto">
        <span class="uppercase tracking-[4px] text-[#D4A843] text-[16px] font-bold">VISUAL TOUR</span>
        
        <h2 class="text-white text-[32px] md:text-[42px] lg:text-[56px] leading-tight mt-3 mb-10">
            Experience <span class="italic text-[#D4A843]">VK Grand</span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-4">

            <!-- BIG CARD -->
            <div class="lg:col-span-12">
                <div class="vk-card relative h-[240px] sm:h-[280px] md:h-[320px] lg:h-[420px] rounded-3xl overflow-hidden" data-card="0">
                    <div class="slider-container">
                        <?php foreach($experienceCards[0]['images'] as $index => $img): ?>
                            <div class="slide <?= $index === 0 ? 'active' : '' ?>">
                                <img src="<?= $img ?>" alt="<?= $experienceCards[0]['title'] ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="absolute inset-0 vk-overlay"></div>
                    <div class="absolute bottom-6 left-6 md:bottom-8 md:left-8 z-10">
                        <h3 class="text-white text-2xl md:text-3xl lg:text-4xl font-semibold">
                            <?= $experienceCards[0]['title'] ?>
                        </h3>
                    </div>
                    <div class="absolute bottom-6 right-6 flex gap-2 z-10">
                        <?php foreach($experienceCards[0]['images'] as $index => $img): ?>
                            <button onclick="changeSlide(0, <?= $index ?>)" 
                                    class="slide-dot-0 w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all <?= $index === 0 ? 'bg-white scale-125' : '' ?>">
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Remaining 4 Cards (All with Slider) -->
            <?php for($i = 1; $i < 5; $i++): ?>
            <div class="lg:col-span-6">
                <div class="vk-card relative h-[180px] sm:h-[200px] md:h-[220px] lg:h-[240px] rounded-3xl overflow-hidden" data-card="<?= $i ?>">
                    <div class="slider-container">
                        <?php foreach($experienceCards[$i]['images'] as $index => $img): ?>
                            <div class="slide <?= $index === 0 ? 'active' : '' ?>">
                                <img src="<?= $img ?>" alt="<?= $experienceCards[$i]['title'] ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="absolute inset-0 vk-overlay"></div>
                    <div class="absolute bottom-4 left-4 md:bottom-6 md:left-6 z-10">
                        <h3 class="text-white text-xl md:text-2xl font-medium">
                            <?= $experienceCards[$i]['title'] ?>
                        </h3>
                    </div>
                    <div class="absolute bottom-4 right-4 flex gap-2 z-10">
                        <?php foreach($experienceCards[$i]['images'] as $index => $img): ?>
                            <button onclick="changeSlide(<?= $i ?>, <?= $index ?>)" 
                                    class="slide-dot-<?= $i ?> w-2.5 h-2.5 rounded-full bg-white/50 hover:bg-white transition-all <?= $index === 0 ? 'bg-white scale-125' : '' ?>">
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endfor; ?>

        </div>
    </div>
</div>

</section>

<script>
// Multiple Sliders Management
const sliders = {};

function initSlider(cardIndex) {
    const slides = document.querySelectorAll(`[data-card="${cardIndex}"] .slide`);
    const dots = document.querySelectorAll(`.slide-dot-${cardIndex}`);
    
    let current = 0;

    function showSlide(index) {
        slides.forEach(s => s.classList.remove('active'));
        dots.forEach(d => d.classList.remove('bg-white', 'scale-125'));
        
        slides[index].classList.add('active');
        dots[index].classList.add('bg-white', 'scale-125');
        current = index;
    }

    // Auto slide
    const interval = setInterval(() => {
        let next = (current + 1) % slides.length;
        showSlide(next);
    }, 3500); // 3.5 seconds

    sliders[cardIndex] = { showSlide, interval };
}

function changeSlide(cardIndex, slideIndex) {
    if (sliders[cardIndex]) {
        sliders[cardIndex].showSlide(slideIndex);
    }
}

// Initialize all sliders
document.addEventListener("DOMContentLoaded", () => {
    for(let i = 0; i < 5; i++) {
        initSlider(i);
    }
});
</script>