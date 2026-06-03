<?php
$data = include APPPATH . 'Data/testimonials_data.php';
$testimonials = $data['testimonials'] ?? [];
?>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<section class="bg-[#F8F5EF] py-12">

    <div class="max-w-7xl mx-auto px-5">

        <!-- Heading -->
        <div class="text-center mb-12">
            <span class="uppercase tracking-[4px] text-[#D4A843] text-xl font-bold">
                GUEST REVIEWS
            </span>
            <h2 class="text-4xl lg:text-6xl mt-3">
                What Our Guests
                <span class="italic text-[#D4A843]">Say</span>
            </h2>
        </div>

        <!-- Slider -->
        <div class="swiper testimonialSlider h-[250px]">
            <div class="swiper-wrapper">

                <?php foreach($testimonials as $index => $item): ?>

                <?php
                    $review = $item['review'] ?? '';
                    $limit = 100;
                ?>

                <div class="swiper-slide">

                    <div class="bg-white rounded-3xl border border-[#E9DCC3] p-6 flex flex-col h-full overflow-hidden">

                        <!-- Stars -->
                        <div class="flex gap-1 mb-4 flex-shrink-0">
                            <?php for($i=1;$i<=($item['rating'] ?? 5);$i++): ?>
                                <i class="fa-solid fa-star text-[#D4A843] text-sm"></i>
                            <?php endfor; ?>
                        </div>

                        <!-- Review - Fixed height with scroll -->
                        <div class="flex-1 overflow-y-auto min-h-0" style="word-break:break-word; overflow-wrap:break-word;">

                            <p id="short-<?= $index ?>" class="text-gray-600 leading-7 text-sm">

                                <?= esc(strlen($review) > $limit
                                    ? substr($review,0,$limit).'...'
                                    : $review) ?>

                            </p>

                            <?php if(strlen($review) > $limit): ?>

                            <p id="full-<?= $index ?>"
                               class="hidden text-gray-600 leading-7 text-lg">

                                <?= esc($review) ?>

                            </p>

                            <button
                                type="button"
                                onclick="toggleReview(<?= $index ?>)"
                                id="btn-<?= $index ?>"
                                class="mt-2 text-[#D4A843] text-sm font-medium">

                                Read More

                            </button>

                            <?php endif; ?>

                        </div>

                        <!-- User - Fixed at bottom -->
                        <div class="flex items-center gap-4 pt-4 border-t mt-4 flex-shrink-0">

                            <div class="w-12 h-12 rounded-full bg-[#F4E7C3] flex items-center justify-center text-[#D4A843] font-semibold">

                                <?= strtoupper(substr($item['name'],0,1)) ?>

                            </div>

                            <div>

                                <h4 class="font-semibold text-[#111]">
                                    <?= esc($item['name']) ?>
                                </h4>

                                <p class="text-sm text-gray-500">
                                    <?= esc($item['location']) ?>
                                    •
                                    <?= esc($item['stay_type']) ?>
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <?php endforeach; ?>

            </div>

            <!-- <div class="swiper-pagination"></div> -->

        </div>

        <!-- Google Reviews Button -->
        <div class="text-center mt-10">
            <a href="YOUR_GOOGLE_REVIEW_LINK"
               target="_blank"
               class="inline-flex items-center gap-2 bg-[#D4A843] hover:bg-[#0F6B5B] text-white px-6 py-3 rounded-full">
                <i class="fa-brands fa-google"></i>
                View All Reviews
            </a>
        </div>

    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>

new Swiper('.testimonialSlider', {
    loop: true,
    spaceBetween: 24,
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
    breakpoints: {
        0: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1200: { slidesPerView: 3 }
    }
});

function toggleReview(id){
    const shortText = document.getElementById('short-' + id);
    const fullText = document.getElementById('full-' + id);
    const btn = document.getElementById('btn-' + id);

    if(fullText.classList.contains('hidden')){
        fullText.classList.remove('hidden');
        shortText.classList.add('hidden');
        btn.innerText = 'Show Less';
    }else{
        fullText.classList.add('hidden');
        shortText.classList.remove('hidden');
        btn.innerText = 'Read More';
    }
}

</script>