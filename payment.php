<?php
// Include QR code library
require_once 'phpqrcode/qrlib.php';

// UPI ID
$upi_id = "bishwa6@ptyes";

// Get plan details from URL
$plan = isset($_GET['plan']) ? $_GET['plan'] : 'basic';
$amount = isset($_GET['amount']) ? $_GET['amount'] : '49';

// Plan names for display
$plan_names = [
    'basic' => 'Basic Plan',
    'standard' => 'Standard Plan',
    'premium' => 'Premium Plan',
    'enterprise' => 'Enterprise Plan'
];

$plan_name = isset($plan_names[$plan]) ? $plan_names[$plan] : 'Basic Plan';

// Create UPI payment URL
$payment_url = "upi://pay?pa=" . urlencode($upi_id) . "&pn=" . urlencode("Your Business Name") . "&am=" . $amount . "&cu=INR&tn=" . urlencode("Payment for " . $plan_name);

// Generate QR code
$qr_dir = 'qr/';
if (!file_exists($qr_dir)) {
    mkdir($qr_dir, 0755, true);
}

$qr_filename = $qr_dir . 'payment_' . $plan . '_' . $amount . '.png';
QRcode::png($payment_url, $qr_filename, QR_ECLEVEL_L, 10);

// Generate transaction ID
$transaction_id = 'TXN' . date('YmdHis') . rand(1000, 9999);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Your Payment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Complete Your Payment</h1>
            <p>You're subscribing to: <strong><?php echo $plan_name; ?></strong></p>
            <div class="amount">Amount: ₹<?php echo $amount; ?></div>
        </header>
        
        <div class="payment-container">
            <div class="payment-info">
                <h3>Payment Details</h3>
                <div class="details">
                    <p><strong>Plan:</strong> <?php echo $plan_name; ?></p>
                    <p><strong>Amount:</strong> ₹<?php echo $amount; ?></p>
                    <p><strong>Transaction ID:</strong> <?php echo $transaction_id; ?></p>
                    <p><strong>UPI ID:</strong> <?php echo $upi_id; ?></p>
                </div>
            </div>
            
            <div class="payment-methods">
                <div class="qr-section">
                    <h3>Scan QR Code to Pay</h3>
                    <div class="qr-code">
                        <img src="<?php echo $qr_filename; ?>" alt="QR Code for Payment">
                    </div>
                    <p class="qr-instruction">Scan this QR code with any UPI app to complete your payment</p>
                </div>
                
                <div class="upi-button-section">
                    <h3>Pay via UPI App</h3>
                    <a href="<?php echo $payment_url; ?>" class="upi-pay-btn">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE4IDMuNUg2QzQuNjEgMy41IDMuNSA0LjYxIDMuNSA2VjE4QzMuNSAxOS4zOSA0LjYxIDIwLjUgNiAyMC41SDE4QzE5LjM5IDIwLjUgMjAuNSAxOS4zOSAyMC41IDE4VjZDMjAuNSA0LjYxIDE5LjM5IDMuNSAxOCAzLjVaIiBmaWxsPSIjMDA3NEE0Ii8+CjxwYXRoIGQ9Ik0xMiAxNi41QzE0LjQ4NDkgMTYuNSAxNi41IDE0LjQ4NDkgMTYuNSAxMkMxNi41IDkuNTE1MTQgMTQuNDg0OSA3LjUgMTIgNy41QzkuNTE1MTQgNy41IDcuNSA5LjUxNTE0IDcuNSAxMkM3LjUgMTQuNDg0OSA5LjUxNTE0IDE2LjUgMTIgMTYuNVoiIGZpbGw9IndoaXRlIi8+CjxwYXRoIGQ9Ik0xMiAxNUMxMy42NTY5IDE1IDE1IDEzLjY1NjkgMTUgMTJDMTUgMTAuMzQzMSAxMy42NTY5IDkgMTIgOUMxMC4zNDMxIDkgOSAxMC4zNDMxIDkgMTJDOSAxMy42NTY5IDEwLjM0MzEgMTUgMTIgMTVaIiBmaWxsPSIjMDA3NEE0Ii8+Cjwvc3ZnPgo=" alt="UPI Icon">
                        Pay ₹<?php echo $amount; ?> via UPI
                    </a>
                    <p class="upi-instruction">Click the button to open your UPI app and complete the payment</p>
                </div>
            </div>
        </div>
        
        <div class="instructions">
            <h3>Payment Instructions</h3>
            <ol>
                <li>Scan the QR code with any UPI app <strong>OR</strong> click the "Pay via UPI" button</li>
                <li>Verify the amount (₹<?php echo $amount; ?>) and UPI ID (<?php echo $upi_id; ?>)</li>
                <li>Complete the payment in your UPI app</li>
                <li>You will be redirected to the success page automatically</li>
            </ol>
            
            <div class="note">
                <strong>Note:</strong> Please don't close this page until payment is completed. 
                After successful payment, you'll be redirected to the confirmation page.
            </div>
        </div>
        
        <div class="action-buttons">
            <a href="index.php" class="btn-secondary">Choose Different Plan</a>
            <a href="success.php?txn=<?php echo $transaction_id; ?>&plan=<?php echo $plan; ?>&amount=<?php echo $amount; ?>" class="btn-success">I've Completed Payment</a>
        </div>
    </div>
    
    <script>
        // Auto-redirect to success page after 2 minutes (simulating payment completion)
        setTimeout(function() {
            window.location.href = 'success.php?txn=<?php echo $transaction_id; ?>&plan=<?php echo $plan; ?>&amount=<?php echo $amount; ?>';
        }, 120000); // 2 minutes
    </script>
</body>
</html>
