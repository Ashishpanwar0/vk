<?= view('template/header') ?>
<!-- =========== HERO =========== -->
<?= view('componants/hero', [

    'title' => 'Contact Us',
    'subtitle' => 'Welcome to VK Grand ',
    'bg' => 'Hero-image/Hero-logo-image/slider-3.webp'

]) ?>

<!-- =========== MAIN =========== -->
<div class="max-w-[1300px] mx-auto px-5 py-16 md:py-24">
  <!-- INFO CARDS -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
    <div class="bg-white rounded-2xl p-7 text-center border border-black/5 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 group">
      <div class="w-14 h-14 mx-auto rounded-2xl bg-[#D4A843] flex items-center justify-center text-2xl text-[#FFFFFF] group-hover:bg-[#0F6B5B] group-hover:text-white transition-all">
        <i class="fa-solid fa-location-dot"></i>
      </div>
      <div class="text-[#D4A843] text-[11px] font-semibold tracking-widest uppercase mt-5 mb-1">Address</div>
      <div class="text-sm leading-relaxed">VK Grand Hotel,<br>Lucknow, Uttar Pradesh</div>
    </div>
    <div class="bg-white rounded-2xl p-7 text-center border border-black/5 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 group">
      <div class="w-14 h-14 mx-auto rounded-2xl bg-[#D4A843] flex items-center justify-center text-2xl text-[#FFFFFF] group-hover:bg-[#0F6B5B] group-hover:text-white transition-all">
        <i class="fa-solid fa-phone"></i>
      </div>
      <div class="text-[#D4A843] text-[11px] font-semibold tracking-widest uppercase mt-5 mb-1">Phone</div>
      <div class="text-sm">
        <a href="tel:+918052065111" class="hover:text-[#FFFFFF]">+91-8052065111</a>
      </div>
    </div>

    <div class="bg-white rounded-2xl p-7 text-center border border-black/5 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 group">
      <div class="w-14 h-14 mx-auto rounded-2xl bg-[#D4A843] flex items-center justify-center text-2xl text-[#FFFFFF] group-hover:bg-[#0F6B5B] group-hover:text-white transition-all">
        <i class="fa-solid fa-envelope"></i>
      </div>
      <div class="text-[#D4A843] text-[11px] font-semibold tracking-widest uppercase mt-5 mb-1">Email</div>
      <div class="text-sm">
        <a href="mailto:info@vkgrand.com" class="hover:text-[#FFFFFF]">info@vkgrand.com</a>
      </div>
    </div>

    <div class="bg-white rounded-2xl p-7 text-center border border-black/5 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 group">
      <div class="w-14 h-14 mx-auto rounded-2xl bg-[#D4A843] flex items-center justify-center text-2xl text-[#FFFFFF] group-hover:bg-[#0F6B5B] group-hover:text-white transition-all">
        <i class="fa-solid fa-clock"></i>
      </div>
      <div class="text-[#D4A843] text-[11px] font-semibold tracking-widest uppercase mt-5 mb-1">Check-In / Out</div>
      <div class="text-sm leading-relaxed">Check-in: 12:00 PM<br>Check-out: 11:00 AM</div>
    </div>
  </div>

  <!-- CONTACT GRID -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

    <!-- FORM CARD -->
      <?= view('forms/contact-form')?>

    <!-- RIGHT SIDE -->
    <div class="space-y-8">

      <!-- Map -->
      <div class="rounded-3xl overflow-hidden border border-black/5 shadow-xl">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.9458787068574!2d80.94620147519788!3d26.845694476678255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be2e6c0000001%3A0x0!2zMjbCsDUwJzQ0LjUiTiA4MMKwNTYnNTYuMyJF!5e0!3m2!1sen!2sin!4v1700000000000" 
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

      <!-- Hours -->
      <div class="bg-white rounded-3xl p-8 border border-black/5 shadow-xl">
        <div class="text-[#D4A843] text-xs font-semibold tracking-widest uppercase mb-6">Hotel Timings</div>
        
        <div class="space-y-5 text-sm">
          <div class="flex justify-between items-center pb-4 border-b">
            <span class="flex items-center gap-2"><i class="fa-solid fa-concierge-bell text-[#D4A843]"></i> Front Desk</span>
            <span class="font-semibold text-[#0F6B5B]">24 Hours</span>
          </div>
          <div class="flex justify-between items-center pb-4 border-b">
            <span class="flex items-center gap-2"><i class="fa-solid fa-utensils text-[#D4A843]"></i> Restaurant</span>
            <span class="font-semibold text-[#0F6B5B]">7 AM – 11 PM</span>
          </div>
          <div class="flex justify-between items-center pb-4 border-b">
            <span class="flex items-center gap-2"><i class="fa-solid fa-glass-cheers text-[#D4A843]"></i> Banquet</span>
            <span class="font-semibold text-[#0F6B5B]">By Booking</span>
          </div>
          <div class="flex justify-between items-center pb-4 border-b">
            <span class="flex items-center gap-2"><i class="fa-solid fa-leaf text-[#D4A843]"></i> Lawn</span>
            <span class="font-semibold text-[#0F6B5B]">6 AM – 10 PM</span>
          </div>
          <div class="flex justify-between items-center">
            <span class="flex items-center gap-2"><i class="fa-solid fa-car text-[#D4A843]"></i> Parking</span>
            <span class="font-semibold text-[#0F6B5B]">24 Hours <span class="ml-2 text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full">Free</span></span>
          </div>
        </div>
      </div>

      <!-- Social -->
      <div class="bg-[#D7A843] rounded-3xl p-8 text-white">
        <div class="mb-6">
          <p class="font-serif text-2xl font-bold">Follow VK Grand</p>
          <p class="text-sm opacity-75 mt-1">Stay updated with offers & events</p>
        </div>
        <div class="flex gap-4">
          <a href="#" class="w-11 h-11 bg-white/15 hover:bg-[#D4A843] hover:text-black rounded-full flex items-center justify-center transition-all"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="w-11 h-11 bg-white/15 hover:bg-[#D4A843] hover:text-black rounded-full flex items-center justify-center transition-all"><i class="fab fa-instagram"></i></a>
          <a href="#" class="w-11 h-11 bg-white/15 hover:bg-[#D4A843] hover:text-black rounded-full flex items-center justify-center transition-all"><i class="fab fa-whatsapp"></i></a>
          <a href="#" class="w-11 h-11 bg-white/15 hover:bg-[#D4A843] hover:text-black rounded-full flex items-center justify-center transition-all"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>
<?= view('template/footer') ?>