<?php require APPROOT . '/views/layouts/admin_header.php'; ?>

<div class="mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Orders</h1>
    <p class="text-sm text-gray-500 mt-1">Manage customer orders and status</p>
</div>

<div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer Info</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach ($data['orders'] as $order) : ?>
                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900"><?php echo $order->first_name . ' ' . $order->last_name; ?></div>
                            <div class="text-xs text-gray-500"><?php echo $order->email; ?></div>
                            <div class="text-xs text-gray-500"><?php echo $order->phone; ?></div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900"><?php echo $order->street_address; ?></div>
                            <div class="text-xs text-gray-500"><?php echo $order->town . ', ' . $order->state . ' ' . $order->zip_code; ?></div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-bold text-gray-800">$<?php echo $order->total_price; ?></span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <?php
                            $statusColor = 'bg-yellow-100 text-yellow-800';
                            if (strtolower($order->status) == 'delivered' || strtolower($order->status) == 'completed') $statusColor = 'bg-green-100 text-green-800';
                            if (strtolower($order->status) == 'cancelled') $statusColor = 'bg-red-100 text-red-800';
                            ?>
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full <?php echo $statusColor; ?>">
                                <?php echo ucfirst($order->status); ?>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="<?php echo URLROOT; ?>/admin/updateOrder/<?php echo $order->id; ?>" class="text-indigo-600 hover:text-indigo-900 mr-3">Update</a>
                            <a href="<?php echo URLROOT; ?>/admin/deleteOrder/<?php echo $order->id; ?>" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this order?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require APPROOT . '/views/layouts/admin_footer.php'; ?>