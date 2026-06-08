<?php $banquet = include APPPATH . 'Data/banquet-data.php'; ?>

<?= view('template/header') ?>
<?= view('componants/hero', [
    'title' => 'Banquet Halls',
    'subtitle' => 'Welcome to VK Grand',
    'bg' => 'Hero-image/Hero-Section/Banquet-hero.png'
]) ?>

<!-- Lavender Ballroom Section -->
<section class="py-8 sm:py-12 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col lg:grid lg:grid-cols-2 gap-8 lg:gap-12 mb-16 md:mb-20">
            <img src="<?= base_url('Hero-image/Banquet/vk-Banquet (6).webp') ?>" alt="Lavender Ballroom" class="w-full h-64 sm:h-80 md:h-96 lg:h-[400px] object-cover rounded-xl shadow-lg">
            <div>
                <span class="uppercase tracking-[3px] text-[16px] text-[#C09130] font-semibold">Grand Banquet Hall</span>
                <h2 class="font-serif text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-[#111] mt-2"><?= esc($banquet['lavender']['heading']) ?></h2>
                <div class="w-16 h-0.5 bg-[#C09130] my-4"></div>
                <p class="text-gray-600 text-xl leading-relaxed mb-3"><?= esc($banquet['lavender']['description_1']) ?></p>
                <p class="text-gray-600 text-xl  leading-relaxed mb-3"><?= esc($banquet['lavender']['description_2']) ?></p>
                <p class="text-gray-600 text-xl  leading-relaxed mb-4"><?= esc($banquet['lavender']['description_3']) ?></p>
                <span class="inline-block bg-[#C09130] text-white px-6 py-2 rounded-full text-lg font-semibold"><?= esc($banquet['lavender']['price']) ?></span>
            </div>
        </div>
        
        <!-- Orchid Ballroom -->
        <div class="flex flex-col lg:grid lg:grid-cols-2 gap-8 lg:gap-12 mb-16 md:mb-20">
            <div class="order-2 lg:order-1">
                <span class="uppercase tracking-[3px] text-[11px] text-[#C09130] font-semibold">Premium Banquet Space</span>
                <h2 class="font-serif text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-[#111] mt-2"><?= esc($banquet['orchid']['heading']) ?></h2>
                <div class="w-16 h-0.5 bg-[#C09130] my-4"></div>
                <p class="text-gray-600 text-xl leading-relaxed mb-3"><?= esc($banquet['orchid']['description_1']) ?></p> 
                <p class="text-gray-600 text-xl  leading-relaxed mb-3"><?= esc($banquet['orchid']['description_2']) ?></p>
                <p class="text-gray-600 text-xl  leading-relaxed mb-4"><?= esc($banquet['orchid']['description_3']) ?></p>
                <span class="inline-block bg-[#C09130] text-white px-6 py-2 rounded-full text-lg font-semibold"><?= esc($banquet['orchid']['price']) ?></span>
            </div>
            <img src="<?= base_url('Hero-image/Banquet/vk-Banquet (3).webp') ?>" alt="Orchid Ballroom" class="order-1 lg:order-2 w-full h-64 sm:h-80 md:h-96 lg:h-[400px] object-cover rounded-xl shadow-lg">
        </div>
        
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-8 sm:py-12 md:py-16 bg-[#faf8f3]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8 md:mb-10">
            <span class="uppercase tracking-[3px] text-[16px] text-[#C09130] font-semibold">Why Choose Us</span>
            <h3 class="font-serif text-2xl sm:text-3xl md:text-4xl text-[#111] mt-2">Banquet Highlights</h3>
            <div class="w-16 h-0.5 bg-[#C09130] mx-auto mt-3"></div>
        </div>
        
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3 sm:gap-4">
            <!-- Lavender Features -->
            <?php foreach ($banquet['lavender']['features'] as $feature): ?>
                <div class="flex items-center gap-2 bg-white p-3 sm:p-4 rounded-lg shadow-sm hover:shadow-md transition">
                    <i class="fa-solid fa-circle-check text-[#C09130] text-sm"></i>
                    <span class="text-gray-700  text-xl"><?= esc($feature) ?></span>
                </div>
            <?php endforeach; ?>
            <!-- Orchid Features -->
            <?php foreach ($banquet['orchid']['features'] as $feature): ?>
                <div class="flex items-center gap-2 bg-white p-3 sm:p-4 rounded-lg shadow-sm hover:shadow-md transition">
                    <i class="fa-solid fa-circle-check text-[#C09130] text-sm"></i>
                    <span class="text-gray-700  sm:text-lg"><?= esc($feature) ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Gallery Grid -->
<section class="py-8 sm:py-12 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8 md:mb-10">
            <span class="uppercase tracking-[3px] text-[16px] text-[#C09130] font-semibold">Our Gallery</span>
            <h3 class="font-serif text-2xl sm:text-3xl md:text-4xl text-[#111] mt-2">Banquet Views</h3>
            <div class="w-16 h-0.5 bg-[#C09130] mx-auto mt-3"></div>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5">
            <?php foreach ($banquet['gallery'] as $image): ?>
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="<?= base_url($image) ?>" alt="Banquet Gallery" class="w-full h-64 sm:h-72 md:h-80 object-cover hover:scale-105 transition duration-500">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= view('template/footer') ?>