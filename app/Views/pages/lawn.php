<?php $lawn = include APPPATH . 'Data/lawn-data.php'; ?>

<?= view('template/header') ?>
<?= view('componants/hero', [
    'title' => 'Lawns',
    'subtitle' => 'Welcome to VK Grand',
    'bg' => 'Hero-image/Hero-logo-image/slider-1.webp'
]) ?>

<!-- Lawns Section -->
<!-- Lawns Section -->
<section class="py-12 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12">
            <span class="uppercase tracking-[3px] text-[16px] text-[#C09130] font-semibold">
                Our Premium Lawns
            </span>
            <h2 class="font-serif text-4xl md:text-5xl text-[#111] mt-3">
                Choose Your Perfect Venue
            </h2>
            <div class="w-20 h-0.5 bg-[#C09130] mx-auto mt-4"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Silver Lawn -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-2xl transition-all duration-300">
                <span class="uppercase tracking-[3px] text-[14px] text-[#C09130] font-semibold">
                    Outdoor Venue
                </span>

                <h3 class="font-serif text-3xl mt-3 mb-4 text-[#111]">
                    <?= esc($lawn['lawns']['silver']['name']) ?>
                </h3>

                <div class="flex flex-col gap-2 text-lg text-gray-600 mb-5">
                    <span>
                        <i class="fa-solid fa-arrows-up-down-left-right text-[#C09130]"></i>
                        <?= esc($lawn['lawns']['silver']['area']) ?>
                    </span>

                    <span>
                        <i class="fa-solid fa-users text-[#C09130]"></i>
                        <?= esc($lawn['lawns']['silver']['capacity']) ?>
                    </span>
                </div>

                <div class="w-16 h-0.5 bg-[#C09130] mb-5"></div>

                <p class="text-lg text-gray-600 leading-relaxed mb-6">
                    <?= esc($lawn['lawns']['silver']['description']) ?>
                </p>

                <span class="inline-block bg-[#C09130] text-white px-6 py-3 rounded-full text-lg font-semibold">
                    <?= esc($lawn['lawns']['silver']['price']) ?>
                </span>
            </div>

            <!-- Gold Lawn -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-2xl transition-all duration-300">
                <span class="uppercase tracking-[3px] text-[14px] text-[#C09130] font-semibold">
                    Premium Lawn
                </span>

                <h3 class="font-serif text-3xl mt-3 mb-4 text-[#111]">
                    <?= esc($lawn['lawns']['gold']['name']) ?>
                </h3>

                <div class="flex flex-col gap-2 text-lg text-gray-600 mb-5">
                    <span>
                        <i class="fa-solid fa-arrows-up-down-left-right text-[#C09130]"></i>
                        <?= esc($lawn['lawns']['gold']['area']) ?>
                    </span>

                    <span>
                        <i class="fa-solid fa-users text-[#C09130]"></i>
                        <?= esc($lawn['lawns']['gold']['capacity']) ?>
                    </span>
                </div>

                <div class="w-16 h-0.5 bg-[#C09130] mb-5"></div>

                <p class="text-lg text-gray-600 leading-relaxed mb-6">
                    <?= esc($lawn['lawns']['gold']['description']) ?>
                </p>

                <span class="inline-block bg-[#C09130] text-white px-6 py-3 rounded-full text-lg font-semibold">
                    <?= esc($lawn['lawns']['gold']['price']) ?>
                </span>
            </div>

            <!-- Platinum Lawn -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 hover:shadow-2xl transition-all duration-300">
                <span class="uppercase tracking-[3px] text-[14px] text-[#C09130] font-semibold">
                    Luxury Lawn
                </span>

                <h3 class="font-serif text-3xl mt-3 mb-4 text-[#111]">
                    <?= esc($lawn['lawns']['platinum']['name']) ?>
                </h3>

                <div class="flex flex-col gap-2 text-lg text-gray-600 mb-5">
                    <span>
                        <i class="fa-solid fa-arrows-up-down-left-right text-[#C09130]"></i>
                        <?= esc($lawn['lawns']['platinum']['area']) ?>
                    </span>

                    <span>
                        <i class="fa-solid fa-users text-[#C09130]"></i>
                        <?= esc($lawn['lawns']['platinum']['capacity']) ?>
                    </span>
                </div>

                <div class="w-16 h-0.5 bg-[#C09130] mb-5"></div>

                <p class="text-lg text-gray-600 leading-relaxed mb-6">
                    <?= esc($lawn['lawns']['platinum']['description']) ?>
                </p>

                <span class="inline-block bg-[#C09130] text-white px-6 py-3 rounded-full text-lg font-semibold">
                    <?= esc($lawn['lawns']['platinum']['price']) ?>
                </span>
            </div>

        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-8 sm:py-12 md:py-16 bg-[#faf8f3]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8 md:mb-10">
            <span class="uppercase tracking-[3px] text-[16px] text-[#C09130] font-semibold">Why Choose Us</span>
            <h3 class="font-serif text-2xl sm:text-3xl md:text-4xl text-[#111] mt-2">Lawn Highlights</h3>
            <div class="w-16 h-0.5 bg-[#C09130] mx-auto mt-3"></div>
        </div>
        
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3 sm:gap-4">
            <?php foreach ($lawn['highlights'] as $highlight): ?>
                <div class="flex items-center gap-2 bg-white p-3 sm:p-4 rounded-lg shadow-sm hover:shadow-md transition">
                    <i class="fa-solid fa-circle-check text-[#C09130] text-sm"></i>
                    <span class="text-gray-700 text-xs sm:text-lg"><?= esc($highlight) ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Gallery Grid - Simple Images Only -->
<section class="py-8 sm:py-12 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8 md:mb-10">
            <span class="uppercase tracking-[3px] text-[16px] text-[#C09130] font-semibold">Our Gallery</span>
            <h3 class="font-serif text-2xl sm:text-3xl md:text-4xl text-[#111] mt-2">Lawn Views</h3>
            <div class="w-16 h-0.5 bg-[#C09130] mx-auto mt-3"></div>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5">
            <?php foreach ($lawn['gallery'] as $image): ?>
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="<?= base_url($image) ?>" alt="Gallery" class="w-full h-64 sm:h-72 md:h-80 object-cover hover:scale-105 transition duration-500">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= view('template/footer') ?>