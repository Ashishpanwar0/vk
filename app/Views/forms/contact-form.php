<section class="bg-[#f6f4ef] min-h-screen">
    <div class="max-w-3xl mx-auto px-5">

        <div class="bg-white rounded-[24px] shadow-lg p-8 md:p-12">

            <!-- Heading -->
            <div class="mb-10">

                <div class="flex items-center gap-3 mb-4">
                    <span class="w-10 h-[1px] bg-[#c79b47]"></span>
                    <span class="text-xs uppercase tracking-[3px] text-[#c79b47]">
                        Send Us A Message
                    </span>
                </div>

                <h2 class="text-5xl font-serif font-bold text-[#111] leading-tight">
                    We'd Love To
                    <br>
                    <span class="italic text-[#D4A843]">
                        Hear From You
                    </span>
                </h2>

                <p class="mt-4 text-gray-500">
                    Fill in the form and our team will respond within 24 hours.
                </p>

            </div>

            <form action="<?= base_url('contact/store') ?>" method="post">

                <?= csrf_field() ?>

                <div class="grid md:grid-cols-2 gap-5">

                    <div>
                        <label class="block text-xs uppercase mb-2 text-gray-500">
                            First Name
                        </label>
                        <input type="text" name="first_name"
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:border-[#c79b47]"
                            required>
                    </div>

                    <div>
                        <label class="block text-xs uppercase mb-2 text-gray-500">
                            Last Name
                        </label>
                        <input type="text" name="last_name"
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:border-[#c79b47]"
                            required>
                    </div>

                    <div>
                        <label class="block text-xs uppercase mb-2 text-gray-500">
                            Phone
                        </label>
                        <input type="tel" name="phone"
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:border-[#c79b47]"
                            required>
                    </div>

                    <div>
                        <label class="block text-xs uppercase mb-2 text-gray-500">
                            Email
                        </label>
                        <input type="email" name="email"
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:border-[#c79b47]"
                            required>
                    </div>

                    <div>
                        <label class="block text-xs uppercase mb-2 text-gray-500">
                            Check-In Date
                        </label>
                        <input type="date" name="checkin_date"
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:border-[#c79b47]">
                    </div>

                    <div>
                        <label class="block text-xs uppercase mb-2 text-gray-500">
                            Check-Out Date
                        </label>
                        <input type="date" name="checkout_date"
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:border-[#c79b47]">
                    </div>

                </div>

                <!-- Interested In -->
                <div class="mt-8">

                    <label class="block text-xs uppercase mb-4 text-gray-500">
                        Interested In
                    </label>

                    <div class="grid md:grid-cols-2 gap-4">

                        <label class="border rounded-xl p-4 flex items-center gap-3 cursor-pointer">
                            <input type="checkbox" name="interest[]" value="Room Booking">
                            Room Booking
                        </label>

                        <label class="border rounded-xl p-4 flex items-center gap-3 cursor-pointer">
                            <input type="checkbox" name="interest[]" value="Banquet Hall">
                            Banquet Hall
                        </label>

                        <label class="border rounded-xl p-4 flex items-center gap-3 cursor-pointer">
                            <input type="checkbox" name="interest[]" value="Wedding Venue">
                            Wedding Venue
                        </label>

                        <label class="border rounded-xl p-4 flex items-center gap-3 cursor-pointer">
                            <input type="checkbox" name="interest[]" value="Restaurant">
                            Restaurant
                        </label>

                    </div>

                </div>

                <!-- Message -->
                <div class="mt-8">

                    <label class="block text-xs uppercase mb-2 text-gray-500">
                        Message
                    </label>

                    <textarea
                        name="message"
                        rows="6"
                        class="w-full border border-gray-300 rounded-2xl p-4 focus:outline-none focus:border-[#c79b47]"
                        placeholder="Tell us how we can help you..."></textarea>

                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full mt-8 bg-[#D4A843] hover:bg-[#0b5f59] text-white py-4 rounded-full font-medium transition">

                    <i class="fa-solid fa-paper-plane mr-2"></i>
                    Send Message

                </button>

            </form>

        </div>

    </div>
</section>