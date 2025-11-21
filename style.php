/* Reset and Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: #333;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 100vh;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Header Styles */
header {
    text-align: center;
    margin-bottom: 40px;
    color: white;
}

header h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
    font-weight: 700;
}

header p {
    font-size: 1.2rem;
    opacity: 0.9;
}

/* Plans Container */
.plans-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

/* Plan Card Styles */
.plan-card {
    background: white;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    text-align: center;
}

.plan-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.plan-card.popular {
    border: 2px solid #007bff;
    transform: scale(1.05);
}

.plan-card.popular:hover {
    transform: scale(1.05) translateY(-5px);
}

.popular-badge {
    position: absolute;
    top: -10px;
    left: 50%;
    transform: translateX(-50%);
    background: #007bff;
    color: white;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
}

.plan-card h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
    color: #333;
}

.price {
    font-size: 3rem;
    font-weight: 700;
    color: #007bff;
    margin: 20px 0;
}

.price::before {
    content: '₹';
    font-size: 2rem;
}

.features {
    list-style: none;
    margin: 25px 0;
    text-align: left;
}

.features li {
    padding: 8px 0;
    border-bottom: 1px solid #f0f0f0;
    position: relative;
    padding-left: 25px;
}

.features li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #28a745;
    font-weight: bold;
}

/* Button Styles */
.btn {
    display: inline-block;
    background: #007bff;
    color: white;
    padding: 12px 30px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
    font-size: 1rem;
    width: 100%;
    text-align: center;
}

.btn:hover {
    background: #0056b3;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
}

.btn-secondary {
    background: #6c757d;
}

.btn-secondary:hover {
    background: #545b62;
}

.btn-success {
    background: #28a745;
}

.btn-success:hover {
    background: #1e7e34;
}

/* Payment Page Styles */
.amount {
    font-size: 2rem;
    font-weight: 700;
    color: white;
    margin: 20px 0;
}

.payment-container {
    background: white;
    border-radius: 15px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.payment-info {
    margin-bottom: 30px;
    text-align: center;
}

.payment-info h3 {
    color: #333;
    margin-bottom: 20px;
    font-size: 1.5rem;
}

.details {
    display: inline-block;
    text-align: left;
    background: #f8f9fa;
    padding: 20px;
    border-radius: 10px;
    border-left: 4px solid #007bff;
}

.details p {
    margin: 10px 0;
    font-size: 1.1rem;
}

.payment-methods {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    margin-top: 30px;
}

.qr-section, .upi-button-section {
    text-align: center;
}

.qr-section h3, .upi-button-section h3 {
    margin-bottom: 20px;
    color: #333;
}

.qr-code {
    background: white;
    padding: 20px;
    border-radius: 10px;
    display: inline-block;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    margin-bottom: 15px;
}

.qr-code img {
    width: 200px;
    height: 200px;
    border: 1px solid #ddd;
}

.qr-instruction, .upi-instruction {
    color: #666;
    font-size: 0.9rem;
    margin-top: 10px;
}

.upi-pay-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #007bff;
    color: white;
    padding: 15px 30px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
    margin-bottom: 15px;
}

.upi-pay-btn:hover {
    background: #0056b3;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0, 123, 255, 0.4);
}

.upi-pay-btn img {
    width: 24px;
    height: 24px;
}

/* Instructions Section */
.instructions {
    background: white;
    border-radius: 15px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.instructions h3 {
    color: #333;
    margin-bottom: 20px;
    font-size: 1.5rem;
}

.instructions ol {
    margin-left: 20px;
    margin-bottom: 20px;
}

.instructions li {
    margin: 10px 0;
    font-size: 1.1rem;
}

.note {
    background: #fff3cd;
    border: 1px solid #ffeaa7;
    border-radius: 10px;
    padding: 15px;
    color: #856404;
}

/* Action Buttons */
.action-buttons {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
}

.action-buttons .btn {
    width: auto;
    min-width: 200px;
}

/* Success Page Styles */
.success-container {
    background: white;
    border-radius: 15px;
    padding: 50px 30px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    margin: 0 auto;
}

.success-icon {
    width: 80px;
    height: 80px;
    background: #28a745;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
    margin: 0 auto 20px;
}

.success-message {
    font-size: 1.2rem;
    margin-bottom: 30px;
    color: #666;
}

.transaction-details {
    background: #f8f9fa;
    border-radius: 10px;
    padding: 25px;
    margin: 30px 0;
    text-align: left;
}

.transaction-details h3 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.details-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
}

.detail-item {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px solid #e9ecef;
}

.detail-item:last-child {
    border-bottom: none;
}

.label {
    font-weight: 600;
    color: #555;
}

.value {
    color: #333;
    font-weight: 500;
}

.next-steps {
    text-align: left;
    margin: 30px 0;
}

.next-steps h3 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.next-steps ul {
    margin-left: 20px;
}

.next-steps li {
    margin: 10px 0;
    font-size: 1.1rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .plans-container {
        grid-template-columns: 1fr;
    }
    
    .plan-card.popular {
        transform: none;
    }
    
    .plan-card.popular:hover {
        transform: translateY(-5px);
    }
    
    .payment-methods {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .action-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .action-buttons .btn {
        width: 100%;
        max-width: 300px;
    }
    
    header h1 {
        font-size: 2rem;
    }
    
    .details-grid {
        grid-template-columns: 1fr;
    }
}
