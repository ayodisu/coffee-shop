<?php require APPROOT . '/views/layouts/header.php'; ?>

<!-- Breadcrumb -->
<div class="bg-gray-100 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 font-serif">Our Menu</h1>
        <nav class="text-sm font-medium text-gray-500 mt-2">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="<?php echo URLROOT; ?>" class="hover:text-primary transition-colors">Home</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li>
                    <span class="text-gray-900">Menu</span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-12 bg-white min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Category Tabs -->
        <div class="flex justify-center mb-12">
            <div class="inline-flex rounded-lg p-1 bg-gray-100">
                <button onclick="switchTab('drinks')" id="tab-drinks" class="px-8 py-3 rounded-md text-sm font-bold text-white bg-primary shadow-sm transition-all duration-200">
                    <i class="fas fa-coffee mr-2"></i> Drinks
                </button>
                <button onclick="switchTab('desserts')" id="tab-desserts" class="px-8 py-3 rounded-md text-sm font-bold text-gray-600 hover:text-gray-900 transition-all duration-200">
                    <i class="fas fa-cookie mr-2"></i> Desserts
                </button>
            </div>
        </div>

        <!-- Drinks Grid -->
        <div id="content-drinks" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 fade-in">
            <?php foreach ($data['drinks'] as $product) : ?>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:-translate-y-2 transition-transform duration-300 border border-gray-100 flex flex-col">
                    <div class="h-64 overflow-hidden relative bg-gray-100">
                        <img src="<?php echo IMAGEPRODUCTS; ?>/<?php echo $product->image; ?>" alt="<?php echo $product->name; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <!-- Quick Action Overlay -->
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-4">
                            <a href="<?php echo URLROOT; ?>/product/single/<?php echo $product->id; ?>" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-900 hover:bg-primary hover:text-white transition-colors shadow-lg" title="View Details">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col text-center">
                        <h3 class="text-lg font-bold text-gray-900 mb-2 font-serif"><?php echo $product->name; ?></h3>
                        <p class="text-gray-500 text-sm mb-4 line-clamp-2 flex-1"><?php echo $product->description; ?></p>
                        <div class="flex items-center justify-center gap-2 mt-auto">
                            <span class="text-xl font-bold text-primary">$<?php echo $product->price; ?></span>
                        </div>
                        <a href="<?php echo URLROOT; ?>/product/single/<?php echo $product->id; ?>" class="mt-4 w-full block py-2 rounded-lg border-2 border-primary text-primary font-bold hover:bg-primary hover:text-white transition-colors text-sm uppercase tracking-wider">
                            Order Now
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Desserts Grid (Hidden by default) -->
        <div id="content-desserts" class="hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 fade-in">
            <?php foreach ($data['desserts'] as $product) : ?>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:-translate-y-2 transition-transform duration-300 border border-gray-100 flex flex-col">
                    <div class="h-64 overflow-hidden relative bg-gray-100">
                        <img src="<?php echo IMAGEPRODUCTS; ?>/<?php echo $product->image; ?>" alt="<?php echo $product->name; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <!-- Quick Action Overlay -->
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-4">
                            <a href="<?php echo URLROOT; ?>/product/single/<?php echo $product->id; ?>" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-900 hover:bg-primary hover:text-white transition-colors shadow-lg" title="View Details">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col text-center">
                        <h3 class="text-lg font-bold text-gray-900 mb-2 font-serif"><?php echo $product->name; ?></h3>
                        <p class="text-gray-500 text-sm mb-4 line-clamp-2 flex-1"><?php echo $product->description; ?></p>
                        <div class="flex items-center justify-center gap-2 mt-auto">
                            <span class="text-xl font-bold text-primary">$<?php echo $product->price; ?></span>
                        </div>
                        <a href="<?php echo URLROOT; ?>/product/single/<?php echo $product->id; ?>" class="mt-4 w-full block py-2 rounded-lg border-2 border-primary text-primary font-bold hover:bg-primary hover:text-white transition-colors text-sm uppercase tracking-wider">
                            Order Now
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Simple Tab Script -->
<script>
    function switchTab(tabName) {
        // Hide all contents
        document.getElementById('content-drinks').classList.add('hidden');
        document.getElementById('content-desserts').classList.add('hidden');

        // Reset tab styles
        document.getElementById('tab-drinks').classList.remove('bg-primary', 'text-white', 'shadow-sm');
        document.getElementById('tab-drinks').classList.add('text-gray-600');

        document.getElementById('tab-desserts').classList.remove('bg-primary', 'text-white', 'shadow-sm');
        document.getElementById('tab-desserts').classList.add('text-gray-600');

        // Show selected content
        document.getElementById('content-' + tabName).classList.remove('hidden');
        document.getElementById('content-' + tabName).classList.add('grid'); // Restore grid class

        // Style selected tab
        const activeTab = document.getElementById('tab-' + tabName);
        activeTab.classList.remove('text-gray-600');
        activeTab.classList.add('bg-primary', 'text-white', 'shadow-sm');
    }
</script>

<?php require APPROOT . '/views/layouts/footer.php'; ?>