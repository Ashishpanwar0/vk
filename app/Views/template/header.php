<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Premium Hotel Font -->
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<script src="https://cdn.tailwindcss.com"></script>

<script>
tailwind.config = {
content: [],
theme: {
extend: {

fontFamily: {

display:['Cormorant Garamond','serif'],
body:['Cormorant Garamond','serif'],

},

colors: {

gold:'#D4A843',
green:'#0F6B5B',
dark:'#111111',

}

}
}
}
</script>

<style>
html,
body{
    font-family:'Cormorant Garamond', serif;
}

/* Website Text */
h1,h2,h3,h4,h5,h6,
p,
span,
a,
button,
li,
input,
textarea,
select{
    font-family:'Cormorant Garamond', serif;
}

/* Font Awesome Icons Fix */
.fa,
.fas,
.far,
.fab,
.fa-solid,
.fa-regular{
    font-family:"Font Awesome 6 Free" !important;
}

.fa-brands{
    font-family:"Font Awesome 6 Brands" !important;
}
</style>

<!-- ================= HEADER START ================= -->

<body class="font-body overflow-x-hidden bg-[#F8F5EF]">

<!-- ================= TOP BAR ================= -->
<!-- <div class="bg-green text-white py-3 text-sm">
  <div class="max-w-[1400px] mx-auto px-5 lg:px-14">
    <div class="flex flex-col lg:flex-row items-center justify-between gap-3">
      <div class="flex flex-wrap items-center justify-center gap-6 lg:gap-8">
        <a href="mailto:info@vkgrand.com" class="flex items-center gap-2 hover:text-gold transition-colors">
          <i class="fa-solid fa-envelope"></i>
          info@vkgrand.com
        </a>
        <a href="tel:+918052065111" class="flex items-center gap-2 hover:text-gold transition-colors">
          <i class="fa-solid fa-phone"></i>
          +91-8052065111
        </a>
      </div>

      <div class="hidden lg:flex items-center gap-3">
        <a href="#" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center hover:bg-gold hover:text-dark transition-all">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center hover:bg-gold hover:text-dark transition-all">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="#" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center hover:bg-gold hover:text-dark transition-all">
          <i class="fab fa-whatsapp"></i>
        </a>
        <a href="#" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center hover:bg-gold hover:text-dark transition-all">
          <i class="fab fa-youtube"></i>
        </a>
      </div>
    </div>
  </div>
</div> -->

<!-- ================= NAVBAR ================= -->
<header class="bg-white sticky top-0 z-50 shadow-sm transition-shadow" id="navbar">
  <div class="max-w-[1400px] mx-auto px-5 lg:px-14">
    <div class="flex items-center justify-between py-4">
      
      <!-- LOGO -->
      <a href="<?= base_url('/') ?>">
        <img src="<?= base_url('Hero-image/Hero-logo-image/vk-grand-logo.webp') ?>" class="w-[80px] lg:w-[90px]">
      </a>

      <!-- DESKTOP NAV -->
      <nav class="hidden lg:flex items-center gap-10 text-[20px] font-medium">
        <a href="<?= base_url('/') ?>" class="text-[#222] hover:text-green transition-colors relative after:absolute after:bottom-[-2px] after:left-0 after:h-[2px] after:bg-gold after:w-0 hover:after:w-full after:transition-all">Home</a>
        <a href="<?= base_url('about') ?>" class="text-[#222] hover:text-green transition-colors relative after:absolute after:bottom-[-2px] after:left-0 after:h-[2px] after:bg-gold after:w-0 hover:after:w-full after:transition-all">About Us</a>
        <a href="<?= base_url('rooms') ?>" class="text-[#222] hover:text-green transition-colors relative after:absolute after:bottom-[-2px] after:left-0 after:h-[2px] after:bg-gold after:w-0 hover:after:w-full after:transition-all">Our Rooms</a>

        <!-- Restaurant Dropdown -->
        <div class="relative group">
          <button class="flex items-center gap-1.5 text-[#222] hover:text-green transition-colors">
            Restaurant
            <i class="fa-solid fa-angle-down text-xs transition-transform group-hover:rotate-180"></i>
          </button>
          <div class="absolute top-[calc(100%+14px)] left-1/2 -translate-x-1/2 bg-white min-w-[200px] rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all py-2 border border-gray-100">
            <a href="<?= base_url('mawa') ?>" class="block px-5 py-3 hover:bg-[#f4f9f8] hover:text-green flex items-center gap-3">
              <i class="fa-solid fa-utensils text-gold text-xs"></i>Mawa
            </a>
            <a href="<?= base_url('baithak') ?>" class="block px-5 py-3 hover:bg-[#f4f9f8] hover:text-green flex items-center gap-3">
              <i class="fa-solid fa-mug-hot text-gold text-xs"></i>Baithak
            </a>
          </div>
        </div>

        <!-- Venue Dropdown -->
        <div class="relative group">
          <button class="flex items-center gap-1.5 text-[#222] hover:text-green transition-colors">
            Our Venue
            <i class="fa-solid fa-angle-down text-xs transition-transform group-hover:rotate-180"></i>
          </button>
          <div class="absolute top-[calc(100%+14px)] left-1/2 -translate-x-1/2 bg-white min-w-[200px] rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all py-2 border border-gray-100">
            <a href="<?= base_url('banquet') ?>" class="block px-5 py-3 hover:bg-[#f4f9f8] hover:text-green flex items-center gap-3">
              <i class="fa-solid fa-glass-cheers text-gold text-xs"></i>Banquet
            </a>
            <a href="<?= base_url('lawn') ?>" class="block px-5 py-3 hover:bg-[#f4f9f8] hover:text-green flex items-center gap-3">
              <i class="fa-solid fa-leaf text-gold text-xs"></i>Lawn
            </a>
          </div>
        </div>

        <a href="<?= base_url('contact') ?>" class="text-[#222] hover:text-green transition-colors">Contact Us</a>
      </nav>

      <!-- RIGHT SIDE -->
      <div class="flex items-center gap-4">
        <a href="<?= base_url('contact') ?>" 
           class="hidden lg:flex items-center px-7 py-3 bg-gold text-white font-semibold rounded-full hover:bg-green hover:text-white transition-all">
          Book Now
        </a>
        <button id="hamburger" class="lg:hidden w-11 h-11 flex items-center justify-center text-2xl text-green border border-gray-300 rounded-xl">
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>
    </div>
  </div>
</header>

<!-- ================= MOBILE OVERLAY ================= -->
<div id="overlay" class="fixed inset-0 bg-black/50 z-[9998] opacity-0 invisible transition-all"></div>

<!-- ================= MOBILE MENU ================= -->
<div id="mobileMenu" class="fixed top-0 right-[-100%] w-[300px] h-screen bg-dark z-[9999] transition-all duration-500 overflow-y-auto">

  <div class="p-5 flex items-center justify-between border-b border-white/10">
    <img src="<?= base_url('Hero-image/Hero-logo-image/vk-grand-logo.webp') ?>" class="w-[75px]">
    <button id="closeBtn" class="text-white text-3xl hover:text-gold">
      <i class="fa-solid fa-xmark"></i>
    </button>
  </div>

  <div class="px-6 py-6">
    <a href="<?= base_url('/') ?>" class="block py-4 text-white text-[16px] font-medium border-b border-white/10 hover:text-gold">Home</a>
    <a href="<?= base_url('about') ?>" class="block py-4 text-white text-[16px] font-medium border-b border-white/10 hover:text-gold">About Us</a>
    <a href="<?= base_url('rooms') ?>" class="block py-4 text-white text-[16px] font-medium border-b border-white/10 hover:text-gold">Our Rooms</a>

    <div class="mt-6 text-gold text-xs font-semibold tracking-widest">RESTAURANT</div>
    <a href="<?= base_url('mawa') ?>" class="block py-3 text-white/70 pl-4 hover:text-white">Mawa</a>
    <a href="<?= base_url('baithak') ?>" class="block py-3 text-white/70 pl-4 hover:text-white">Baithak</a>

    <div class="mt-6 text-gold text-xs font-semibold tracking-widest">OUR VENUE</div>
    <a href="<?= base_url('banquet') ?>" class="block py-3 text-white/70 pl-4 hover:text-white">Banquet</a>
    <a href="<?= base_url('lawn') ?>" class="block py-3 text-white/70 pl-4 hover:text-white">Lawn</a>

    <a href="<?= base_url('contact') ?>" class="block py-4 text-white text-[16px] font-medium border-b border-white/10 hover:text-gold">Contact Us</a>
  </div>

  <div class="p-6 border-t border-white/10">
    <a href="<?= base_url('contact') ?>" class="block w-full text-center bg-green hover:bg-gold hover:text-black py-4 rounded-full text-white font-semibold">
      Book Now
    </a>

    <div class="mt-8 text-center">
      <a href="tel:+918052065111" class="text-white/60 hover:text-gold flex items-center justify-center gap-2">
        <i class="fa-solid fa-phone"></i> +91-8052065111
      </a>
    </div>

    <div class="flex justify-center gap-4 mt-10">
      <a href="#" class="social-btn w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-gold hover:text-dark">FB</a>
      <a href="#" class="social-btn w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-gold hover:text-dark">IG</a>
      <a href="#" class="social-btn w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-gold hover:text-dark">WA</a>
    </div>
  </div>
</div>

<!-- ================= SCRIPT ================= -->
<script>
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');
const overlay = document.getElementById('overlay');
const closeBtn = document.getElementById('closeBtn');
const navbar = document.getElementById('navbar');

hamburger.addEventListener('click', () => {
  mobileMenu.style.right = '0';
  overlay.classList.add('opacity-100', 'visible');
});

closeBtn.addEventListener('click', () => {
  mobileMenu.style.right = '-100%';
  overlay.classList.remove('opacity-100', 'visible');
});

overlay.addEventListener('click', () => {
  mobileMenu.style.right = '-100%';
  overlay.classList.remove('opacity-100', 'visible');
});

window.addEventListener('scroll', () => {
  navbar.classList.toggle('shadow-md', window.scrollY > 30);
});
</script>