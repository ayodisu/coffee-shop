<?php require APPROOT . '/views/layouts/admin_header.php'; ?>

<div class="max-w-3xl mx-auto">
    <div class="md:flex md:items-center md:justify-between mb-6">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">Create New Product</h2>
        </div>
        <div class="mt-4 flex md:mt-0 md:ml-4">
            <a href="<?php echo URLROOT; ?>/admin/products" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                Cancel
            </a>
        </div>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <form method="POST" action="<?php echo URLROOT; ?>/admin/createProduct" enctype="multipart/form-data" class="space-y-6 p-8">

            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                <!-- Name -->
                <div class="sm:col-span-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                    <div class="mt-1">
                        <input type="text" name="name" id="name" class="shadow-sm focus:ring-emerald-500 focus:border-emerald-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border" placeholder="e.g. Mocha Latte" required>
                    </div>
                </div>

                <!-- Price -->
                <div class="sm:col-span-2">
                    <label for="price" class="block text-sm font-medium text-gray-700">Price ($)</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-500 sm:text-sm">$</span>
                        </div>
                        <input type="text" name="price" id="price" class="focus:ring-emerald-500 focus:border-emerald-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md p-2 border" placeholder="0.00" required>
                    </div>
                </div>

                <!-- Type -->
                <div class="sm:col-span-3">
                    <label for="type" class="block text-sm font-medium text-gray-700">Category</label>
                    <div class="mt-1">
                        <select id="type" name="type" class="shadow-sm focus:ring-emerald-500 focus:border-emerald-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border">
                            <option selected>Choose Type</option>
                            <option value="drink">Drink</option>
                            <option value="dessert">Dessert</option>
                        </select>
                    </div>
                </div>

                <!-- Image -->
                <div class="sm:col-span-3">
                    <label for="image" class="block text-sm font-medium text-gray-700">Product Image</label>
                    <div class="mt-1">
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none p-2" id="image" name="image" type="file">
                        <p class="mt-1 text-xs text-gray-500" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                    </div>
                </div>

                <!-- Description -->
                <div class="sm:col-span-6">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <div class="mt-1">
                        <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-emerald-500 focus:border-emerald-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 border" required></textarea>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">Brief description of the product for the menu.</p>
                </div>
            </div>

            <div class="pt-5">
                <div class="flex justify-end">
                    <button type="submit" name="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-colors duration-200">
                        Create Product
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require APPROOT . '/views/layouts/admin_footer.php'; ?>