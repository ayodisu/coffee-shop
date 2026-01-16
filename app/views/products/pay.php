<?php require APPROOT . '/views/layouts/header.php'; ?>

<!-- Breadcrumb -->
<div class="bg-gray-100 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900 font-serif">Secure Payment</h1>
        <nav class="text-sm font-medium text-gray-500 mt-2">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="<?php echo URLROOT; ?>" class="hover:text-primary transition-colors">Home</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li>
                    <span class="text-gray-900">Payment</span>
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-20 bg-white">
    <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-8 text-center">
            <h2 class="text-2xl font-bold text-gray-900 mb-2">Complete Your Purchase</h2>
            <p class="text-gray-500 mb-8">Total Amount: <span class="font-bold text-gray-900">$<?php echo isset($_SESSION['total_price']) ? number_format($_SESSION['total_price'], 2) : '0.00'; ?></span></p>

            <!-- PayPal Button -->
            <div id="paypal-button-container" class="w-full"></div>

            <!-- Security Badge -->
            <div class="mt-6 flex items-center justify-center gap-2 text-xs text-gray-400">
                <i class="fas fa-lock"></i> Secure 256-bit SSL Encrypted Payment
            </div>
        </div>
    </div>
</section>

<!-- PayPal SDK -->
<script src="https://www.paypal.com/sdk/js?client-id=AVelEupXP8xXI_d3iR-IL5z5s1h4pkYl_DWjlwRsr86-M4L931LB4fUTzysad7sxS7nxiv3R06-6-RUR&currency=USD"></script>
<script>
    paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '<?php echo $_SESSION['total_price']; ?>' // Amount from session
                    }
                }]
            });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
            return actions.order.capture().then(function(orderData) {
                // Successful capture! Redirect to success page
                window.location.href = '<?php echo URLROOT; ?>/product/success';
            });
        }
    }).render('#paypal-button-container');
</script>

<?php require APPROOT . '/views/layouts/footer.php'; ?>