    </main>
    <!-- Main Content End -->

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Brand Info -->
                <div class="space-y-4">
                    <a href="#" class="flex items-center gap-2">
                        <i class="fas fa-coffee text-primary text-2xl"></i>
                        <span class="font-serif font-bold text-2xl tracking-tight">Coffeefy</span>
                    </a>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Crafting the perfect cup since 2010. We source the finest beans from sustainable farms to bring you an unforgettable coffee experience.
                    </p>
                    <div class="flex space-x-4 pt-2">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-primary transition-colors text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-primary transition-colors text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-primary transition-colors text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <!-- Open Hours -->
                <div>
                    <h3 class="text-lg font-bold mb-6 font-serif tracking-wide border-b border-gray-700 pb-2 inline-block">Opening Hours</h3>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li class="flex justify-between">
                            <span>Monday - Friday</span>
                            <span class="text-white">8:00 AM - 9:00 PM</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Saturday</span>
                            <span class="text-white">10:00 AM - 8:00 PM</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Sunday</span>
                            <span class="text-white">Closed</span>
                        </li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-bold mb-6 font-serif tracking-wide border-b border-gray-700 pb-2 inline-block">Quick Links</h3>
                    <ul class="space-y-3 text-sm">
                        <li><a href="<?php echo URLROOT; ?>/home/menu" class="text-gray-400 hover:text-primary transition-colors">Our Menu</a></li>
                        <li><a href="<?php echo URLROOT; ?>/home/services" class="text-gray-400 hover:text-primary transition-colors">Services</a></li>
                        <li><a href="<?php echo URLROOT; ?>/home/about" class="text-gray-400 hover:text-primary transition-colors">About Story</a></li>
                        <li><a href="<?php echo URLROOT; ?>/home/contact" class="text-gray-400 hover:text-primary transition-colors">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h3 class="text-lg font-bold mb-6 font-serif tracking-wide border-b border-gray-700 pb-2 inline-block">Newsletter</h3>
                    <p class="text-gray-400 text-sm mb-4">Subscribe to get special offers and coffee updates.</p>
                    <form class="space-y-2">
                        <input type="email" placeholder="Enter your email" class="w-full px-4 py-2.5 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-sm text-white placeholder-gray-500">
                        <button class="w-full bg-primary text-white font-medium py-2.5 rounded-lg hover:bg-emerald-700 transition-colors shadow-lg">Subscribe</button>
                    </form>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
                <p>&copy; <?php echo date('Y'); ?> Coffeefy. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition-colors">Privacy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms</a>
                    <a href="#" class="hover:text-white transition-colors">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    </body>

    </html>