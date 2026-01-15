<?php require APPROOT . '/views/layouts/admin_header.php'; ?>

<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Products</h5>
                <p class="card-text">number of products: <?php echo $data['counts']->products; ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Orders</h5>
                <p class="card-text">number of orders: <?php echo $data['counts']->orders; ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Bookings</h5>
                <p class="card-text">number of bookings: <?php echo $data['counts']->bookings; ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Admins</h5>
                <p class="card-text">number of admins: <?php echo $data['counts']->admins; ?></p>
            </div>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/layouts/admin_footer.php'; ?>