<!DOCTYPE html>
<html>
<head>
    <title>Payment Confirmation</title>
</head>
<body>
    <h1>Payment Confirmation</h1>
    <p>Dear {{ $user->name }},</p>
    <p>We are pleased to confirm that your payment has been successfully processed.</p>
    <p>Payment details:</p>
    <ul>
        <li>Concourse: {{ $tenant->concourse->name }}</li>
        <li>Amount: ₱{{ number_format($tenant->monthly_payment, 2) }}</li>
        <li>Date: {{ now()->format('F j, Y') }}</li>
    </ul>
    <p>Thank you for your prompt payment.</p>
    <p>Best regards,<br>Your Property Management Team</p>
</body>
</html>