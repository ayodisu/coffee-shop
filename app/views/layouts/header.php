<?php
if (session_status() === PHP_SESSION_NONE) session_start();
if (!defined('IMAGEPRODUCTS')) {
    define("IMAGEPRODUCTS", "http://localhost/coffeefy/admin-panel/products-admins/images");
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <title><?php echo APPNAME; ?> - Premium Coffee Experience</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon (Coffee Cup) -->
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/751/751621.png" type="image/png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#059669', // Emerald 600
                        secondary: '#1F2937', // Gray 800
                        accent: '#D97706', // Amber 600
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom animations if needed */
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 font-sans antialiased flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white/90 backdrop-blur-md fixed w-full z-50 transition-all duration-300 shadow-sm" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="<?php echo URLROOT; ?>" class="flex-shrink-0 flex items-center gap-2">
                        <i class="fas fa-coffee text-primary text-3xl"></i>
                        <span class="font-serif font-bold text-2xl text-gray-900 tracking-tight">Coffeefy</span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="<?php echo URLROOT; ?>/home" class="text-gray-600 hover:text-primary font-medium transition-colors">Home</a>
                    <a href="<?php echo URLROOT; ?>/home/menu" class="text-gray-600 hover:text-primary font-medium transition-colors">Menu</a>
                    <a href="<?php echo URLROOT; ?>/home/services" class="text-gray-600 hover:text-primary font-medium transition-colors">Services</a>
                    <a href="<?php echo URLROOT; ?>/home/about" class="text-gray-600 hover:text-primary font-medium transition-colors">About</a>
                    <a href="<?php echo URLROOT; ?>/home/contact" class="text-gray-600 hover:text-primary font-medium transition-colors">Contact</a>
                </div>

                <!-- Right Side Actions -->
                <div class="hidden md:flex items-center space-x-6">
                    <?php if (isset($_SESSION['username'])) : ?>
                        <a href="<?php echo URLROOT; ?>/product/cart" class="relative text-gray-600 hover:text-primary transition-colors group">
                            <i class="fas fa-shopping-cart text-xl"></i>
                            <!-- Dynamic Cart Count could go here -->
                        </a>

                        <div class="relative group">
                            <button class="flex items-center gap-2 text-gray-700 hover:text-primary focus:outline-none">
                                <span class="font-medium"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                                <i class="fas fa-chevron-down text-xs"></i>
                            </button>
                            <!-- Dropdown -->
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top-right ring-1 ring-black ring-opacity-5">
                                <a href="<?php echo URLROOT; ?>/user/bookings" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary">My Bookings</a>
                                <a href="<?php echo URLROOT; ?>/user/orders" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary">My Orders</a>
                                <div class="border-t border-gray-100 my-1"></div>
                                <a href="<?php echo URLROOT; ?>/auth/logout" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Sign Out</a>
                            </div>
                        </div>
                    <?php else : ?>
                        <a href="<?php echo URLROOT; ?>/auth/login" class="text-gray-600 hover:text-primary font-medium">Log In</a>
                        <a href="<?php echo URLROOT; ?>/auth/register" class="bg-primary text-white px-5 py-2.5 rounded-full font-medium shadow-md hover:bg-emerald-700 hover:shadow-lg transition-all transform hover:-translate-y-0.5">Sign Up</a>
                    <?php endif; ?>
                </div>

                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button type="button" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="text-gray-600 hover:text-primary focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="hidden md:hidden bg-white border-t border-gray-100" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="<?php echo URLROOT; ?>/home" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">Home</a>
                <a href="<?php echo URLROOT; ?>/home/menu" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">Menu</a>
                <a href="<?php echo URLROOT; ?>/home/services" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">Services</a>

                <?php if (isset($_SESSION['username'])) : ?>
                    <a href="<?php echo URLROOT; ?>/products/cart" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">Cart</a>
                    <a href="<?php echo URLROOT; ?>/users/bookings" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">My Bookings</a>
                    <a href="<?php echo URLROOT; ?>/auth/logout" class="block px-3 py-2 rounded-md text-base font-medium text-red-600 hover:bg-red-50">Sign Out</a>
                <?php else : ?>
                    <div class="mt-4 flex flex-col gap-2 p-3">
                        <a href="<?php echo URLROOT; ?>/auth/login" class="w-full text-center py-2 border border-gray-300 rounded-lg text-gray-700 font-medium">Log In</a>
                        <a href="<?php echo URLROOT; ?>/auth/register" class="w-full text-center py-2 bg-primary text-white rounded-lg font-medium shadow">Sign Up</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- Spacer for fixed navbar -->
    <div class="h-20"></div>

    <!-- Flash Message Notification (Tailwind Toast) -->
    <?php if (isset($_SESSION['flash_message'])) : ?>
        <div id="flash-toast" class="fixed top-24 right-5 z-50 bg-white border-l-4 <?php echo $_SESSION['flash_class'] == 'alert-success' ? 'border-emerald-500' : 'border-red-500'; ?> shadow-xl rounded-lg p-4 flex items-center gap-3 animate-slide-in-right max-w-sm">
            <div class="<?php echo $_SESSION['flash_class'] == 'alert-success' ? 'text-emerald-500' : 'text-red-500'; ?>">
                <i class="fas <?php echo $_SESSION['flash_class'] == 'alert-success' ? 'fa-check-circle' : 'fa-exclamation-circle'; ?> text-2xl"></i>
            </div>
            <div>
                <h4 class="font-bold text-gray-800"><?php echo $_SESSION['flash_class'] == 'alert-success' ? 'Success' : 'Error'; ?></h4>
                <p class="text-sm text-gray-600"><?php echo $_SESSION['flash_message']; ?></p>
            </div>
            <button onclick="document.getElementById('flash-toast').remove()" class="ml-auto text-gray-400 hover:text-gray-600">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <?php
        // We handle clearing in the helper, but for now let's assume session_helper clears it on read or we clear it here via JS timeout
        // Ideally backend clears it.
        ?>
        <script>
            setTimeout(() => {
                const toast = document.getElementById('flash-toast');
                if (toast) {
                    toast.style.opacity = '0';
                    setTimeout(() => toast.remove(), 500);
                }
            }, 4000);
        </script>
        <?php
        unset($_SESSION['flash_message']);
        unset($_SESSION['flash_class']);
        ?>
    <?php endif; ?>

    <!-- Main Content Start -->
    <main class="flex-grow">