<?php require APPROOT . '/views/layouts/header.php'; ?>

<!-- Breadcrumb -->
<div class="bg-gray-100 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 font-serif">Checkout</h1>
        <nav class="text-sm font-medium text-gray-500 mt-2">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="<?php echo URLROOT; ?>" class="hover:text-primary transition-colors">Home</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li>
                    <span class="text-gray-900">Checkout</span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <form action="<?php echo URLROOT; ?>/product/checkout" method="POST" class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <!-- Billing Details -->
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-6 font-serif border-b pb-2">Billing Details</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary" required>
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary" required>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="state" class="block text-sm font-medium text-gray-700 mb-1">State / Country</label>
                    <select name="state" id="state" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary">
                        <option value="France">France</option>
                        <option value="Italy">Italy</option>
                        <option value="Philippines">Philippines</option>
                        <option value="South Korea" selected>South Korea</option>
                        <option value="Hongkong">Hongkong</option>
                        <option value="Japan">Japan</option>
                        <option value="USA">United States</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="street_address" class="block text-sm font-medium text-gray-700 mb-1">Street Address</label>
                    <input type="text" name="street_address" id="street_address" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary" placeholder="House number and street name" required>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="town" class="block text-sm font-medium text-gray-700 mb-1">Town / City</label>
                        <input type="text" name="town" id="town" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary" required>
                    </div>
                    <div>
                        <label for="zip_code" class="block text-sm font-medium text-gray-700 mb-1">Postcode / ZIP</label>
                        <input type="text" name="zip_code" id="zip_code" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary" required>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                        <input type="tel" name="phone" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" name="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary" required>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div>
                <div class="bg-gray-50 p-8 rounded-xl border border-gray-200 shadow-sm sticky top-24">
                    <h3 class="text-xl font-bold text-gray-900 mb-6 font-serif border-b pb-2">Your Order</h3>

                    <div class="flex justify-between items-center py-4 border-b border-gray-200 font-medium">
                        <span class="text-gray-600">Total</span>
                        <span class="text-2xl font-bold text-primary">$<?php echo isset($_SESSION['total_price']) ? number_format($_SESSION['total_price'], 2) : '0.00'; ?></span>
                    </div>

                    <div class="mt-6">
                        <div class="flex items-center mb-4">
                            <input id="payment_paypal" type="radio" name="payment_method" value="paypal" checked class="h-4 w-4 text-primary focus:ring-primary border-gray-300">
                            <label for="payment_paypal" class="ml-3 block text-sm font-medium text-gray-700">
                                PayPal / Credit Card
                            </label>
                        </div>
                        <p class="text-xs text-gray-500 mb-6 ml-7">
                            Pay securely via PayPal. You can pay with your credit card if you don't have a PayPal account.
                        </p>
                    </div>

                    <button type="submit" name="submit" class="w-full bg-primary text-white font-bold py-4 rounded-lg hover:bg-emerald-700 transition-colors shadow-lg flex justify-center items-center gap-2">
                        Place Order & Pay <i class="fas fa-lock"></i>
                    </button>
                </div>
            </div>

        </form>
    </div>
</section>

<?php require APPROOT . '/views/layouts/footer.php'; ?>