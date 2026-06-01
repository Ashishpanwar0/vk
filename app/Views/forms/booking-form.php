<form action="#" method="POST" class="space-y-5">
    
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <!-- First Name -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">First Name *</label>
            <input type="text" required 
                   class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#C09130] focus:border-transparent outline-none transition">
        </div>
        
        <!-- Last Name -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Last Name *</label>
            <input type="text" required 
                   class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#C09130] focus:border-transparent outline-none transition">
        </div>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <!-- Email -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email Address *</label>
            <input type="email" required 
                   class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#C09130] focus:border-transparent outline-none transition">
        </div>
        
        <!-- Phone -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number *</label>
            <input type="tel" required 
                   class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#C09130] focus:border-transparent outline-none transition">
        </div>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <!-- Room Type -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Room Type *</label>
            <select required 
                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#C09130] focus:border-transparent outline-none transition">
                <option value="">Select Room Type</option>
                <option value="deluxe">Deluxe Room - ₹4,999/night</option>
                <option value="super-deluxe">Super Deluxe - ₹6,999/night</option>
                <option value="executive">Executive Suite - ₹9,999/night</option>
                <option value="presidential">Presidential Suite - ₹15,999/night</option>
            </select>
        </div>
        
        <!-- Number of Rooms -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Number of Rooms *</label>
            <select required 
                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#C09130] focus:border-transparent outline-none transition">
                <option value="1">1 Room</option>
                <option value="2">2 Rooms</option>
                <option value="3">3 Rooms</option>
                <option value="4">4 Rooms</option>
                <option value="5">5 Rooms</option>
            </select>
        </div>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <!-- Check In -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Check In Date *</label>
            <input type="date" required 
                   class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#C09130] focus:border-transparent outline-none transition">
        </div>
        
        <!-- Check Out -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Check Out Date *</label>
            <input type="date" required 
                   class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#C09130] focus:border-transparent outline-none transition">
        </div>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <!-- Adults -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Adults *</label>
            <select required 
                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#C09130] focus:border-transparent outline-none transition">
                <option value="1">1 Adult</option>
                <option value="2">2 Adults</option>
                <option value="3">3 Adults</option>
                <option value="4">4 Adults</option>
            </select>
        </div>
        
        <!-- Children -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Children</label>
            <select 
                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#C09130] focus:border-transparent outline-none transition">
                <option value="0">0 Child</option>
                <option value="1">1 Child</option>
                <option value="2">2 Children</option>
                <option value="3">3 Children</option>
            </select>
        </div>
    </div>
    
    <!-- Special Requests -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Special Requests</label>
        <textarea rows="3" 
                  placeholder="Any special requirements or requests..."
                  class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#C09130] focus:border-transparent outline-none transition"></textarea>
    </div>
    
    <!-- Submit Button -->
    <button type="submit" 
            class="w-full bg-[#C09130] hover:bg-[#0F6B5B] text-white font-semibold py-3 rounded-lg transition duration-300 text-base">
        <i class="fa-regular fa-calendar-check mr-2"></i> Book Now
    </button>
    
    <p class="text-xs text-gray-400 text-center mt-3">
        * 50% advance payment required to confirm your booking
    </p>
</form>