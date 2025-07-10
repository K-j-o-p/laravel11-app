<x-layout>
    <section id="properties-page" class="page">
            <div class="container mx-auto px-4 py-16">
                <div class="flex flex-col md:flex-row justify-between items-center mb-12">
                    <div>
                        <h1 class="section-title">Available Properties</h1>
                        <p class="text-gray-600 dark:text-gray-400">Find your perfect apartment from our curated selection</p>
                    </div>
                    <div class="mt-4 md:mt-0">
                        <div class="flex space-x-2">
                            <button class="px-4 py-2 bg-white dark:bg-slate-800 rounded-lg border border-gray-300 dark:border-slate-700">Filters <i class="ml-2 fa-solid fa-filter"></i></button>
                            <button class="px-4 py-2 bg-primary text-white rounded-lg">Sort By <i class="ml-2 fa-solid fa-arrow-down-wide-short"></i></button>
                        </div>
                    </div>
                </div>
                
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

                    <!-- Property 4 -->
                    <div class="property-card">
                        <div class="relative">
                            <div class="bg-gray-200 border-2 border-dashed rounded-t-xl w-full h-60"></div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold dark:text-white">Riverside Lofts</h3>
                                    <p class="text-gray-500 dark:text-gray-400"><i class="fa-solid fa-location-dot mr-2"></i>River North</p>
                                </div>
                                <span class="text-2xl font-bold dark:text-white">$695,000</span>
                            </div>
                            <div class="grid grid-cols-3 gap-4 mb-6">
                                <div class="flex items-center">
                                    <i class="fa-solid fa-bed mr-2 text-primary"></i>
                                    <span>4 Beds</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fa-solid fa-bath mr-2 text-primary"></i>
                                    <span>3 Baths</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fa-solid fa-ruler-combined mr-2 text-primary"></i>
                                    <span>1,850 sq.ft</span>
                                </div>
                            </div>
                            <button class="btn btn-primary w-full" data-page="property-detail">View Details</button>
                        </div>
                    </div>

                    <!-- Property 5 -->
                    <div class="property-card">
                        <div class="relative">
                            <div class="bg-gray-200 border-2 border-dashed rounded-t-xl w-full h-60"></div>
                            <div class="absolute top-4 right-4 bg-secondary text-white px-3 py-1 rounded-full">Popular</div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold dark:text-white">Garden Heights</h3>
                                    <p class="text-gray-500 dark:text-gray-400"><i class="fa-solid fa-location-dot mr-2"></i>Botanical Area</p>
                                </div>
                                <span class="text-2xl font-bold dark:text-white">$550,000</span>
                            </div>
                            <div class="grid grid-cols-3 gap-4 mb-6">
                                <div class="flex items-center">
                                    <i class="fa-solid fa-bed mr-2 text-primary"></i>
                                    <span>3 Beds</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fa-solid fa-bath mr-2 text-primary"></i>
                                    <span>2.5 Baths</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fa-solid fa-ruler-combined mr-2 text-primary"></i>
                                    <span>1,350 sq.ft</span>
                                </div>
                            </div>
                            <button class="btn btn-primary w-full" data-page="property-detail">View Details</button>
                        </div>
                    </div>

                    <!-- Property 6 -->
                    <div class="property-card">
                        <div class="relative">
                            <div class="bg-gray-200 border-2 border-dashed rounded-t-xl w-full h-60"></div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold dark:text-white">Urban Oasis</h3>
                                    <p class="text-gray-500 dark:text-gray-400"><i class="fa-solid fa-location-dot mr-2"></i>City Center</p>
                                </div>
                                <span class="text-2xl font-bold dark:text-white">$425,000</span>
                            </div>
                            <div class="grid grid-cols-3 gap-4 mb-6">
                                <div class="flex items-center">
                                    <i class="fa-solid fa-bed mr-2 text-primary"></i>
                                    <span>1 Bed</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fa-solid fa-bath mr-2 text-primary"></i>
                                    <span>1 Bath</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fa-solid fa-ruler-combined mr-2 text-primary"></i>
                                    <span>750 sq.ft</span>
                                </div>
                            </div>
                            <button class="btn btn-primary w-full" data-page="property-detail">View Details</button>
                        </div>
                    </div>
                </div>
                
                <div class="mt-12 flex justify-center">
                    <div class="flex space-x-2">
                        <button class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center">1</button>
                        <button class="w-10 h-10 rounded-full bg-gray-200 dark:bg-slate-700 flex items-center justify-center">2</button>
                        <button class="w-10 h-10 rounded-full bg-gray-200 dark:bg-slate-700 flex items-center justify-center">3</button>
                        <button class="w-10 h-10 rounded-full bg-gray-200 dark:bg-slate-700 flex items-center justify-center">...</button>
                        <button class="w-10 h-10 rounded-full bg-gray-200 dark:bg-slate-700 flex items-center justify-center">10</button>
                    </div>
                </div>
            </div>
        </section>
</x-layout>