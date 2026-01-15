<?php require APPROOT . '/views/layouts/header.php'; ?>

<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url(<?php echo URLROOT; ?>/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Login</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo URLROOT; ?>">Home</a></span> <span>Login</span></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <form action="<?php echo URLROOT; ?>/auth/login" method="POST" class="billing-form ftco-bg-dark p-3 p-md-5">
                    <?php echo csrf_field(); ?>
                    <h3 class="mb-4 billing-heading">Login</h3>
                    <div class="row align-items-end">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-4">
                                <div class="radio">
                                    <button type="submit" name="submit" class="btn btn-primary py-3 px-4">Login</button>
                                </div>
                            </div>
                        </div>


                </form><!-- END -->
            </div> <!-- .col-md-8 -->
        </div>
    </div>
    </div>
</section> <!-- .section -->

<?php require APPROOT . '/views/layouts/footer.php'; ?>