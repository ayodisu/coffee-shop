<?php require APPROOT . '/views/layouts/header.php'; ?>

<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url(<?php echo URLROOT; ?>/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Product Detail</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo URLROOT; ?>">Home</a></span> <span>Product Detail</span></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="<?php echo IMAGEPRODUCTS; ?>/<?php echo $data['product']->image; ?>" class="image-popup"><img src="<?php echo IMAGEPRODUCTS; ?>/<?php echo $data['product']->image; ?>" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3><?php echo $data['product']->name; ?></h3>
                <p class="price"><span>$<?php echo $data['product']->price; ?></span></p>
                <p><?php echo $data['product']->description; ?></p>

                <form action="<?php echo URLROOT; ?>/productController/addToCart" method="POST">
                    <div class="row mt-4">
                        <div class="col-md-6">
                        </div>
                        <div class="w-100"></div>
                        <div class="input-group col-md-6 d-flex mb-3">
                            <span class="input-group-btn mr-2">
                                <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                    <i class="icon-minus"></i>
                                </button>
                            </span>

                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                            <span class="input-group-btn ml-2">
                                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                    <i class="icon-plus"></i>
                                </button>
                            </span>
                        </div>
                    </div>

                    <input name="name" type="hidden" value="<?php echo $data['product']->name; ?>">
                    <input name="image" type="hidden" value="<?php echo $data['product']->image; ?>">
                    <input name="pro_id" type="hidden" value="<?php echo $data['product']->id; ?>">
                    <input name="price" type="hidden" value="<?php echo $data['product']->price; ?>">
                    <input name="description" type="hidden" value="<?php echo $data['product']->description; ?>">
                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <?php if ($data['inCart'] > 0) : ?>
                            <button name="submit" type="submit" class="btn btn-primary py-3 px-5" disabled>Added to Cart</button>
                        <?php else : ?>
                            <button name="submit" type="submit" class="btn btn-primary py-3 px-5">Add to Cart</button>
                        <?php endif;  ?>
                    <?php else: ?>
                        <p style="text-align: center !important;" class="btn btn-primary py-3 px-5">login to add to cart</p>
                    <?php endif; ?>
                </form>

            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Discover</span>
                <h2 class="mb-4">Related products</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data['relatedProducts'] as $allRelatedProduct) : ?>
                <div class="col-md-3">
                    <div class="menu-entry">
                        <a href="<?php echo URLROOT; ?>/products/product-single/<?php echo $allRelatedProduct->id; ?>" class="img" style="background-image: url(<?php echo IMAGEPRODUCTS; ?>/<?php echo $allRelatedProduct->image; ?>);"></a>
                        <div class="text text-center pt-4">
                            <h3><a href="<?php echo URLROOT; ?>/products/product-single/<?php echo $allRelatedProduct->id; ?>"><?php echo $allRelatedProduct->name; ?></a></h3>
                            <p><?php echo $allRelatedProduct->description; ?></p>
                            <p class="price"><span>$<?php echo $allRelatedProduct->price; ?></span></p>
                            <p><a href="<?php echo URLROOT; ?>/products/product-single/<?php echo $allRelatedProduct->id; ?>" class="btn btn-primary btn-outline-primary">Show</a></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
</section>

<?php require APPROOT . '/views/layouts/footer.php'; ?>