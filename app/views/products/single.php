<?php require APPROOT . '/views/layouts/header.php'; ?>

<!-- Breadcrumb -->
<div class="bg-gray-100 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm font-medium text-gray-500">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="<?php echo URLROOT; ?>" class="hover:text-primary transition-colors">Home</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <a href="<?php echo URLROOT; ?>/home/menu" class="hover:text-primary transition-colors">Menu</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li>
                    <span class="text-gray-900"><?php echo $data['product']->name; ?></span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- Product Details -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
            <!-- Image -->
            <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-100 bg-gray-50">
                <img src="<?php echo IMAGEPRODUCTS; ?>/<?php echo $data['product']->image; ?>" alt="<?php echo $data['product']->name; ?>" class="w-full h-auto object-cover transform hover:scale-105 transition-transform duration-500">
            </div>

            <!-- Content -->
            <div>
                <span class="text-sm font-bold text-primary uppercase tracking-wider mb-2 block"><?php echo $data['product']->type; ?></span>
                <h1 class="text-4xl font-serif font-bold text-gray-900 mb-4"><?php echo $data['product']->name; ?></h1>
                <div class="text-3xl font-bold text-gray-900 mb-6">$<?php echo $data['product']->price; ?></div>
                <p class="text-gray-600 mb-8 leading-relaxed text-lg">
                    <?php echo $data['product']->description; ?>
                </p>

                <form action="<?php echo URLROOT; ?>/product/addToCart" method="POST" class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                    <div class="flex items-center mb-6">
                        <label for="quantity" class="font-bold text-gray-700 mr-4">Quantity:</label>
                        <div class="flex items-center border border-gray-300 rounded-lg bg-white">
                            <button type="button" onclick="decrementValue()" class="w-10 h-10 flex items-center justify-center text-gray-500 hover:text-primary hover:bg-gray-100 rounded-l-lg transition-colors focus:outline-none">
                                <i class="fas fa-minus text-xs"></i>
                            </button>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="100" class="w-12 text-center border-none focus:ring-0 text-gray-900 font-bold p-0">
                            <button type="button" onclick="incrementValue()" class="w-10 h-10 flex items-center justify-center text-gray-500 hover:text-primary hover:bg-gray-100 rounded-r-lg transition-colors focus:outline-none">
                                <i class="fas fa-plus text-xs"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Hidden Inputs -->
                    <input name="name" type="hidden" value="<?php echo $data['product']->name; ?>">
                    <input name="image" type="hidden" value="<?php echo $data['product']->image; ?>">
                    <input name="pro_id" type="hidden" value="<?php echo $data['product']->id; ?>">
                    <input name="price" type="hidden" value="<?php echo $data['product']->price; ?>">
                    <input name="description" type="hidden" value="<?php echo $data['product']->description; ?>">

                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <?php if ($data['inCart'] > 0) : ?>
                            <button type="button" class="w-full bg-gray-300 text-gray-500 font-bold py-4 rounded-lg cursor-not-allowed flex items-center justify-center gap-2" disabled>
                                <i class="fas fa-check"></i> Already in Cart
                            </button>
                        <?php else : ?>
                            <button type="submit" name="submit" class="w-full bg-primary text-white font-bold py-4 rounded-lg hover:bg-emerald-700 transition-colors shadow-lg flex items-center justify-center gap-2">
                                <i class="fas fa-shopping-cart"></i> Add to Cart
                            </button>
                        <?php endif;  ?>
                    <?php else: ?>
                        <a href="<?php echo URLROOT; ?>/auth/login" class="block w-full text-center bg-gray-800 text-white font-bold py-4 rounded-lg hover:bg-gray-700 transition-colors">
                            Login to Order
                        </a>
                    <?php endif; ?>
                </form>

                <div class="mt-8 flex items-center gap-4 text-sm text-gray-500">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-truck text-primary"></i> Fast Delivery
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-shield-alt text-primary"></i> Quality Guarantee
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 font-serif text-center">Related Products</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach ($data['relatedProducts'] as $product) : ?>
                <div class="bg-white rounded-xl shadow-md overflow-hidden group hover:-translate-y-1 transition-transform duration-300">
                    <div class="h-48 overflow-hidden relative">
                        <img src="<?php echo IMAGEPRODUCTS; ?>/<?php echo $product->image; ?>" alt="<?php echo $product->name; ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="<?php echo URLROOT; ?>/product/single/<?php echo $product->id; ?>" class="bg-white text-gray-900 px-4 py-2 rounded-full font-bold text-sm hover:bg-primary hover:text-white transition-colors">View</a>
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="font-bold text-gray-900 mb-1 truncate"><?php echo $product->name; ?></h3>
                        <div class="text-primary font-bold text-lg mb-2">$<?php echo $product->price; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    function incrementValue() {
        var value = parseInt(document.getElementById('quantity').value, 10);
        value = isNaN(value) ? 1 : value;
        if (value < 100) {
            value++;
            document.getElementById('quantity').value = value;
        }
    }

    function decrementValue() {
        var value = parseInt(document.getElementById('quantity').value, 10);
        value = isNaN(value) ? 1 : value;
        if (value > 1) {
            value--;
            document.getElementById('quantity').value = value;
        }
    }
</script>

<?php require APPROOT . '/views/layouts/footer.php'; ?>