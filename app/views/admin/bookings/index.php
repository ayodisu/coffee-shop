<?php require APPROOT . '/views/layouts/admin_header.php'; ?>

<div class="mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Bookings</h1>
    <p class="text-sm text-gray-500 mt-1">Manage table reservations</p>
</div>

<div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date & Time</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Message</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach ($data['bookings'] as $booking) : ?>
                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900"><?php echo $booking->first_name . ' ' . $booking->last_name; ?></div>
                            <div class="text-xs text-gray-500"><?php echo $booking->phone; ?></div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900"><?php echo $booking->date; ?></div>
                            <div class="text-xs text-gray-500"><?php echo $booking->time; ?></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-500 truncate max-w-xs" title="<?php echo $booking->message; ?>">
                                <?php echo $booking->message; ?>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <?php
                            $statusColor = 'bg-yellow-100 text-yellow-800';
                            if (strtolower($booking->status) == 'confirmed' || strtolower($booking->status) == 'done') $statusColor = 'bg-green-100 text-green-800';
                            if (strtolower($booking->status) == 'cancelled') $statusColor = 'bg-red-100 text-red-800';
                            ?>
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full <?php echo $statusColor; ?>">
                                <?php echo ucfirst($booking->status); ?>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="<?php echo URLROOT; ?>/admin/updateBooking/<?php echo $booking->id; ?>" class="text-indigo-600 hover:text-indigo-900 mr-3">Status</a>
                            <a href="<?php echo URLROOT; ?>/admin/deleteBooking/<?php echo $booking->id; ?>" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this booking?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require APPROOT . '/views/layouts/admin_footer.php'; ?>