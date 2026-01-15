<?php require APPROOT . '/views/layouts/admin_header.php'; ?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-5 d-inline">Update Order Status</h5>
                <form method="POST" action="<?php echo URLROOT; ?>/adminController/updateOrder/<?php echo $data['order']->id; ?>">

                    <div class="form-outline mb-4 mt-4">

                        <select name="status" class="form-select  form-control" aria-label="Default select example">
                            <option selected>Choose Status</option>
                            <option value="Pending">Pending</option>
                            <option value="Processing">Processing</option>
                            <option value="Completed">Completed</option>
                            <option value="Cancelled">Cancelled</option>
                        </select>
                    </div>

                    <br>
                    <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Update</button>
                </form>

            </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/layouts/admin_footer.php'; ?>