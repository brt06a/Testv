<?php
// Set the base URL for your payment system
$base_url = "https://yourdomain.com"; // Change this to your actual domain
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Plan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Choose Your Plan</h1>
            <p>Select the plan that best fits your needs</p>
        </header>
        
        <div class="plans-container">
            <div class="plan-card">
                <h3>Basic Plan</h3>
                <div class="price">₹49</div>
                <ul class="features">
                    <li>Basic Features</li>
                    <li>Standard Support</li>
                    <li>1 Month Access</li>
                </ul>
                <a href="payment.php?plan=basic&amount=49" class="btn">Select Plan</a>
            </div>
            
            <div class="plan-card popular">
                <div class="popular-badge">Most Popular</div>
                <h3>Standard Plan</h3>
                <div class="price">₹99</div>
                <ul class="features">
                    <li>All Basic Features</li>
                    <li>Priority Support</li>
                    <li>3 Months Access</li>
                    <li>Advanced Tools</li>
                </ul>
                <a href="payment.php?plan=standard&amount=99" class="btn">Select Plan</a>
            </div>
            
            <div class="plan-card">
                <h3>Premium Plan</h3>
                <div class="price">₹199</div>
                <ul class="features">
                    <li>All Standard Features</li>
                    <li>24/7 Support</li>
                    <li>6 Months Access</li>
                    <li>Premium Tools</li>
                    <li>Customization</li>
                </ul>
                <a href="payment.php?plan=premium&amount=199" class="btn">Select Plan</a>
            </div>
            
            <div class="plan-card">
                <h3>Enterprise Plan</h3>
                <div class="price">₹399</div>
                <ul class="features">
                    <li>All Premium Features</li>
                    <li>Dedicated Support</li>
                    <li>1 Year Access</li>
                    <li>All Tools</li>
                    <li>White Label</li>
                    <li>API Access</li>
                </ul>
                <a href="payment.php?plan=enterprise&amount=399" class="btn">Select Plan</a>
            </div>
        </div>
    </div>
</body>
</html>
