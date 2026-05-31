<?php
$title = $title ?? 'Page Title';
$subtitle = $subtitle ?? '';
$bg = $bg ?? 'assets/images/banner.jpg';
?>

<section
    class="relative h-[220px] md:h-[300px] bg-cover  bg-center flex items-center overflow-hidden"
    style="background-image:url('<?= $bg ?>')"
>
    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-black/20"></div>
    <div class="absolute inset-0 bg-[#0F6B5B]/20"></div>

    <div class="relative z-10 max-w-7xl mx-auto w-full px-6 lg:px-12">

        <div class="flex items-center gap-2 text-xs uppercase tracking-wider text-white/70 mb-5">
            <a href="/">Home</a>
            <span>›</span>
            <span class="text-white font-semibold"><?= $title ?></span>
        </div>

        <h1 class="text-[#D4A843] text-5xl md:text-7xl leading-tight font-serif">
            <?= $title ?>
        </h1>

        <?php if($subtitle): ?>
            <p class="mt-5 max-w-lg text-white/80 text-base md:text-lg">
                <?= $subtitle ?>
            </p>
        <?php endif; ?>

    </div>
</section>