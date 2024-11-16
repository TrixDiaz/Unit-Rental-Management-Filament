<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bills Updated</h1>

    <p>The bills have been updated for the following tenant:</p>

    <table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd; font-weight: bold;">Tenant</td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $tenant->tenant->name }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd; font-weight: bold;">Amount</td>
            <td style="padding: 10px; border: 1px solid #ddd;">₱{{ number_format($amount, 2) }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd; font-weight: bold;">Due Date</td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ \Carbon\Carbon::parse($dueDate)->format('F j, Y') }}</td>
        </tr>
    </table>

    <x-mail::button :url="config('app.url')">
        View Details
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</body>

</html>