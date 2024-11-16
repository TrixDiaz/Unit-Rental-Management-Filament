<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <style>
        .payment-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .payment-table th, .payment-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        .payment-table th {
            background-color: #f8f9fa;
        }
        .amount {
            font-size: 24px;
            color: #2d3748;
            font-weight: bold;
        }
        .status-paid {
            color: #48bb78;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Payment Confirmation</h1>
    <p>Hi {{ $user->first_name }} {{ $user->last_name }},</p>
    <p>Thanks for your payment. Here are your payment details:</p>

    <table class="payment-table">
        <tr>
            <th>Description</th>
            <td>Payment for Unit: {{ $tenant->unit->name ?? 'Not assigned' }}</td>
        </tr>
        <tr>
            <th>Amount Paid</th>
            <td class="amount">₱{{ number_format($tenant->monthly_payment, 2) }}</td>
        </tr>
        <tr>
            <th>Payment Method</th>
            <td>{{ $tenant->payment_method ?? 'Not specified' }}</td>
        </tr>
        <tr>
            <th>Payment Date</th>
            <td>{{ $tenant->created_at->format('F d, Y h:i A') }}</td>
        </tr>
        <tr>
            <th>Payment Status</th>
            <td class="status-paid">Paid</td>
        </tr>
        <tr>
            <th>Bills</th>
            <td>
                <strong>Name:</strong> {{ $tenant->bills->name ?? 'N/A' }}<br>
                <strong>Amount:</strong> {{ $tenant->bills->amount ?? 'N/A' }}<br>
                <strong>Due Date:</strong> {{ $tenant->bills->due_date ?? 'N/A' }}<br>
                <strong>For Month:</strong> {{ $tenant->bills->for_month ?? 'N/A' }}
            </td>
        </tr>
    </table>

    <p>Thank you for your business!</p>
</body>

</html>