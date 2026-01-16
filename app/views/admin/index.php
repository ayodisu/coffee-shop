<?php require APPROOT . '/views/layouts/admin_header.php'; ?>

<div class="mb-8 flex justify-between items-center">
    <div>
        <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
        <p class="text-sm text-gray-500 mt-1">Welcome back, <?php echo $_SESSION['admin_name']; ?></p>
    </div>
    <a href="<?php echo URLROOT; ?>/admin/products" class="inline-flex items-center px-4 py-2 bg-emerald-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-emerald-700 active:bg-emerald-900 focus:outline-none focus:border-emerald-900 focus:ring ring-emerald-300 disabled:opacity-25 transition ease-in-out duration-150">
        <i class="fas fa-plus mr-2"></i> New Product
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Products Card -->
    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-emerald-500 hover:shadow-lg transition-shadow duration-300">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-emerald-100 text-emerald-600 mr-4">
                <i class="fas fa-coffee text-2xl"></i>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Products</p>
                <h4 class="text-2xl font-bold text-gray-800"><?php echo $data['counts']->products; ?></h4>
            </div>
        </div>
    </div>

    <!-- Orders Card -->
    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-500 hover:shadow-lg transition-shadow duration-300">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
                <i class="fas fa-shopping-cart text-2xl"></i>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Orders</p>
                <h4 class="text-2xl font-bold text-gray-800"><?php echo $data['counts']->orders; ?></h4>
            </div>
        </div>
    </div>

    <!-- Bookings Card -->
    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-purple-500 hover:shadow-lg transition-shadow duration-300">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-purple-100 text-purple-600 mr-4">
                <i class="fas fa-calendar-alt text-2xl"></i>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Bookings</p>
                <h4 class="text-2xl font-bold text-gray-800"><?php echo $data['counts']->bookings; ?></h4>
            </div>
        </div>
    </div>

    <!-- Admins Card -->
    <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-orange-500 hover:shadow-lg transition-shadow duration-300">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-orange-100 text-orange-600 mr-4">
                <i class="fas fa-users-cog text-2xl"></i>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Admins</p>
                <h4 class="text-2xl font-bold text-gray-800"><?php echo $data['counts']->admins; ?></h4>
            </div>
        </div>
    </div>
</div>

<!-- Recent Activity / Quick Actions Section (Optional placeholder) -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <div class="bg-white rounded-xl shadow-sm p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4">Quick Shortcuts</h3>
        <div class="grid grid-cols-2 gap-4">
            <a href="<?php echo URLROOT; ?>/admin/products" class="p-4 bg-gray-50 rounded-lg hover:bg-gray-100 text-center transition">
                <div class="text-emerald-500 mb-2"><i class="fas fa-list text-xl"></i></div>
                <div class="font-medium text-gray-700">Manage Products</div>
            </a>
            <a href="<?php echo URLROOT; ?>/admin/orders" class="p-4 bg-gray-50 rounded-lg hover:bg-gray-100 text-center transition">
                <div class="text-blue-500 mb-2"><i class="fas fa-file-invoice text-xl"></i></div>
                <div class="font-medium text-gray-700">View Orders</div>
            </a>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/layouts/admin_footer.php'; ?>