<?php require APPROOT . '/views/layouts/header.php'; ?>

<!-- Breadcrumb -->
<div class="bg-gray-100 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 font-serif">Contact Us</h1>
        <nav class="text-sm font-medium text-gray-500 mt-2">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="<?php echo URLROOT; ?>" class="hover:text-primary transition-colors">Home</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li>
                    <span class="text-gray-900">Contact</span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

            <!-- Contact Info -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6 font-serif">Get in Touch</h2>
                <div class="space-y-8">
                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary flex-shrink-0 mt-1">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-gray-900">Address</h4>
                            <p class="text-gray-600 mt-1">198 West 21th Street, Suite 721 New York NY 10016</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary flex-shrink-0 mt-1">
                            <i class="fas fa-phone-alt text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-gray-900">Phone</h4>
                            <p class="text-gray-600 mt-1"><a href="tel://1234567920" class="hover:text-primary transition-colors">+ 1235 2355 98</a></p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary flex-shrink-0 mt-1">
                            <i class="fas fa-envelope text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-gray-900">Email</h4>
                            <p class="text-gray-600 mt-1"><a href="mailto:info@yoursite.com" class="hover:text-primary transition-colors">info@yoursite.com</a></p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 h-64 bg-gray-200 rounded-xl overflow-hidden shadow-inner">
                    <!-- Placeholder for Map -->
                    <div class="w-full h-full flex items-center justify-center text-gray-400 bg-gray-100">
                        <div class="text-center">
                            <i class="fas fa-map-marked-alt text-4xl mb-2"></i>
                            <p>Map Integration Placeholder</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-gray-50 p-8 rounded-2xl shadow-sm border border-gray-200">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 font-serif">Send us a Message</h3>
                <form action="#" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                            <input type="text" id="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="John Doe">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Your Email</label>
                            <input type="email" id="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="john@example.com">
                        </div>
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                        <input type="text" id="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Reservation Inquiry">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea id="message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="How can we help you?"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-primary text-white font-bold py-4 rounded-lg hover:bg-emerald-700 transition-colors shadow-lg">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require APPROOT . '/views/layouts/footer.php'; ?>