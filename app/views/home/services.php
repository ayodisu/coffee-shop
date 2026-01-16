<?php require APPROOT . '/views/layouts/header.php'; ?>

<!-- Breadcrumb -->
<div class="bg-gray-100 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 font-serif">Our Services</h1>
        <nav class="text-sm font-medium text-gray-500 mt-2">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="<?php echo URLROOT; ?>" class="hover:text-primary transition-colors">Home</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li>
                    <span class="text-gray-900">Services</span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Service 1 -->
            <div class="bg-white p-10 rounded-2xl shadow-lg border border-gray-100 text-center hover:-translate-y-2 transition-transform duration-300">
                <div class="w-20 h-20 mx-auto bg-gray-900 rounded-full flex items-center justify-center text-white mb-6 group-hover:bg-primary transition-colors">
                    <i class="fas fa-clipboard-list text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 font-serif">Easy to Order</h3>
                <p class="text-gray-600 leading-relaxed">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name.</p>
            </div>

            <!-- Service 2 -->
            <div class="bg-white p-10 rounded-2xl shadow-lg border border-gray-100 text-center hover:-translate-y-2 transition-transform duration-300 transform md:-translate-y-4">
                <div class="w-20 h-20 mx-auto bg-primary rounded-full flex items-center justify-center text-white mb-6">
                    <i class="fas fa-shipping-fast text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 font-serif">Fastest Delivery</h3>
                <p class="text-gray-600 leading-relaxed">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name.</p>
            </div>

            <!-- Service 3 -->
            <div class="bg-white p-10 rounded-2xl shadow-lg border border-gray-100 text-center hover:-translate-y-2 transition-transform duration-300">
                <div class="w-20 h-20 mx-auto bg-gray-900 rounded-full flex items-center justify-center text-white mb-6 group-hover:bg-primary transition-colors">
                    <i class="fas fa-mug-hot text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 font-serif">Quality Coffee</h3>
                <p class="text-gray-600 leading-relaxed">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name.</p>
            </div>
        </div>
    </div>
</section>

<?php require APPROOT . '/views/layouts/footer.php'; ?>