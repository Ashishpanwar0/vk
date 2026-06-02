<?php
$differencePoints = [
    ['number' => '01', 'title' => 'Prime Location in Kannauj', 'desc' => 'Centrally located with easy access to city centre, railway station and major highways.'],
    ['number' => '02', 'title' => 'Authentic Warm Hospitality', 'desc' => 'Our team treats every guest like family with genuine care and attention.'],
    ['number' => '03', 'title' => 'Best Price Guarantee', 'desc' => 'Book direct and enjoy the lowest rates with flexible cancellation options.'],
    ['number' => '04', 'title' => 'Impeccable Clean Rooms', 'desc' => 'Fresh linen, daily housekeeping and rigorous hygiene standards maintained always.']
];

$experienceCards = [
    ['title' => 'Luxury Accommodation', 'image' => base_url('Hero-image/Hero-logo-image/show-case-6.webp')],
    ['title' => 'Premium Rooms', 'image' => base_url('Hero-image/Hero-logo-image/vk-grand-slider-2.webp')],
    ['title' => 'Fine Dining', 'image' => base_url('Hero-image/Image-Other/DSC09659.webp')],
    ['title' => 'Event Venues', 'image' => base_url('Hero-image/Hero-logo-image/show-case-6.webp')],
    ['title' => 'Spa & Wellness', 'image' => base_url('Hero-image/Hero-logo-image/vk-grand (2).webp')]
];
?>

<style>
.vk-card{
    overflow:hidden;
    cursor:pointer;
    transition: all 0.4s ease;
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
</style>

<section>

<!-- ================= WHY VK GRAND ================= -->
<div class="bg-[#1C1814] py-12 px-5 md:px-10 lg:px-20">
    <div class="max-w-[1400px] mx-auto">
        <span class="uppercase tracking-[4px] text-[#D4A843] text-[11px]">WHY VK GRAND</span>
        
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
                    <p class="text-gray-400 text-[15px] leading-relaxed">
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
        <span class="uppercase tracking-[4px] text-[#D4A843] text-[11px]">VISUAL TOUR</span>
        
        <h2 class="text-white text-[32px] md:text-[42px] lg:text-[56px] leading-tight mt-3 mb-10">
            Experience <span class="italic text-[#D4A843]">VK Grand</span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-4">

            <!-- BIG CARD -->
            <div class="lg:col-span-12">
                <div class="vk-card relative h-[240px] sm:h-[280px] md:h-[320px] lg:h-[380px] rounded-3xl overflow-hidden">
                    <img src="<?= $experienceCards[0]['image'] ?>" 
                         class="w-full h-full object-cover" alt="<?= $experienceCards[0]['title'] ?>">
                    <div class="absolute inset-0 vk-overlay"></div>
                    <div class="absolute bottom-6 left-6 md:bottom-8 md:left-8">
                        <h3 class="text-white text-2xl md:text-3xl lg:text-4xl font-semibold">
                            <?= $experienceCards[0]['title'] ?>
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Remaining 4 Cards -->
            <?php for($i = 1; $i < 5; $i++): ?>
            <div class="lg:col-span-6">
                <div class="vk-card relative h-[180px] sm:h-[200px] md:h-[220px] lg:h-[240px] rounded-3xl overflow-hidden">
                    <img src="<?= $experienceCards[$i]['image'] ?>" 
                         class="w-full h-full object-cover" alt="<?= $experienceCards[$i]['title'] ?>">
                    <div class="absolute inset-0 vk-overlay"></div>
                    <div class="absolute bottom-4 left-4 md:bottom-6 md:left-6">
                        <h3 class="text-white text-xl md:text-2xl font-medium">
                            <?= $experienceCards[$i]['title'] ?>
                        </h3>
                    </div>
                </div>
            </div>
            <?php endfor; ?>

        </div>
    </div>
</div>

</section>