<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Contract</title>
</head>

<body>
    <h1>Rental Contract</h1>

    <p>Dear {{ $user->name }},</p>

    <p>We are pleased to inform you that your application for renting a unit has been approved.</p>

    <h2>Unit Details:</h2>
    <ul style="list-style-type: none; padding-left: 0;">
        <li><strong>Unit Name:</strong> {{ $unit->name ?? 'N/A' }}</li>
        <li><strong>Monthly Rent:</strong> ₱{{ number_format($monthlyPayment ?? 0, 2) }}</li>
        <li><strong>Lease Start Date:</strong> {{ $leaseStart ? $leaseStart->format('F d, Y') : 'N/A' }}</li>
        <li><strong>Lease End Date:</strong> {{ $leaseEnd ? $leaseEnd->format('F d, Y') : 'N/A' }}</li>
        <li><strong>Lease Term:</strong> {{ $leaseTerm ?? 'N/A' }} months</li>
    </ul>

    <h2>Additional Charges:</h2>
    @if(is_array($bills) && count($bills) > 0)
    <ul style="list-style-type: none; padding-left: 0;">
        @foreach($bills as $bill => $amount)
        <li><strong>{{ ucfirst($bill) }}:</strong> ₱{{ number_format($amount, 2) }}</li>
        @endforeach
    </ul>
    @else
    <p>No additional charges.</p>
    @endif

    <h2>Unit Amenities:</h2>
    @if(isset($unit->amenities) && is_array($unit->amenities) && count($unit->amenities) > 0)
    <ul style="list-style-type: none; padding-left: 0;">
        @foreach($unit->amenities as $amenity)
        <li>{{ $amenity }}</li>
        @endforeach
    </ul>
    @else
    <p>No amenities listed.</p>
    @endif

    <h2>Terms and Conditions:</h2>
    <p>1. The tenant agrees to pay the monthly rent of ₱{{ number_format($monthlyPayment ?? 0, 2) }} on or before the 1st day of each month.</p>
    <p>2. The lease term is for {{ $leaseTerm ?? 'N/A' }} months, starting from {{ $leaseStart ? $leaseStart->format('F d, Y') : 'N/A' }} to {{ $leaseEnd ? $leaseEnd->format('F d, Y') : 'N/A' }}.</p>
    <p>3. The tenant is responsible for paying the additional charges as listed above.</p>
    <p>4. The tenant agrees to abide by all rules and regulations of the Unit.</p>
    <p>5. Any damages to the unit beyond normal wear and tear will be the responsibility of the tenant.</p>

    <p>Please review the terms and conditions carefully. If you have any questions or concerns, please don't hesitate to contact us.</p>

    <p>To confirm your acceptance of this contract, please reply to this email with your agreement or visit in our admin to sign the physical copy of the contract.</p>

    <p>Thank you for choosing our property.</p>

    <p>Best regards,<br>Rentify</p>
</body>

</html>