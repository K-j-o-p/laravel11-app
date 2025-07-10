<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Estates | Premium Apartments</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        secondary: '#10b981',
                        dark: '#1e293b',
                        light: '#f8fafc'
                    },
                    fontFamily: {
                        'sans': ['Inter', 'sans-serif']
                    },
                    transitionProperty: {
                        'width': 'width'
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .transition-all {
                transition-property: all;
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                transition-duration: 300ms;
            }
            .property-card {
                @apply bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden border border-gray-200 dark:border-slate-700;
            }
            .btn {
                @apply px-6 py-3 rounded-lg font-medium transition-all hover:opacity-90;
            }
            .btn-primary {
                @apply bg-primary text-white;
            }
            .btn-secondary {
                @apply bg-secondary text-white;
            }
            .section-title {
                @apply text-3xl md:text-4xl font-bold mb-8 dark:text-white;
            }
            .page {
                @apply min-h-screen;
            }
            .page:not(.active) {
                @apply hidden;
            }
            .tab-active {
                @apply border-b-2 border-primary font-bold text-primary dark:text-primary;
            }
        }
    </style>
</head>
<body class="font-sans bg-gray-50 dark:bg-slate-900 text-gray-700 dark:text-gray-300">
    <!-- Header/Navigation -->
    <header class="sticky top-0 z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-gray-200 dark:border-slate-800">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-bold mr-3">LE</div>
                <h1 class="text-2xl font-bold dark:text-white">Luxury<span class="text-primary">Estates</span></h1>
            </div>
            
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-10">
                <a href="#" data-page="home" class="nav-link font-medium hover:text-primary dark:hover:text-primary transition-colors">Home</a>
                <a href="#properties" data-page="properties" class="nav-link font-medium hover:text-primary dark:hover:text-primary transition-colors">Properties</a>
                <a href="#services" data-page="services" class="nav-link font-medium hover:text-primary dark:hover:text-primary transition-colors">Services</a>
                <a href="#reservation" data-page="reservation" class="nav-link font-medium hover:text-primary dark:hover:text-primary transition-colors">Reservation</a>
                <a href="#contact" data-page="contact" class="nav-link font-medium hover:text-primary dark:hover:text-primary transition-colors">Contact</a>
            </nav>
            
            <div class="flex items-center space-x-4">
                <button id="theme-toggle" class="w-10 h-10 rounded-full bg-gray-100 dark:bg-slate-800 flex items-center justify-center hover:bg-gray-200 dark:hover:bg-slate-700">
                    <i class="fa-solid fa-moon dark:hidden"></i>
                    <i class="fa-solid fa-sun hidden dark:block"></i>
                </button>
                <button class="btn btn-primary hidden md:block" data-page="reservation">Book a Tour</button>
                <button id="mobile-menu" class="md:hidden text-gray-600 dark:text-gray-300">
                    <i class="fa-solid fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-nav" class="hidden md:hidden absolute top-full left-0 w-full bg-white dark:bg-slate-900 shadow-lg py-4 px-4">
            <div class="flex flex-col space-y-4">
                <a href="#" data-page="home" class="nav-link font-medium hover:text-primary dark:hover:text-primary transition-colors">Home</a>
                <a href="#properties" data-page="properties" class="nav-link font-medium hover:text-primary dark:hover:text-primary transition-colors">Properties</a>
                <a href="#services" data-page="services" class="nav-link font-medium hover:text-primary dark:hover:text-primary transition-colors">Services</a>
                <a href="#reservation" data-page="reservation" class="nav-link font-medium hover:text-primary dark:hover:text-primary transition-colors">Reservation</a>
                <a href="#contact" data-page="contact" class="nav-link font-medium hover:text-primary dark:hover:text-primary transition-colors">Contact</a>
                <button class="btn btn-primary w-full" data-page="reservation">Book a Tour</button>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <main id="page-content">
        <!-- Home Page -->
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

        <!-- Properties Page -->
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
    </main>

    <!-- Footer -->
    <footer id="footer" class="bg-slate-900 text-white pt-20 pb-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-16">
                <div>
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-bold mr-3">LE</div>
                        <h1 class="text-2xl font-bold">Luxury<span class="text-primary">Estates</span></h1>
                    </div>
                    <p class="text-gray-400 mb-6">Premium apartment sales and reservations with exceptional service and luxury properties.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary transition-colors">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary transition-colors">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary transition-colors">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary transition-colors">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-6">Quick Links</h3>
                    <ul class="space-y-4 text-gray-400">
                        <li><a href="#" class="nav-link hover:text-primary transition-colors" data-page="home">Home</a></li>
                        <li><a href="#" class="nav-link hover:text-primary transition-colors" data-page="properties">Properties</a></li>
                        <li><a href="#" class="nav-link hover:text-primary transition-colors" data-page="services">Services</a></li>
                        <li><a href="#" class="nav-link hover:text-primary transition-colors" data-page="reservation">Reservation</a></li>
                        <li><a href="#" class="nav-link hover:text-primary transition-colors" data-page="contact">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-6">Contact Us</h3>
                    <ul class="space-y-4 text-gray-400">
                        <li class="flex items-start">
                            <i class="fa-solid fa-location-dot mt-1 mr-3 text-primary"></i>
                            <span>123 Luxury Avenue, Downtown, NY 10001</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-phone mr-3 text-primary"></i>
                            <span>+1 (555) 123-4567</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-envelope mr-3 text-primary"></i>
                            <span>info@luxuryestates.com</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-clock mr-3 text-primary"></i>
                            <span>Mon-Fri: 9AM - 6PM</span>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold mb-6">Newsletter</h3>
                    <p class="text-gray-400 mb-4">Subscribe to our newsletter for property updates and exclusive offers.</p>
                    <form class="flex">
                        <input type="email" placeholder="Your email" class="px-4 py-3 w-full rounded-l-lg focus:outline-none text-slate-900">
                        <button class="bg-primary px-4 rounded-r-lg">
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="pt-10 border-t border-slate-800 text-center text-gray-500">
                <p>&copy; 2023 LuxuryEstates. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Dark mode toggle
        const themeToggle = document.getElementById('theme-toggle');
        const htmlElement = document.documentElement;
        
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu');
        const mobileNav = document.getElementById('mobile-nav');
        
        // Page navigation
        const pages = document.querySelectorAll('.page');
        const navLinks = document.querySelectorAll('.nav-link');
        
        // Check for saved theme preference
        if (localStorage.getItem('theme') === 'dark') {
            htmlElement.classList.add('dark');
        }
        
        // Toggle dark mode
        themeToggle.addEventListener('click', () => {
            htmlElement.classList.toggle('dark');
            
            // Save preference
            if (htmlElement.classList.contains('dark')) {
                localStorage.setItem('theme', 'dark');
            } else {
                localStorage.setItem('theme', 'light');
            }
        });
        
        // Toggle mobile menu
        mobileMenuButton.addEventListener('click', () => {
            mobileNav.classList.toggle('hidden');
        });
        
        // Page navigation
        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const targetPage = link.getAttribute('data-page');
                
                // Hide all pages
                pages.forEach(page => {
                    page.classList.remove('active');
                    page.classList.add('hidden');
                });
                
                // Show target page
                document.getElementById(`${targetPage}-page`).classList.remove('hidden');
                document.getElementById(`${targetPage}-page`).classList.add('active');
                
                // Close mobile menu if open
                mobileNav.classList.add('hidden');
                
                // Scroll to top
                window.scrollTo(0, 0);
            });
        });
        
        // Handle buttons with data-page attribute
        document.querySelectorAll('[data-page]').forEach(button => {
            button.addEventListener('click', () => {
                const targetPage = button.getAttribute('data-page');
                
                // Hide all pages
                pages.forEach(page => {
                    page.classList.remove('active');
                    page.classList.add('hidden');
                });
                
                // Show target page
                document.getElementById(`${targetPage}-page`).classList.remove('hidden');
                document.getElementById(`${targetPage}-page`).classList.add('active');
                
                // Close mobile menu if open
                mobileNav.classList.add('hidden');
                
                // Scroll to top
                window.scrollTo(0, 0);
            });
        });
    </script>
</body>
</html>