@component('mail::message')
# Rental Contract

Dear {{ $user->name }},

We are pleased to inform you that your application for renting a unit has been approved.

## Unit Details:
- **Unit Name:** {{ $concourse->name ?? 'N/A' }}
- **Monthly Rent:** ₱{{ number_format($monthlyPayment ?? 0, 2) }}
- **Lease Start Date:** {{ $leaseStart ? $leaseStart->format('F d, Y') : 'N/A' }}
- **Lease End Date:** {{ $leaseEnd ? $leaseEnd->format('F d, Y') : 'N/A' }}
- **Lease Term:** {{ $leaseTerm ?? 'N/A' }} months

## Additional Charges:
@if(is_array($bills) && count($bills) > 0)
@foreach($bills as $bill => $amount)
- **{{ ucfirst($bill) }}:** ₱{{ number_format($amount, 2) }}
@endforeach
@else
No additional charges.
@endif

## Unit Amenities:
@if(isset($unit->amenities) && is_array($unit->amenities) && count($unit->amenities) > 0)
@foreach($unit->amenities as $amenity)
- {{ $amenity }}
@endforeach
@else
No amenities listed.
@endif

## Terms and Conditions:
1. The tenant agrees to pay the monthly rent of ₱{{ number_format($monthlyPayment ?? 0, 2) }} on or before the 1st day of each month.
2. The lease term is for {{ $leaseTerm ?? 'N/A' }} months, starting from {{ $leaseStart ? $leaseStart->format('F d, Y') : 'N/A' }} to {{ $leaseEnd ? $leaseEnd->format('F d, Y') : 'N/A' }}.
3. The tenant is responsible for paying the additional charges as listed above.
4. The tenant agrees to abide by all rules and regulations of the Unit.
5. Any damages to the unit beyond normal wear and tear will be the responsibility of the tenant.

Please review the terms and conditions carefully. If you have any questions or concerns, please don't hesitate to contact us.

To confirm your acceptance of this contract, please reply to this email with your agreement or visit in our admin to sign the physical copy of the contract.

Thank you for choosing our property.

Best regards,<br>
Rentify

@endcomponent