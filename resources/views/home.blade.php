<x-layout>
    <section id="home-page" class="page active">
            <!-- Hero Section -->
            <div class="relative bg-gradient-to-r from-blue-50 to-cyan-50 dark:from-slate-900 dark:to-slate-900">
                <div class="container mx-auto px-4 py-20 md:py-28 flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-12 md:mb-0">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight dark:text-white">
                            Discover Your <span class="text-primary">Dream</span> Apartment
                        </h1>
                        <p class="text-lg md:text-xl mb-8 text-gray-600 dark:text-gray-300">
                            Luxury apartments in prime locations with modern amenities and breathtaking views. Find the perfect home that matches your lifestyle.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <button class="btn btn-primary px-8 py-4 text-lg" data-page="properties">Explore Properties</button>
                            <button class="btn bg-white dark:bg-slate-800 dark:text-white px-8 py-4 text-lg border border-gray-300 dark:border-slate-700">Virtual Tour</button>
                            <button class="btn bg-white dark:bg-slate-800 dark:text-white px-8 py-4 text-lg border border-gray-300 dark:border-slate-700">Virtual Tour</button>
                        </div>
                    </div>
                    <div class="md:w-1/2 relative">
                        <div class="relative rounded-2xl overflow-hidden shadow-xl">
                            <div class="bg-gray-200 border-2 border-dashed rounded-xl w-full h-96 md:h-[500px]"></div>
                            <div class="absolute bottom-4 left-4 bg-white dark:bg-slate-800 p-4 rounded-xl shadow-lg">
                                <h3 class="font-bold text-lg dark:text-white">Skyline Residences</h3>
                                <p class="text-gray-500 dark:text-gray-400">Downtown · Starting at $450,000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Featured Properties -->
            <section class="py-20 bg-gray-100 dark:bg-slate-800">
                <div class="container mx-auto px-4">
                    <h2 class="section-title text-center">Featured Properties</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Property 1 -->
                        <div class="property-card">
                            <div class="relative">
                                <div class="bg-gray-200 border-2 border-dashed rounded-t-xl w-full h-60"></div>
                                <div class="absolute top-4 right-4 bg-primary text-white px-3 py-1 rounded-full">Featured</div>
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <h3 class="text-xl font-bold dark:text-white">Harbor View Apartments</h3>
                                        <p class="text-gray-500 dark:text-gray-400"><i class="fa-solid fa-location-dot mr-2"></i>Waterfront District</p>
                                    </div>
                                    <span class="text-2xl font-bold dark:text-white">$525,000</span>
                                </div>
                                <div class="grid grid-cols-3 gap-4 mb-6">
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-bed mr-2 text-primary"></i>
                                        <span>3 Beds</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-bath mr-2 text-primary"></i>
                                        <span>2 Baths</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-ruler-combined mr-2 text-primary"></i>
                                        <span>1,250 sq.ft</span>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-full" data-page="property-detail">View Details</button>
                            </div>
                        </div>

                        <!-- Property 2 -->
                        <div class="property-card">
                            <div class="relative">
                                <div class="bg-gray-200 border-2 border-dashed rounded-t-xl w-full h-60"></div>
                                <div class="absolute top-4 right-4 bg-secondary text-white px-3 py-1 rounded-full">New</div>
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <h3 class="text-xl font-bold dark:text-white">Parkside Residences</h3>
                                        <p class="text-gray-500 dark:text-gray-400"><i class="fa-solid fa-location-dot mr-2"></i>Central Park Area</p>
                                    </div>
                                    <span class="text-2xl font-bold dark:text-white">$475,000</span>
                                </div>
                                <div class="grid grid-cols-3 gap-4 mb-6">
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-bed mr-2 text-primary"></i>
                                        <span>2 Beds</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-bath mr-2 text-primary"></i>
                                        <span>2 Baths</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-ruler-combined mr-2 text-primary"></i>
                                        <span>1,100 sq.ft</span>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-full" data-page="property-detail">View Details</button>
                            </div>
                        </div>

                        <!-- Property 3 -->
                        <div class="property-card">
                            <div class="relative">
                                <div class="bg-gray-200 border-2 border-dashed rounded-t-xl w-full h-60"></div>
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <h3 class="text-xl font-bold dark:text-white">Metropolitan Towers</h3>
                                        <p class="text-gray-500 dark:text-gray-400"><i class="fa-solid fa-location-dot mr-2"></i>Financial District</p>
                                    </div>
                                    <span class="text-2xl font-bold dark:text-white">$625,000</span>
                                </div>
                                <div class="grid grid-cols-3 gap-4 mb-6">
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-bed mr-2 text-primary"></i>
                                        <span>3 Beds</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-bath mr-2 text-primary"></i>
                                        <span>3 Baths</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-ruler-combined mr-2 text-primary"></i>
                                        <span>1,450 sq.ft</span>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-full" data-page="property-detail">View Details</button>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-10">
                        <button class="btn btn-primary" data-page="properties">View All Properties</button>
                    </div>
                </div>
            </section>

            <!-- Services -->
            <section class="py-20">
                <div class="container mx-auto px-4">
                    <h2 class="section-title text-center">Our Services</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-md border border-gray-100 dark:border-slate-700">
                            <div class="w-16 h-16 bg-blue-100 dark:bg-slate-700 rounded-full flex items-center justify-center mb-6">
                                <i class="fa-solid fa-house text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3 dark:text-white">Property Sales</h3>
                            <p class="text-gray-600 dark:text-gray-400">Find your perfect apartment with our extensive listings and expert guidance.</p>
                        </div>
                        
                        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-md border border-gray-100 dark:border-slate-700">
                            <div class="w-16 h-16 bg-green-100 dark:bg-slate-700 rounded-full flex items-center justify-center mb-6">
                                <i class="fa-solid fa-calendar-check text-2xl text-secondary"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3 dark:text-white">Reservations</h3>
                            <p class="text-gray-600 dark:text-gray-400">Reserve your dream apartment with our easy online booking system.</p>
                        </div>
                        
                        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-md border border-gray-100 dark:border-slate-700">
                            <div class="w-16 h-16 bg-blue-100 dark:bg-slate-700 rounded-full flex items-center justify-center mb-6">
                                <i class="fa-solid fa-vr-cardboard text-2xl text-primary"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3 dark:text-white">Virtual Tours</h3>
                            <p class="text-gray-600 dark:text-gray-400">Explore properties from the comfort of your home with our 3D virtual tours.</p>
                        </div>
                        
                        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-md border border-gray-100 dark:border-slate-700">
                            <div class="w-16 h-16 bg-green-100 dark:bg-slate-700 rounded-full flex items-center justify-center mb-6">
                                <i class="fa-solid fa-file-contract text-2xl text-secondary"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-3 dark:text-white">Legal Support</h3>
                            <p class="text-gray-600 dark:text-gray-400">Our legal team ensures a smooth and secure transaction process.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonials -->
            <section class="py-20 bg-gray-100 dark:bg-slate-800">
                <div class="container mx-auto px-4">
                    <h2 class="section-title text-center">What Our Clients Say</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Testimonial 1 -->
                        <div class="bg-white dark:bg-slate-800 p-8 rounded-xl shadow-md border border-gray-100 dark:border-slate-700">
                            <div class="flex items-center mb-6">
                                <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16"></div>
                                <div class="ml-4">
                                    <h4 class="font-bold dark:text-white">Michael Johnson</h4>
                                    <p class="text-gray-500 dark:text-gray-400">New Homeowner</p>
                                </div>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">"The team at LuxuryEstates made my home buying experience seamless. Their attention to detail and personalized service exceeded my expectations."</p>
                            <div class="flex text-yellow-400">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        
                        <!-- Testimonial 2 -->
                        <div class="bg-white dark:bg-slate-800 p-8 rounded-xl shadow-md border border-gray-100 dark:border-slate-700">
                            <div class="flex items-center mb-6">
                                <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16"></div>
                                <div class="ml-4">
                                    <h4 class="font-bold dark:text-white">Sarah Williams</h4>
                                    <p class="text-gray-500 dark:text-gray-400">Investor</p>
                                </div>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">"I've purchased multiple properties through LuxuryEstates. Their market knowledge and negotiation skills have helped me build a profitable portfolio."</p>
                            <div class="flex text-yellow-400">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>
                        
                        <!-- Testimonial 3 -->
                        <div class="bg-white dark:bg-slate-800 p-8 rounded-xl shadow-md border border-gray-100 dark:border-slate-700">
                            <div class="flex items-center mb-6">
                                <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16"></div>
                                <div class="ml-4">
                                    <h4 class="font-bold dark:text-white">Robert Chen</h4>
                                    <p class="text-gray-500 dark:text-gray-400">First-time Buyer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">"As a first-time buyer, I was nervous about the process. The team guided me through every step and found me the perfect apartment within my budget."</p>
                            <div class="flex text-yellow-400">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
</x-layout>