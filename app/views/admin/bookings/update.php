<?php require APPROOT . '/views/layouts/admin_header.php'; ?>

<div class="max-w-xl mx-auto">
    <div class="md:flex md:items-center md:justify-between mb-6">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">Update Booking Status</h2>
            <p class="text-sm text-gray-500 mt-1">Booking #<?php echo $data['booking']->id; ?> - <?php echo $data['booking']->first_name; ?></p>
        </div>
        <div class="mt-4 flex md:mt-0 md:ml-4">
            <a href="<?php echo URLROOT; ?>/admin/bookings" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                Cancel
            </a>
        </div>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden border border-gray-100">
        <div class="p-6 bg-gray-50 border-b border-gray-100">
            <div class="grid grid-cols-2 gap-4 text-sm">
                <div>
                    <span class="block text-gray-500">Customer</span>
                    <span class="font-medium"><?php echo $data['booking']->first_name . ' ' . $data['booking']->last_name; ?></span>
                </div>
                <div>
                    <span class="block text-gray-500">Date/Time</span>
                    <span class="font-medium"><?php echo $data['booking']->date . ' at ' . $data['booking']->time; ?></span>
                </div>
                <div class="col-span-2">
                    <span class="block text-gray-500">Message</span>
                    <span class="font-medium italic text-gray-600">"<?php echo $data['booking']->message; ?>"</span>
                </div>
            </div>
        </div>

        <form method="POST" action="<?php echo URLROOT; ?>/admin/updateBooking/<?php echo $data['booking']->id; ?>" class="p-8">
            <div class="mb-6">
                <label for="status" class="block text-sm font-medium text-gray-700 mb-2">New Status</label>
                <select name="status" id="status" class="shadow-sm focus:ring-emerald-500 focus:border-emerald-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border">
                    <option value="Pending" <?php echo ($data['booking']->status == 'Pending') ? 'selected' : ''; ?>>Pending</option>
                    <option value="Confirmed" <?php echo ($data['booking']->status == 'Confirmed') ? 'selected' : ''; ?>>Confirmed</option>
                    <option value="Done" <?php echo ($data['booking']->status == 'Done') ? 'selected' : ''; ?>>Done</option>
                    <option value="Cancelled" <?php echo ($data['booking']->status == 'Cancelled') ? 'selected' : ''; ?>>Cancelled</option>
                </select>
            </div>

            <div class="flex justify-end">
                <button type="submit" name="submit" class="w-full sm:w-auto inline-flex justify-center py-2 px-6 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-colors duration-200">
                    Update Status
                </button>
            </div>
        </form>
    </div>
</div>

<?php require APPROOT . '/views/layouts/admin_footer.php'; ?>