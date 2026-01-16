<?php require APPROOT . '/views/layouts/header.php'; ?>

<section class="min-h-[calc(100vh-80px)] bg-gray-900 relative flex items-center justify-center py-20 bg-cover bg-center" style="background-image: url('<?php echo URLROOT; ?>/images/bg_2.jpg');">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>

    <div class="relative z-10 w-full max-w-md px-4">
        <!-- Register Card -->
        <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl shadow-2xl p-8 sm:p-10 transform transition-all hover:scale-[1.01] duration-300">

            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg animate-fade-in-down">
                    <i class="fas fa-user-plus text-2xl text-white"></i>
                </div>
                <h1 class="text-3xl font-bold text-white font-serif mb-2">Create Account</h1>
                <p class="text-gray-300 text-sm">Join our community of coffee lovers</p>
            </div>

            <form action="<?php echo URLROOT; ?>/auth/register" method="POST" class="space-y-6">
                <!-- CSRF Token -->
                <?php echo csrf_field(); ?>

                <div>
                    <label for="username" class="block text-sm font-medium text-gray-300 mb-1">Username</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-user text-gray-400"></i>
                        </div>
                        <input type="text" name="username" id="username" class="block w-full pl-10 pr-3 py-3 bg-gray-800/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all sm:text-sm" placeholder="johndoe" required>
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </div>
                        <input type="email" name="email" id="email" class="block w-full pl-10 pr-3 py-3 bg-gray-800/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all sm:text-sm" placeholder="you@example.com" required>
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input type="password" name="password" id="password" class="block w-full pl-10 pr-3 py-3 bg-gray-800/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all sm:text-sm" placeholder="••••••••" required>
                    </div>
                    <p class="mt-2 text-xs text-gray-400">Must be at least 8 characters long.</p>
                </div>

                <button type="submit" name="submit" class="w-full bg-primary text-white font-bold py-3.5 rounded-lg shadow-lg hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transform transition hover:-translate-y-0.5 duration-200">
                    Create Account
                </button>

                <div class="text-center mt-6">
                    <p class="text-sm text-gray-300">
                        Already have an account?
                        <a href="<?php echo URLROOT; ?>/auth/login" class="font-medium text-primary hover:text-emerald-400 transition-colors">Sign in instead</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>

<?php require APPROOT . '/views/layouts/footer.php'; ?>