<?php require APPROOT . '/views/layouts/header.php'; ?>

<!-- Breadcrumb -->
<div class="bg-gray-100 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 font-serif">Shopping Cart</h1>
        <nav class="text-sm font-medium text-gray-500 mt-2">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="<?php echo URLROOT; ?>" class="hover:text-primary transition-colors">Home</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li>
                    <span class="text-gray-900">Cart</span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-12 bg-white min-h-[60vh]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (count($data['cartItems']) > 0) : ?>
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Cart Items List -->
                <div class="flex-1">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="text-gray-500 border-b border-gray-200">
                                    <th class="py-4 px-2 font-medium">Product</th>
                                    <th class="py-4 px-2 font-medium">Price</th>
                                    <th class="py-4 px-2 font-medium text-center">Quantity</th>
                                    <th class="py-4 px-2 font-medium">Total</th>
                                    <th class="py-4 px-2 font-medium text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <?php foreach ($data['cartItems'] as $product) : ?>
                                    <tr class="group hover:bg-gray-50 transition-colors">
                                        <td class="py-6 px-2 flex items-center">
                                            <div class="w-16 h-16 rounded-lg overflow-hidden flex-shrink-0 mr-4 border border-gray-200">
                                                <img src="<?php echo IMAGEPRODUCTS; ?>/<?php echo $product->image; ?>" alt="<?php echo $product->name; ?>" class="w-full h-full object-cover">
                                            </div>
                                            <div>
                                                <h3 class="font-bold text-gray-900"><?php echo $product->name; ?></h3>
                                                <p class="text-xs text-gray-500 truncate max-w-[150px]"><?php echo $product->description; ?></p>
                                            </div>
                                        </td>
                                        <td class="py-6 px-2 font-medium text-gray-700">
                                            $<?php echo $product->price; ?>
                                        </td>
                                        <td class="py-6 px-2">
                                            <div class="flex items-center justify-center">
                                                <input type="text" disabled value="<?php echo $product->quantity; ?>" class="w-12 text-center bg-gray-100 rounded-md border-transparent text-gray-700 font-bold">
                                            </div>
                                        </td>
                                        <td class="py-6 px-2 font-bold text-primary">
                                            $<?php echo number_format($product->price * $product->quantity, 2); ?>
                                        </td>
                                        <td class="py-6 px-2 text-center">
                                            <a href="<?php echo URLROOT; ?>/product/deleteCartItem/<?php echo $product->id; ?>" class="text-gray-400 hover:text-red-500 transition-colors" title="Remove Item">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Cart Summary -->
                <div class="w-full lg:w-96 flex-shrink-0">
                    <div class="bg-gray-50 rounded-xl p-8 shadow-inner border border-gray-200">
                        <h3 class="text-xl font-bold text-gray-900 mb-6 font-serif">Cart Totals</h3>

                        <div class="space-y-4 mb-6 text-sm">
                            <div class="flex justify-between items-center text-gray-600">
                                <span>Subtotal</span>
                                <span class="font-medium">$<?php echo number_format($data['total'], 2); ?></span>
                            </div>
                            <div class="flex justify-between items-center text-gray-600">
                                <span>Shipping</span>
                                <span class="font-medium">$10.00</span>
                            </div>
                            <div class="flex justify-between items-center text-green-600">
                                <span>Discount</span>
                                <span class="font-medium">-$3.00</span>
                            </div>
                            <div class="border-t border-gray-200 pt-4 flex justify-between items-center text-lg font-bold text-gray-900">
                                <span>Total</span>
                                <span>$<?php echo number_format($data['total'] + 10 - 3, 2); ?></span>
                            </div>
                        </div>

                        <form action="<?php echo URLROOT; ?>/product/cart" method="POST">
                            <button type="submit" name="checkout" class="w-full bg-primary text-white font-bold py-4 rounded-lg hover:bg-emerald-700 transition-colors shadow-lg flex justify-center items-center gap-2">
                                Proceed to Checkout <i class="fas fa-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="text-center py-20">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6 text-gray-400">
                    <i class="fas fa-shopping-basket text-4xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Your cart is empty</h2>
                <p class="text-gray-500 mb-8">Looks like you haven't added any coffee yet.</p>
                <a href="<?php echo URLROOT; ?>/home/menu" class="inline-block bg-primary text-white font-bold px-8 py-3 rounded-full hover:bg-emerald-700 transition-colors">Start Shopping</a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php require APPROOT . '/views/layouts/footer.php'; ?>