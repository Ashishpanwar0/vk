<?php

$slides = include APPPATH . 'Data/hero_slider.php';

?>

<section class="relative w-full overflow-hidden h-[400px] sm:h-[500px] md:h-[600px] lg:h-[650px]">

    <!-- Slider -->
    <div id="slider" class="flex h-full transition-transform duration-[1500ms] ease-in-out">

        <?php foreach ($slides as $slide): ?>

            <div class="relative min-w-full h-full overflow-hidden">

                <!-- Background Image -->
                <img
                    src="<?= base_url($slide['image']) ?>"
                    alt="<?= esc($slide['title_1']) ?>"
                    class="absolute inset-0 w-full h-full object-cover object-center">

                <!-- Dark Overlay -->
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-black/20"></div>

                <!-- Brand Overlay -->
                <div class="absolute inset-0 bg-[#0F6B5B]/15"></div>

                <!-- Content -->
                <div class="relative z-20 flex items-center h-full">

                    <div class="max-w-[1400px] mx-auto w-full px-4 sm:px-8 lg:px-12">

                        <div class="max-w-[900px]">

                            <!-- Rating Badge -->
                            <div class="inline-flex items-center gap-2 px-3 py-2 rounded-full border border-[#D4A843]/40 bg-black/20 backdrop-blur-sm mb-4 sm:mb-6">

                                <i class="fa-solid fa-star text-[#D4A843] text-[10px]"></i>
                                <i class="fa-solid fa-star text-[#D4A843] text-[10px]"></i>
                                <i class="fa-solid fa-star text-[#D4A843] text-[10px]"></i>
                                <i class="fa-solid fa-star text-[#D4A843] text-[10px]"></i>

                                <span class="text-white text-[11px] sm:text-sm font-medium">
                                    4.8 • Kannauj's Best Luxury Hotel
                                </span>

                            </div>

                            <!-- Heading -->
                            <h1
                                class="text-white leading-[0.85] font-light hero-title max-w-[1000px]"
                                style="font-family:'Cormorant Garamond', serif;">

                                <?= esc($slide['title_1']) ?>

                                <span class="block italic text-[#D4A843] font-bold">
                                    <?= esc($slide['title_2']) ?>
                                </span>

                            </h1>

                            <!-- Description -->
                            <p class="mt-4 sm:mt-6 text-white/85 text-[13px] sm:text-[16px] lg:text-[22px] leading-6 lg:leading-9 max-w-[850px] hero-desc">

                                <?= esc($slide['description']) ?>

                            </p>

                            <!-- Buttons -->
                            <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 mt-5 sm:mt-8">

                                <!-- BOOK NOW -->
                                <a href="https://asiatech.in/booking_engine/index3?token=ODQwOA=="
                                    target="_blank"
                                    class="px-6 lg:px-8 py-3 lg:py-4 rounded-full bg-[#D4A843] text-black font-semibold uppercase tracking-wider hover:scale-105 transition-all duration-300 text-center text-xs sm:text-sm lg:text-base hover:bg-[#0F6B5B] hover:text-white font-bold">

                                    <i class="fa-solid fa-calendar-check mr-2"></i>
                                    BOOK NOW

                                </a>

                                <!-- SECOND BUTTON -->
                                <a href="<?= base_url($slide['button_2_link']) ?>"
                                    class="px-6 lg:px-8 py-3 lg:py-4 rounded-full border border-white/30 text-white uppercase tracking-wider hover:bg-white/10 transition-all duration-300 text-center text-xs sm:text-sm lg:text-base font-bold">

                                    <?= esc($slide['button_2_text']) ?>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>
        <!-- Left Arrow -->
    <button
        id="prevBtn"
        class="absolute left-3 sm:left-6 top-1/2 -translate-y-1/2 z-30 w-10 h-10 sm:w-12 sm:h-12 rounded-full border border-white/20 bg-black/30 backdrop-blur-md text-white hover:bg-[#D4A843] hover:text-black transition-all duration-300 flex items-center justify-center">

        <i class="fa-solid fa-chevron-left text-sm sm:text-base"></i>

    </button>

    <!-- Right Arrow -->
    <button
        id="nextBtn"
        class="absolute right-3 sm:right-6 top-1/2 -translate-y-1/2 z-30 w-10 h-10 sm:w-12 sm:h-12 rounded-full border border-white/20 bg-black/30 backdrop-blur-md text-white hover:bg-[#D4A843] hover:text-black transition-all duration-300 flex items-center justify-center">

        <i class="fa-solid fa-chevron-right text-sm sm:text-base"></i>

    </button>

    <!-- Dots -->
    <div class="absolute bottom-4 sm:bottom-8 left-1/2 -translate-x-1/2 flex gap-2 z-30">

        <?php foreach ($slides as $index => $slide): ?>

            <button
                class="dot <?= $index === 0 ? 'w-8 bg-[#D4A843]' : 'w-2 bg-white/50' ?> h-2 rounded-full transition-all duration-300">
            </button>

        <?php endforeach; ?>

    </div>

</section>

<style>

/* ===============================
   HERO TITLE
================================ */

.hero-title{
    font-size:clamp(34px,8vw,60px);
    width:100%;
    letter-spacing:-1px;
}

/* Tablet */
@media (min-width:640px){

    .hero-title{
        font-size:clamp(60px,8vw,95px);
    }

}

/* Desktop */
@media (min-width:1024px){

    .hero-title{
        font-size:clamp(90px,8vw,140px);
    }

}

/* Mobile Description */
@media (max-width:639px){

    .hero-desc{

        display:-webkit-box;
        -webkit-line-clamp:2;
        -webkit-box-orient:vertical;
        overflow:hidden;

    }

}

/* Better Mobile Height */
@media (max-width:640px){

    .hero-title{
        line-height:0.9;
    }

}

</style>

<script>

document.addEventListener('DOMContentLoaded', () => {

    const slider = document.getElementById('slider');
    const dots = document.querySelectorAll('.dot');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');

    let currentSlide = 0;
    const totalSlides = <?= count($slides) ?>;
    let autoSlide;

    function updateSlider() {

        slider.style.transform =
            `translateX(-${currentSlide * 100}%)`;

        dots.forEach((dot, i) => {

            if (i === currentSlide) {

                dot.classList.remove(
                    'w-2',
                    'bg-white/50'
                );

                dot.classList.add(
                    'w-8',
                    'bg-[#D4A843]'
                );

            } else {

                dot.classList.remove(
                    'w-8',
                    'bg-[#D4A843]'
                );

                dot.classList.add(
                    'w-2',
                    'bg-white/50'
                );

            }

        });

    }

    function nextSlide() {

        currentSlide =
            (currentSlide + 1) % totalSlides;

        updateSlider();

    }

    function prevSlide() {

        currentSlide =
            (currentSlide - 1 + totalSlides) %
            totalSlides;

        updateSlider();

    }

    function resetAutoSlide() {

        clearInterval(autoSlide);

        autoSlide =
            setInterval(nextSlide, 5000);

    }

    nextBtn.addEventListener('click', () => {

        nextSlide();
        resetAutoSlide();

    });

    prevBtn.addEventListener('click', () => {

        prevSlide();
        resetAutoSlide();

    });

    dots.forEach((dot, i) => {

        dot.addEventListener('click', () => {

            currentSlide = i;

            updateSlider();

            resetAutoSlide();

        });

    });

    resetAutoSlide();

});

</script>