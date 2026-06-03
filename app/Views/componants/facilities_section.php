<?php

$facilities = include APPPATH . 'Data/facilities.php';

?>

<section class="py-20 bg-[#F8F6F3]">

    <div class="max-w-[1400px] mx-auto px-5 lg:px-10">

        <div class="text-center mb-14">

            <span class="uppercase tracking-[4px] text-gold text-lg font-bold font-semibold">
                HOTEL FACILITIES
            </span>

            <h2 class="font-display text-5xl mt-2 text-dark">
                Everything You
                <span class="italic text-gold">Need</span>
            </h2>

        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">

            <?php foreach ($facilities as $item): ?>

                <div class="bg-white rounded-[24px] p-8 shadow-sm hover:shadow-xl transition-all duration-300">

                    <div class="w-16 h-16 rounded-2xl bg-[#F5ECD9] flex items-center justify-center mb-5">

                        <i class="fa-solid <?= esc($item['icon']) ?> text-gold text-2xl"></i>

                    </div>

                    <h3 class="text-2xl font-display text-dark mb-3">
                        <?= esc($item['title']) ?>
                    </h3>

                    <p class="text-gray-600 text-lg">
                        <?= esc($item['description']) ?>
                    </p>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>