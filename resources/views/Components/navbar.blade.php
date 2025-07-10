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