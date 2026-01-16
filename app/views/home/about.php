<?php require APPROOT . '/views/layouts/header.php'; ?>

<!-- Breadcrumb -->
<div class="bg-gray-100 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 font-serif">About Us</h1>
        <nav class="text-sm font-medium text-gray-500 mt-2">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="<?php echo URLROOT; ?>" class="hover:text-primary transition-colors">Home</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li>
                    <span class="text-gray-900">About</span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- Story Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center gap-16">
            <div class="w-full md:w-1/2 relative">
                <div class="rounded-2xl overflow-hidden shadow-2xl">
                    <img src="<?php echo URLROOT; ?>/images/about.jpg" alt="About Us" class="object-cover w-full h-full transform hover:scale-105 transition-transform duration-700">
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <span class="text-primary font-bold uppercase tracking-widest text-sm mb-2 block">Discover</span>
                <h2 class="text-4xl font-bold text-gray-900 mb-6 font-serif">Our Story</h2>
                <p class="text-gray-600 leading-relaxed mb-6 text-lg">
                    On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.
                </p>
                <p class="text-gray-600 leading-relaxed text-lg">
                    But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-gray-900 relative bg-fixed bg-cover" style="background-image: url(<?php echo URLROOT; ?>/images/bg_2.jpg);">
    <div class="absolute inset-0 bg-black/70"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="p-4">
                <div class="text-accent text-4xl mb-2"><i class="fas fa-store"></i></div>
                <strong class="block text-4xl font-bold text-white mb-1">100</strong>
                <span class="text-gray-400 text-sm uppercase tracking-wider">Coffee Branches</span>
            </div>
            <div class="p-4">
                <div class="text-accent text-4xl mb-2"><i class="fas fa-award"></i></div>
                <strong class="block text-4xl font-bold text-white mb-1">85</strong>
                <span class="text-gray-400 text-sm uppercase tracking-wider">Awards Won</span>
            </div>
            <div class="p-4">
                <div class="text-accent text-4xl mb-2"><i class="fas fa-users"></i></div>
                <strong class="block text-4xl font-bold text-white mb-1">10,567</strong>
                <span class="text-gray-400 text-sm uppercase tracking-wider">Happy Customers</span>
            </div>
            <div class="p-4">
                <div class="text-accent text-4xl mb-2"><i class="fas fa-mug-hot"></i></div>
                <strong class="block text-4xl font-bold text-white mb-1">900</strong>
                <span class="text-gray-400 text-sm uppercase tracking-wider">Staff</span>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-20 bg-amber-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-primary font-bold uppercase tracking-widest text-sm">Testimony</span>
            <h2 class="text-4xl font-bold text-gray-900 mt-2 font-serif">Customer Says</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ($data['reviews'] as $review) : ?>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 relative">
                    <div class="absolute -top-4 left-8 bg-primary text-white w-10 h-10 flex items-center justify-center rounded-full text-xl shadow-lg">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="text-gray-600 italic mb-6 pt-4 leading-relaxed">"<?php echo $review->review; ?>."</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-500 font-bold mr-3">
                            <?php echo strtoupper(substr($review->username, 0, 1)); ?>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900"><?php echo $review->username; ?></h4>
                            <span class="text-xs text-gray-400">Customer</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<?php require APPROOT . '/views/layouts/footer.php'; ?>