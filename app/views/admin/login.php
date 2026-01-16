<?php require APPROOT . '/views/layouts/admin_header.php'; ?>

<div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl shadow-2xl p-8 max-w-md w-full border border-gray-600 border-opacity-30">
    <div class="text-center mb-8">
        <h2 class="text-3xl font-extrabold text-white">Admin Login</h2>
        <p class="text-gray-300 mt-2">Enter credentials to access dashboard</p>
    </div>

    <form method="POST" action="<?php echo URLROOT; ?>/admin/login">
        <div class="mb-6">
            <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email Address</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-envelope text-gray-400"></i>
                </div>
                <input type="email" name="email" id="email"
                    class="block w-full pl-10 pr-3 py-2.5 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-200"
                    placeholder="admin@coffeefy.com" required>
            </div>
        </div>

        <div class="mb-8">
            <label for="password" class="block text-sm font-medium text-gray-300 mb-2">Password</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-lock text-gray-400"></i>
                </div>
                <input type="password" name="password" id="password"
                    class="block w-full pl-10 pr-3 py-2.5 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-200"
                    placeholder="••••••••" required>
            </div>
        </div>

        <button type="submit" name="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition duration-200 transform hover:scale-[1.02]">
            Sign In
        </button>
    </form>
</div>

<?php require APPROOT . '/views/layouts/admin_footer.php'; ?>