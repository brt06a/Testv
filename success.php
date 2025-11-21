<?php
// Get transaction details
$transaction_id = isset($_GET['txn']) ? $_GET['txn'] : 'Unknown';
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="success-container">
            <div class="success-icon">✓</div>
            <h1>Payment Successful!</h1>
            <p class="success-message">Thank you for your payment. Your transaction has been completed successfully.</p>
            
            <div class="transaction-details">
                <h3>Transaction Details</h3>
                <div class="details-grid">
                    <div class="detail-item">
                        <span class="label">Transaction ID:</span>
                        <span class="value"><?php echo $transaction_id; ?></span>
                    </div>
                    <div class="detail-item">
                        <span class="label">Plan:</span>
                        <span class="value"><?php echo $plan_name; ?></span>
                    </div>
                    <div class="detail-item">
                        <span class="label">Amount Paid:</span>
                        <span class="value">₹<?php echo $amount; ?></span>
                    </div>
                    <div class="detail-item">
                        <span class="label">Date & Time:</span>
                        <span class="value"><?php echo date('F j, Y, g:i A'); ?></span>
                    </div>
                </div>
            </div>
            
            <div class="next-steps">
                <h3>What's Next?</h3>
                <ul>
                    <li>You will receive a confirmation email shortly</li>
                    <li>Your plan benefits are now active</li>
                    <li>Access your account using your registered email</li>
                    <li>Contact support if you have any questions</li>
                </ul>
            </div>
            
            <div class="action-buttons">
                <a href="index.php" class="btn">Back to Plans</a>
                <a href="mailto:support@yourdomain.com" class="btn-secondary">Contact Support</a>
            </div>
        </div>
    </div>
</body>
</html>
