<x-layout>
      <!-- Reservation Page -->
        <section id="reservation-page" class="page">
            <div class="container mx-auto px-4 py-16">
                <div class="max-w-4xl mx-auto">
                    <h1 class="section-title text-center">Reserve Your Apartment</h1>
                    <p class="text-center text-gray-600 dark:text-gray-400 mb-12">Complete the form below to reserve your dream apartment</p>
                    
                    <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl overflow-hidden">
                        <div class="md:flex">
                            <div class="md:w-1/3 bg-primary text-white p-10">
                                <h2 class="text-2xl font-bold mb-6">Reservation Process</h2>
                                <ul class="space-y-4">
                                    <li class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center mr-3 flex-shrink-0">
                                            <span class="font-bold">1</span>
                                        </div>
                                        <span>Complete this reservation form</span>
                                    </li>
                                    <li class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center mr-3 flex-shrink-0">
                                            <span class="font-bold">2</span>
                                        </div>
                                        <span>We'll contact you to confirm details</span>
                                    </li>
                                    <li class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center mr-3 flex-shrink-0">
                                            <span class="font-bold">3</span>
                                        </div>
                                        <span>Sign reservation agreement</span>
                                    </li>
                                    <li class="flex items-start">
                                        <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center mr-3 flex-shrink-0">
                                            <span class="font-bold">4</span>
                                        </div>
                                        <span>Pay reservation deposit</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="md:w-2/3 p-10">
                                <form>
                                    <h3 class="text-xl font-bold mb-6 dark:text-white">Personal Information</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                        <div>
                                            <label class="block text-gray-700 dark:text-gray-300 mb-2" for="first-name">First Name</label>
                                            <input type="text" id="first-name" class="w-full px-4 py-3 bg-gray-50 dark:bg-slate-700 border border-gray-300 dark:border-slate-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                        </div>
                                        <div>
                                            <label class="block text-gray-700 dark:text-gray-300 mb-2" for="last-name">Last Name</label>
                                            <input type="text" id="last-name" class="w-full px-4 py-3 bg-gray-50 dark:bg-slate-700 border border-gray-300 dark:border-slate-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                        </div>
                                    </div>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                        <div>
                                            <label class="block text-gray-700 dark:text-gray-300 mb-2" for="email">Email Address</label>
                                            <input type="email" id="email" class="w-full px-4 py-3 bg-gray-50 dark:bg-slate-700 border border-gray-300 dark:border-slate-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                        </div>
                                        <div>
                                            <label class="block text-gray-700 dark:text-gray-300 mb-2" for="phone">Phone Number</label>
                                            <input type="tel" id="phone" class="w-full px-4 py-3 bg-gray-50 dark:bg-slate-700 border border-gray-300 dark:border-slate-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                        </div>
                                    </div>
                                    
                                    <h3 class="text-xl font-bold mb-6 dark:text-white">Property Information</h3>
                                    <div class="mb-6">
                                        <label class="block text-gray-700 dark:text-gray-300 mb-2" for="property">Select Property</label>
                                        <select id="property" class="w-full px-4 py-3 bg-gray-50 dark:bg-slate-700 border border-gray-300 dark:border-slate-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                            <option>Garden Heights - $550,000</option>
                                            <option>Harbor View Apartments - $525,000</option>
                                            <option>Parkside Residences - $475,000</option>
                                            <option>Metropolitan Towers - $625,000</option>
                                            <option>Riverside Lofts - $695,000</option>
                                            <option>Urban Oasis - $425,000</option>
                                        </select>
                                    </div>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                        <div>
                                            <label class="block text-gray-700 dark:text-gray-300 mb-2" for="move-in">Preferred Move-in Date</label>
                                            <input type="date" id="move-in" class="w-full px-4 py-3 bg-gray-50 dark:bg-slate-700 border border-gray-300 dark:border-slate-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                        </div>
                                        <div>
                                            <label class="block text-gray-700 dark:text-gray-300 mb-2" for="deposit">Deposit Amount</label>
                                            <select id="deposit" class="w-full px-4 py-3 bg-gray-50 dark:bg-slate-700 border border-gray-300 dark:border-slate-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                                <option>Standard (5% of purchase price)</option>
                                                <option>Premium (10% of purchase price)</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-8">
                                        <label class="block text-gray-700 dark:text-gray-300 mb-2" for="notes">Additional Notes</label>
                                        <textarea id="notes" rows="4" class="w-full px-4 py-3 bg-gray-50 dark:bg-slate-700 border border-gray-300 dark:border-slate-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary w-full py-4 text-lg">Reserve Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Page -->
        <section id="contact-page" class="page">
            <div class="container mx-auto px-4 py-16">
                <h1 class="section-title text-center">Contact Us</h1>
                <p class="text-center text-gray-600 dark:text-gray-400 mb-12">We're here to help you find your dream apartment</p>
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                    <div class="lg:col-span-2">
                        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-10">
                            <form>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                    <div>
                                        <label class="block text-gray-700 dark:text-gray-300 mb-2" for="contact-name">Full Name</label>
                                        <input type="text" id="contact-name" class="w-full px-4 py-3 bg-gray-50 dark:bg-slate-700 border border-gray-300 dark:border-slate-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 dark:text-gray-300 mb-2" for="contact-email">Email Address</label>
                                        <input type="email" id="contact-email" class="w-full px-4 py-3 bg-gray-50 dark:bg-slate-700 border border-gray-300 dark:border-slate-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                    </div>
                                </div>
                                
                                <div class="mb-6">
                                    <label class="block text-gray-700 dark:text-gray-300 mb-2" for="contact-subject">Subject</label>
                                    <input type="text" id="contact-subject" class="w-full px-4 py-3 bg-gray-50 dark:bg-slate-700 border border-gray-300 dark:border-slate-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                                
                                <div class="mb-6">
                                    <label class="block text-gray-700 dark:text-gray-300 mb-2" for="contact-message">Message</label>
                                    <textarea id="contact-message" rows="5" class="w-full px-4 py-3 bg-gray-50 dark:bg-slate-700 border border-gray-300 dark:border-slate-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                                </div>
                                
                                <button type="submit" class="btn btn-primary w-full py-4 text-lg">Send Message</button>
                            </form>
                        </div>
                    </div>
                    
                    <div>
                        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-10 h-full">
                            <h2 class="text-2xl font-bold mb-6 dark:text-white">Contact Information</h2>
                            
                            <div class="space-y-6">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary mr-4 flex-shrink-0">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-bold mb-1 dark:text-white">Our Location</h3>
                                        <p class="text-gray-600 dark:text-gray-400">123 Luxury Avenue, Downtown, NY 10001</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start">
                                    <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary mr-4 flex-shrink-0">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-bold mb-1 dark:text-white">Phone Number</h3>
                                        <p class="text-gray-600 dark:text-gray-400">+1 (555) 123-4567</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start">
                                    <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary mr-4 flex-shrink-0">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-bold mb-1 dark:text-white">Email Address</h3>
                                        <p class="text-gray-600 dark:text-gray-400">info@luxuryestates.com</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start">
                                    <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary mr-4 flex-shrink-0">
                                        <i class="fa-solid fa-clock"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-bold mb-1 dark:text-white">Business Hours</h3>
                                        <p class="text-gray-600 dark:text-gray-400">Monday - Friday: 9AM - 6PM</p>
                                        <p class="text-gray-600 dark:text-gray-400">Saturday: 10AM - 4PM</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-10">
                                <h3 class="text-xl font-bold mb-4 dark:text-white">Follow Us</h3>
                                <div class="flex space-x-4">
                                    <a href="#" class="w-12 h-12 rounded-full bg-gray-100 dark:bg-slate-700 flex items-center justify-center hover:bg-primary hover:text-white transition-colors">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="w-12 h-12 rounded-full bg-gray-100 dark:bg-slate-700 flex items-center justify-center hover:bg-primary hover:text-white transition-colors">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="#" class="w-12 h-12 rounded-full bg-gray-100 dark:bg-slate-700 flex items-center justify-center hover:bg-primary hover:text-white transition-colors">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="#" class="w-12 h-12 rounded-full bg-gray-100 dark:bg-slate-700 flex items-center justify-center hover:bg-primary hover:text-white transition-colors">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</x-layout>