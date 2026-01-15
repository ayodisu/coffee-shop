<?php require APPROOT . '/views/layouts/header.php'; ?>

<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url(<?php echo URLROOT; ?>/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Bookings</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo URLROOT; ?>">Home</a></span> <span>Bookings</span></p>
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
                    <?php if (count($data['bookings']) > 0) : ?>
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Review</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['bookings'] as $booking) : ?>
                                    <tr class="text-center">
                                        <td class="product-remove"><?php echo $booking->first_name; ?></td>

                                        <td class="image-prod">
                                            <?php echo $booking->last_name; ?>
                                        </td>

                                        <td class="product-name">
                                            <h3><?php echo $booking->date; ?></h3>
                                        </td>

                                        <td class="price"><?php echo $booking->time; ?></td>

                                        <td>
                                            <?php echo $booking->phone; ?>
                                        </td>

                                        <td class="total"><?php echo $booking->message; ?></td>
                                        <td class="total"><?php echo $booking->status; ?></td>
                                        <?php if ($booking->status == "Done") : ?>
                                            <td class="total"><a class="btn btn-primary" href="<?php echo URLROOT; ?>/userController/writeReview">write review</span></a></td>
                                        <?php endif; ?>
                                    </tr><!-- END TR-->
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php else : ?>
                        <p>You do not have any bookings right now</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require APPROOT . '/views/layouts/footer.php'; ?>