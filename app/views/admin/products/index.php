<?php require APPROOT . '/views/layouts/admin_header.php'; ?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-4 d-inline">Products</h5>
                <a href="<?php echo URLROOT; ?>/adminController/createProduct" class="btn btn-primary mb-4 text-center float-right">Create Products</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">image</th>
                            <th scope="col">price</th>
                            <th scope="col">type</th>
                            <th scope="col">delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['products'] as $product) : ?>
                            <tr>
                                <th scope="row"><?php echo $product->id; ?></th>
                                <td><?php echo $product->name; ?></td>
                                <td><img src="<?php echo URLROOT; ?>/images/<?php echo $product->image; ?>" alt="" style="width: 4rem; height: 4rem;"></td>
                                <td>$<?php echo $product->price; ?></td>
                                <td><?php echo $product->type; ?></td>
                                <td><a href="<?php echo URLROOT; ?>/adminController/deleteProduct/<?php echo $product->id; ?>" class="btn btn-danger  text-center ">delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/layouts/admin_footer.php'; ?>