<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PartnerController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
    'company_name' => 'required',
    'dba' => 'nullable',
    'mc_dot' => 'nullable',
    'business_address' => 'required',
    'city_state_zip' => 'required',
    'contact_name' => 'required',
    'contact_title' => 'nullable',
    'phone' => 'required',
    'email' => 'required|email',
    'billing_email' => 'nullable|email',
    'freight_type' => 'nullable',
    'freight_type_other' => 'nullable',
    'commodity_description' => 'nullable',
    'avg_weight' => 'nullable|numeric',
    'dim_length' => 'nullable|numeric',
    'dim_width' => 'nullable|numeric',
    'dim_height' => 'nullable|numeric',
    'temp_reqs' => 'nullable',
    'is_palletized' => 'nullable',
    'num_pallets' => 'nullable',
    'load_method' => 'nullable',
    'load_method_other' => 'nullable',
    'origin_location' => 'nullable',
    'origin_facility' => 'nullable',
    'destination_location' => 'nullable',
    'dest_facility' => 'nullable',
    'load_frequency' => 'nullable',
    'accessorials' => 'nullable',
    'accessorials_other' => 'nullable',
    'payment_terms' => 'nullable',
    'credit_references' => 'nullable',
    'capacity_lock' => 'nullable',
    'auth_name' => 'required',
    'auth_date' => 'required',
    'mc_number' => 'nullable',
    'usdot_number' => 'nullable',
    'ein' => 'nullable',
    'years_in_operation' => 'nullable',
    'operation_type' => 'nullable',
    'equipment_type' => 'nullable',
    'equipment_type_other' => 'nullable',
    'avg_gross' => 'nullable',
    'avg_monthly_invoice' => 'nullable',
    'currently_factoring' => 'nullable',
    'current_factoring_company' => 'nullable',
    'current_rate' => 'nullable',
    'contract_expiration' => 'nullable',
    'early_termination_fee' => 'nullable',
    'top_broker_1' => 'nullable',
    'top_broker_2' => 'nullable',
    'top_broker_3' => 'nullable',
    'avg_broker_terms' => 'nullable',
    'funding_speed' => 'nullable',
    'est_monthly_funding' => 'nullable',
    'bank_name' => 'nullable',
    'routing_number' => 'nullable',
    'account_number' => 'nullable',
    'additional_services' => 'nullable',
    'bundled_services' => 'nullable',
    'doc_checklist' => 'nullable',
    'documents' => 'nullable',
]);

        $messageBody = "New Company Application:\n\n";
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $value = implode(', ', $value);
            }
            $messageBody .= ucfirst(str_replace('_', ' ', $key)) . ": {$value}\n";
        }

        $to = 'valentin.faciano.dev@gmail.com';
        $subject = "Company Application: {$data['company_name']}";

        try {
            Mail::raw($messageBody, function ($message) use ($to, $subject) {
                $message->to($to)
                        ->subject($subject)
                        ->from(config('mail.from.address'), config('mail.from.name'));
            })->queue();

            return back()->with('success', 'Email sent successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
}



