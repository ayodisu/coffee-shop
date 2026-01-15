<?php require APPROOT . '/views/layouts/header.php'; ?>

<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url(<?php echo URLROOT; ?>/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Cart</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo URLROOT; ?>">Home</a></span> <span>Cart</span></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <?php if (count($data['cartItems']) > 0) : ?>
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['cartItems'] as $product) : ?>
                                    <tr class="text-center">
                                        <td class="product-remove"><a href="<?php echo URLROOT; ?>/productController/deleteCartItem/<?php echo $product->id; ?>"><span class="icon-close"></span></a></td>

                                        <td class="image-prod">
                                            <div class="img" style="background-image:url(<?php echo IMAGEPRODUCTS; ?>/<?php echo $product->image; ?>);"></div>
                                        </td>

                                        <td class="product-name">
                                            <h3><?php echo $product->name; ?></h3>
                                            <p><?php echo $product->description; ?></p>
                                        </td>

                                        <td class="price">$<?php echo $product->price; ?></td>

                                        <td>
                                            <div class="input-group mb-3">
                                                <input disabled type="text" name="quantity" class="quantity form-control input-number" value="<?php echo $product->quantity; ?>" min="1" max="100">
                                            </div>
                                        </td>

                                        <td class="total">$<?php echo $product->price * $product->quantity; ?></td>
                                    <?php endforeach; ?>
                                    </tr><!-- END TR-->
                            </tbody>
                        </table>
                    <?php else : ?>
                        <p>Cart Empty</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>
                    <p class="d-flex">
                        <span>Subtotal</span>
                        <span>$<?php echo $data['total']; ?></span>
                    </p>
                    <p class="d-flex">
                        <span>Delivery</span>
                        <span>$10.00</span>
                    </p>
                    <p class="d-flex">
                        <span>Discount</span>
                        <span>$3.00</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <?php if ($data['total'] > 0) : ?>
                            <span>$<?php echo $data['total'] + 10 - 3; ?></span>
                        <?php endif; ?>
                    </p>
                </div>
                <form action="<?php echo URLROOT; ?>/productController/cart" method="POST">
                    <?php if ($data['total'] > 0) : ?>
                        <button name="checkout" type="submit" class="btn btn-primary py-3 px-4">Proceed to Checkout</button>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require APPROOT . '/views/layouts/footer.php'; ?>