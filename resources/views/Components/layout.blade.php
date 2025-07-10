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
    <x-navbar>

    </x-navbar>

    <!-- Page Content -->
    <main id="page-content">
        <!-- Home Page -->
        
              {{$slot}}
        <!-- Properties Page -->
        

      

      >
    </main>

    <!-- Footer -->
    <x-footer></x-footer>

    <script>
        // Dark mode toggle
     /*   const themeToggle = document.getElementById('theme-toggle');
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