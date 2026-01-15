<?php require APPROOT . '/views/layouts/admin_header.php'; ?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-4 d-inline">Bookings</h5>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">first_name</th>
                            <th scope="col">last_name</th>
                            <th scope="col">date</th>
                            <th scope="col">time</th>
                            <th scope="col">phone</th>
                            <th scope="col">message</th>
                            <th scope="col">status</th>
                            <th scope="col">change status</th>
                            <th scope="col">created_at</th>
                            <th scope="col">delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['bookings'] as $booking) : ?>
                            <tr>
                                <th scope="row"><?php echo $booking->id; ?></th>
                                <td><?php echo $booking->first_name; ?></td>
                                <td><?php echo $booking->last_name; ?></td>
                                <td><?php echo $booking->date; ?></td>
                                <td><?php echo $booking->time; ?></td>
                                <td><?php echo $booking->phone; ?></td>
                                <td><?php echo $booking->message; ?></td>
                                <td><?php echo $booking->status; ?></td>
                                <td><a href="<?php echo URLROOT; ?>/adminController/updateBooking/<?php echo $booking->id; ?>" class="btn btn-warning text-white text-center ">change status</a></td>
                                <td><?php echo $booking->created_at; ?></td>
                                <td><a href="<?php echo URLROOT; ?>/adminController/deleteBooking/<?php echo $booking->id; ?>" class="btn btn-danger  text-center ">delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/layouts/admin_footer.php'; ?>