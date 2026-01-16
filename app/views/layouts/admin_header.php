<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Panel - <?php echo APPNAME; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#10B981', // Emerald 500
                        secondary: '#3B82F6', // Blue 500
                        dark: '#1F2937', // Gray 800
                    }
                }
            }
        }
    </script>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800 antialiased">

    <?php if (isset($_SESSION['admin_name'])) : ?>
        <div class="flex h-screen overflow-hidden">
            <!-- Sidebar -->
            <aside class="w-64 bg-slate-900 text-white flex-shrink-0 hidden md:flex flex-col transition-all duration-300">
                <div class="h-16 flex items-center justify-center border-b border-slate-700">
                    <a href="<?php echo URLROOT; ?>/admin/index" class="text-2xl font-bold tracking-wider text-emerald-400">COFFEEFY</a>
                </div>

                <div class="flex-1 overflow-y-auto py-4">
                    <nav class="space-y-1 px-2">
                        <a href="<?php echo URLROOT; ?>/admin/index" class="group flex items-center px-4 py-3 text-sm font-medium rounded-md hover:bg-slate-800 <?php echo (!isset($data['active_tab']) || $data['active_tab'] == 'dashboard') ? 'bg-slate-800 text-white' : 'text-slate-300'; ?>">
                            <i class="fas fa-home w-6 mr-3 text-lg"></i>
                            Dashboard
                        </a>
                        <a href="<?php echo URLROOT; ?>/admin/products" class="group flex items-center px-4 py-3 text-sm font-medium rounded-md hover:bg-slate-800 <?php echo (isset($data['active_tab']) && $data['active_tab'] == 'products') ? 'bg-slate-800 text-white' : 'text-slate-300'; ?>">
                            <i class="fas fa-coffee w-6 mr-3 text-lg"></i>
                            Products
                        </a>
                        <a href="<?php echo URLROOT; ?>/admin/orders" class="group flex items-center px-4 py-3 text-sm font-medium rounded-md hover:bg-slate-800 <?php echo (isset($data['active_tab']) && $data['active_tab'] == 'orders') ? 'bg-slate-800 text-white' : 'text-slate-300'; ?>">
                            <i class="fas fa-shopping-cart w-6 mr-3 text-lg"></i>
                            Orders
                        </a>
                        <a href="<?php echo URLROOT; ?>/admin/bookings" class="group flex items-center px-4 py-3 text-sm font-medium rounded-md hover:bg-slate-800 <?php echo (isset($data['active_tab']) && $data['active_tab'] == 'bookings') ? 'bg-slate-800 text-white' : 'text-slate-300'; ?>">
                            <i class="fas fa-calendar-alt w-6 mr-3 text-lg"></i>
                            Bookings
                        </a>
                        <a href="<?php echo URLROOT; ?>/admin/admins" class="group flex items-center px-4 py-3 text-sm font-medium rounded-md hover:bg-slate-800 <?php echo (isset($data['active_tab']) && $data['active_tab'] == 'admins') ? 'bg-slate-800 text-white' : 'text-slate-300'; ?>">
                            <i class="fas fa-users-cog w-6 mr-3 text-lg"></i>
                            Admins
                        </a>
                    </nav>
                </div>

                <div class="p-4 border-t border-slate-700 bg-slate-900">
                    <div class="flex flex-col space-y-4">
                        <div class="flex items-center">
                            <div class="h-10 w-10 rounded-full bg-emerald-500 flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                <?php echo strtoupper(substr($_SESSION['admin_name'], 0, 1)); ?>
                            </div>
                            <div class="ml-3 overflow-hidden">
                                <p class="text-sm font-medium text-white truncate"><?php echo $_SESSION['admin_name']; ?></p>
                                <p class="text-xs text-emerald-400 font-semibold uppercase tracking-wider">Online</p>
                            </div>
                        </div>
                        <a href="<?php echo URLROOT; ?>/admin/logout" class="group flex items-center justify-center px-4 py-2 border border-slate-600 rounded-lg shadow-sm text-sm font-medium text-slate-300 bg-slate-800 hover:bg-red-600 hover:text-white hover:border-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-all duration-200">
                            <i class="fas fa-sign-out-alt mr-2 group-hover:animate-pulse"></i> Logout
                        </a>
                    </div>
                </div>
            </aside>

            <!-- Main Content Wrapper -->
            <div class="flex-1 flex flex-col h-screen overflow-hidden">
                <!-- Top Navbar (Mobile only mostly) -->
                <header class="bg-white shadow-sm border-b border-gray-200 h-16 flex items-center justify-between px-6 md:hidden">
                    <div class="flex items-center">
                        <span class="text-xl font-bold text-gray-800">Coffeefy Admin</span>
                    </div>
                    <button class="text-gray-500 hover:text-gray-700 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </header>

                <!-- Scrollable Content -->
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                <?php else : ?>
                    <!-- Login Page Layout Container (Full Centered) -->
                    <div class="min-h-screen flex items-center justify-center bg-gray-900 bg-opacity-90" style="background-image: url('https://images.unsplash.com/photo-1497935586351-b67a49e012bf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80'); background-size: cover; background-blend-mode: overlay;">
                    <?php endif; ?>