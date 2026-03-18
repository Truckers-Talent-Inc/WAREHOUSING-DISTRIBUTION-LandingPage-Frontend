@php
$colors = [
    'maroon' => '#731022',
    'orange' => '#FFA500',
    'green' => '#008000',
    'white' => '#FFFFFF',
    'abyss' => '#0b1120',
    'black' => '#000000',
];

$field_labels = [
    'company_name' => 'Company Name',
    'dba' => 'DBA',
    'mc_dot' => 'MC/DOT',
    'business_address' => 'Business Address',
    'city_state_zip' => 'City, State, Zip',
    'contact_name' => 'Contact Name',
    'contact_title' => 'Contact Title',
    'phone' => 'Phone',
    'email' => 'Email',
    'billing_email' => 'Billing Email',
    'freight_type' => 'Freight Type',
    'freight_type_other' => 'Freight Type Other',
    'commodity_description' => 'Commodity Description',
    'avg_weight' => 'Average Weight',
    'dim_length' => 'Dimension Length',
    'dim_width' => 'Dimension Width',
    'dim_height' => 'Dimension Height',
    'temp_reqs' => 'Temperature Requirements',
    'is_palletized' => 'Is Palletized',
    'num_pallets' => 'Number of Pallets',
    'load_method' => 'Load Method',
    'load_method_other' => 'Load Method Other',
    'origin_location' => 'Origin Location',
    'origin_facility' => 'Origin Facility',
    'destination_location' => 'Destination Location',
    'dest_facility' => 'Destination Facility',
    'load_frequency' => 'Load Frequency',
    'accessorials' => 'Accessorials',
    'accessorials_other' => 'Accessorials Other',
    'payment_terms' => 'Payment Terms',
    'credit_references' => 'Credit References',
    'capacity_lock' => 'Capacity Lock',
    'auth_name' => 'Authorized Name',
    'auth_date' => 'Authorized Date',
    'mc_number' => 'MC Number',
    'usdot_number' => 'USDOT Number',
    'ein' => 'EIN',
    'years_in_operation' => 'Years in Operation',
    'operation_type' => 'Operation Type',
    'equipment_type' => 'Equipment Type',
    'equipment_type_other' => 'Equipment Type Other',
    'avg_gross' => 'Average Gross',
    'avg_monthly_invoice' => 'Average Monthly Invoice',
    'currently_factoring' => 'Currently Factoring',
    'current_factoring_company' => 'Current Factoring Company',
    'current_rate' => 'Current Rate',
    'contract_expiration' => 'Contract Expiration',
    'early_termination_fee' => 'Early Termination Fee',
    'top_broker_1' => 'Top Broker 1',
    'top_broker_2' => 'Top Broker 2',
    'top_broker_3' => 'Top Broker 3',
    'avg_broker_terms' => 'Average Broker Terms',
    'funding_speed' => 'Funding Speed',
    'est_monthly_funding' => 'Estimated Monthly Funding',
    'bank_name' => 'Bank Name',
    'routing_number' => 'Routing Number',
    'account_number' => 'Account Number',
    'additional_services' => 'Additional Services',
    'bundled_services' => 'Bundled Services',
    'doc_checklist' => 'Document Checklist',
];
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>New Company Form Submission</title>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(115, 16, 34, 0.2);
        border: 2px solid {{ $colors['maroon'] }};
    }
    th, td {
        padding: 0.8em 1em;
        border-bottom: 1px solid {{ $colors['maroon'] }};
    }
    thead {
        background-color: {{ $colors['maroon'] }};
        color: {{ $colors['white'] }};
    }
    th {
        text-align: left;
        font-weight: 700;
        letter-spacing: 0.03em;
    }
    tbody tr {
        background-color: {{ $colors['abyss'] }};
        color: {{ $colors['white'] }};
        transition: background-color 0.3s ease;
    }
    tbody tr:nth-child(even) {
        background-color: #141a2b; /* Slightly lighter abyss */
    }
    tbody tr:hover {
        background-color: {{ $colors['maroon'] }};
        color: {{ $colors['white'] }};
    }
</style>
</head>
<body>

<h2 style="text-align:center; color: {{ $colors['black'] }};">New Company Form Submission</h2>

<table>
    <thead>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $field => $value)
            @if(!is_null($value) && $value !== '' && !(is_array($value) && count($value) === 0))
                <tr>
                    <td>{{ $field_labels[$field] ?? ucwords(str_replace('_', ' ', $field)) }}</td>
                    <td>
                        @if(is_array($value))
                            {{ implode(', ', $value) }}
                        @else
                            {{ $value }}
                        @endif
                    </td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>

</body>
</html>