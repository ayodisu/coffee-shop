<?php require APPROOT . '/views/layouts/admin_header.php'; ?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-4 d-inline">Admins</h5>
                <a href="<?php echo URLROOT; ?>/adminController/createAdmin" class="btn btn-primary mb-4 text-center float-right">Create Admins</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">adminname</th>
                            <th scope="col">email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['admins'] as $admin) : ?>
                            <tr>
                                <th scope="row"><?php echo $admin->id; ?></th>
                                <td><?php echo $admin->adminname; ?></td>
                                <td><?php echo $admin->email; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/layouts/admin_footer.php'; ?>