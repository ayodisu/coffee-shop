<?php require APPROOT . '/views/layouts/header.php'; ?>

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center bg-gray-900 overflow-hidden">
    <!-- Background Gradient/Image -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo URLROOT; ?>/images/bg_1.jpg" alt="Coffee Background" class="w-full h-full object-cover opacity-60">
        <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-gray-900"></div>
    </div>

    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto animate-fade-in-up">
        <span class="block text-accent font-serif text-xl md:text-2xl mb-4 tracking-wider italic">Welcome to Coffeefy</span>
        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight font-serif">
            The Best Coffee <br> <span class="text-primary">Testing Experience</span>
        </h1>
        <p class="text-gray-300 text-lg md:text-xl mb-10 max-w-2xl mx-auto leading-relaxed">
            A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?php echo URLROOT; ?>/home/menu" class="bg-primary text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-emerald-700 transition-all transform hover:scale-105 shadow-lg shadow-emerald-500/30">Order Now</a>
            <a href="<?php echo URLROOT; ?>/home/menu" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-gray-900 transition-all">View Menu</a>
        </div>
    </div>
</section>

<!-- Info Bar -->
<section class="bg-gray-800 text-white py-10 relative z-20 -mt-20 mx-4 md:mx-auto max-w-6xl rounded-xl shadow-2xl">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-8">
        <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0 text-primary">
                <i class="fas fa-phone-alt text-xl"></i>
            </div>
            <div>
                <h3 class="font-bold text-lg mb-1">000 (123) 456 7890</h3>
                <p class="text-gray-400 text-sm">A small river named Duden flows by their place and supplies.</p>
            </div>
        </div>
        <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0 text-primary">
                <i class="fas fa-map-marker-alt text-xl"></i>
            </div>
            <div>
                <h3 class="font-bold text-lg mb-1">198 West 21th Street</h3>
                <p class="text-gray-400 text-sm">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
        </div>
        <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0 text-primary">
                <i class="fas fa-clock text-xl"></i>
            </div>
            <div>
                <h3 class="font-bold text-lg mb-1">Open Monday-Friday</h3>
                <p class="text-gray-400 text-sm">8:00am - 9:00pm</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-20 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center gap-16">
            <div class="w-full md:w-1/2 relative">
                <div class="aspect-w-4 aspect-h-3 rounded-2xl overflow-hidden shadow-2xl">
                    <img src="<?php echo URLROOT; ?>/images/about.jpg" alt="About Us" class="object-cover w-full h-full transform hover:scale-105 transition-transform duration-700">
                </div>
                <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-accent rounded-full opacity-20 hidden md:block"></div>
                <div class="absolute -top-10 -left-10 w-24 h-24 bg-primary rounded-full opacity-20 hidden md:block"></div>
            </div>
            <div class="w-full md:w-1/2">
                <span class="text-primary font-bold uppercase tracking-widest text-sm mb-2 block">Discover</span>
                <h2 class="text-4xl font-bold text-gray-900 mb-6 font-serif">Our Story</h2>
                <p class="text-gray-600 leading-relaxed mb-6 text-lg">
                    On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.
                </p>
                <a href="<?php echo URLROOT; ?>/home/about" class="text-primary font-semibold hover:text-emerald-700 border-b-2 border-primary pb-1 inline-block transition-colors">Learn More About Us <i class="fas fa-arrow-right ml-2 text-sm"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-amber-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 text-center hover:shadow-xl transition-shadow duration-300">
                <div class="w-20 h-20 mx-auto bg-gray-900 rounded-full flex items-center justify-center text-white mb-6">
                    <i class="fas fa-clipboard-list text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Easy to Order</h3>
                <p class="text-gray-600">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
            <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 text-center hover:shadow-xl transition-shadow duration-300 transform md:-translate-y-4">
                <div class="w-20 h-20 mx-auto bg-primary rounded-full flex items-center justify-center text-white mb-6">
                    <i class="fas fa-shipping-fast text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Fastest Delivery</h3>
                <p class="text-gray-600">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
            <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 text-center hover:shadow-xl transition-shadow duration-300">
                <div class="w-20 h-20 mx-auto bg-gray-900 rounded-full flex items-center justify-center text-white mb-6">
                    <i class="fas fa-mug-hot text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Quality Coffee</h3>
                <p class="text-gray-600">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
        </div>
    </div>
</section>

<!-- Highlights Menu -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-primary font-bold uppercase tracking-widest text-sm">Discover</span>
            <h2 class="text-4xl font-bold text-gray-900 mt-2 font-serif">Best Coffee Sellers</h2>
            <p class="text-gray-500 max-w-2xl mx-auto mt-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach ($data['products'] as $product) : ?>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:-translate-y-2 transition-transform duration-300 border border-gray-100">
                    <div class="h-64 overflow-hidden relative">
                        <img src="<?php echo URLROOT; ?>/images/<?php echo $product->image; ?>" alt="<?php echo $product->name; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="<?php echo URLROOT; ?>/product/single/<?php echo $product->id; ?>" class="bg-white text-gray-900 px-6 py-2 rounded-full font-bold hover:bg-primary hover:text-white transition-colors">View Details</a>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-bold text-gray-900 mb-2"><?php echo $product->name; ?></h3>
                        <p class="text-gray-500 text-sm mb-4 line-clamp-2"><?php echo $product->description; ?></p>
                        <div class="text-primary font-bold text-xl">$<?php echo $product->price; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-12">
            <a href="<?php echo URLROOT; ?>/home/menu" class="inline-block border-2 border-primary text-primary font-bold px-8 py-3 rounded-full hover:bg-primary hover:text-white transition-all">View Full Menu</a>
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

<!-- Booking CTA -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-6 font-serif">Ready to book a table?</h2>
        <div class="bg-gray-50 p-8 rounded-2xl shadow-inner border border-gray-200">
            <form action="<?php echo URLROOT; ?>/booking/book" method="POST" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="first_name" placeholder="First Name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required>
                    <input type="text" name="last_name" placeholder="Last Name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <input type="date" name="date" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required>
                    <input type="time" name="time" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required>
                    <input type="text" name="phone" placeholder="Phone" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required>
                </div>
                <textarea name="message" rows="3" placeholder="Message / Special Request" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>

                <?php if (isset($_SESSION['user_id'])) : ?>
                    <button type="submit" name="submit" class="w-full bg-primary text-white font-bold py-4 rounded-lg hover:bg-emerald-700 transition-colors shadow-lg">Book Table Now</button>
                <?php else : ?>
                    <a href="<?php echo URLROOT; ?>/auth/login" class="block w-full bg-gray-800 text-center text-white font-bold py-4 rounded-lg hover:bg-gray-700 transition-colors">Login to Book a Table</a>
                <?php endif; ?>
            </form>
        </div>
    </div>
</section>

<?php require APPROOT . '/views/layouts/footer.php'; ?>