<x-layout>
      <!-- Property Detail Page -->
        <section id="property-detail-page" class="page">
            <div class="container mx-auto px-4 py-16">
                <div class="mb-8">
                    <button class="flex items-center text-primary" data-page="properties">
                        <i class="fa-solid fa-arrow-left mr-2"></i> Back to Properties
                    </button>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div>
                        <!-- Gallery -->
                        <div class="mb-6">
                            <div class="bg-gray-200 border-2 border-dashed rounded-xl w-full h-96 mb-4"></div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="bg-gray-200 border-2 border-dashed rounded-xl w-full h-32"></div>
                                <div class="bg-gray-200 border-2 border-dashed rounded-xl w-full h-32"></div>
                                <div class="bg-gray-200 border-2 border-dashed rounded-xl w-full h-32"></div>
                            </div>
                        </div>
                        
                        <!-- Property Details -->
                        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-md border border-gray-100 dark:border-slate-700 mb-8">
                            <h2 class="text-2xl font-bold mb-4 dark:text-white">Property Details</h2>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                                <div>
                                    <div class="text-gray-500 dark:text-gray-400 mb-1">Bedrooms</div>
                                    <div class="font-medium dark:text-white">3</div>
                                </div>
                                <div>
                                    <div class="text-gray-500 dark:text-gray-400 mb-1">Bathrooms</div>
                                    <div class="font-medium dark:text-white">2.5</div>
                                </div>
                                <div>
                                    <div class="text-gray-500 dark:text-gray-400 mb-1">Area</div>
                                    <div class="font-medium dark:text-white">1,350 sq.ft</div>
                                </div>
                                <div>
                                    <div class="text-gray-500 dark:text-gray-400 mb-1">Year Built</div>
                                    <div class="font-medium dark:text-white">2021</div>
                                </div>
                            </div>
                            
                            <h3 class="text-xl font-bold mb-4 dark:text-white">Description</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">
                                This stunning modern apartment features an open floor plan with high ceilings and large windows offering panoramic city views. The gourmet kitchen includes stainless steel appliances, quartz countertops, and a spacious island. Master suite features a walk-in closet and spa-like bathroom with soaking tub. Building amenities include 24/7 concierge, fitness center, rooftop terrace, and parking.
                            </p>
                            
                            <h3 class="text-xl font-bold mb-4 dark:text-white">Amenities</h3>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                <div class="flex items-center">
                                    <i class="fa-solid fa-check text-green-500 mr-2"></i>
                                    <span>Swimming Pool</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fa-solid fa-check text-green-500 mr-2"></i>
                                    <span>Gym</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fa-solid fa-check text-green-500 mr-2"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fa-solid fa-check text-green-500 mr-2"></i>
                                    <span>Concierge</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fa-solid fa-check text-green-500 mr-2"></i>
                                    <span>Pet Friendly</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fa-solid fa-check text-green-500 mr-2"></i>
                                    <span>Balcony</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <!-- Property Info -->
                        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-md border border-gray-100 dark:border-slate-700 sticky top-24">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h1 class="text-3xl font-bold dark:text-white">Garden Heights</h1>
                                    <p class="text-gray-500 dark:text-gray-400">
                                        <i class="fa-solid fa-location-dot mr-2"></i>Botanical Area, Downtown
                                    </p>
                                </div>
                                <span class="text-3xl font-bold text-primary">$550,000</span>
                            </div>
                            
                            <div class="mb-6">
                                <div class="flex items-center mb-2">
                                    <i class="fa-solid fa-star text-yellow-400 mr-1"></i>
                                    <i class="fa-solid fa-star text-yellow-400 mr-1"></i>
                                    <i class="fa-solid fa-star text-yellow-400 mr-1"></i>
                                    <i class="fa-solid fa-star text-yellow-400 mr-1"></i>
                                    <i class="fa-solid fa-star-half-stroke text-yellow-400 mr-2"></i>
                                    <span class="font-medium">4.5 (24 reviews)</span>
                                </div>
                            </div>
                            
                            <div class="mb-8">
                                <h3 class="text-xl font-bold mb-4 dark:text-white">Schedule a Tour</h3>
                                <form>
                                    <div class="mb-4">
                                        <input type="text" placeholder="Your Name" class="w-full px-4 py-3 bg-gray-50 dark:bg-slate-700 border border-gray-300 dark:border-slate-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                    </div>
                                    <div class="mb-4">
                                        <input type="email" placeholder="Email" class="w-full px-4 py-3 bg-gray-50 dark:bg-slate-700 border border-gray-300 dark:border-slate-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                    </div>
                                    <div class="grid grid-cols-2 gap-4 mb-6">
                                        <div>
                                            <input type="date" class="w-full px-4 py-3 bg-gray-50 dark:bg-slate-700 border border-gray-300 dark:border-slate-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                        </div>
                                        <div>
                                            <select class="w-full px-4 py-3 bg-gray-50 dark:bg-slate-700 border border-gray-300 dark:border-slate-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                                                <option>10:00 AM</option>
                                                <option>11:00 AM</option>
                                                <option>1:00 PM</option>
                                                <option>3:00 PM</option>
                                                <option>5:00 PM</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-full">Schedule Tour</button>
                                </form>
                            </div>
                            
                            <div class="border-t border-gray-200 dark:border-slate-700 pt-6">
                                <h3 class="text-xl font-bold mb-4 dark:text-white">Contact Agent</h3>
                                <div class="flex items-center mb-6">
                                    <div class="bg-gray-200 border-2 border-dashed rounded-full w-16 h-16"></div>
                                    <div class="ml-4">
                                        <h4 class="font-bold dark:text-white">Emily Rodriguez</h4>
                                        <p class="text-gray-500 dark:text-gray-400">Senior Real Estate Agent</p>
                                    </div>
                                </div>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-phone mr-3 w-6 text-primary"></i>
                                        <span>+1 (555) 123-4567</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-envelope mr-3 w-6 text-primary"></i>
                                        <span>emily@luxuryestates.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</x-layout>