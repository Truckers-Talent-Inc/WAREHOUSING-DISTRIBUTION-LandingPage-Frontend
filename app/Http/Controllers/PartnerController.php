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
            'contact_title' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'billing_email' => 'nullable|email',
            'freight_type' => 'nullable|array',
            'freight_type_other' => 'nullable',
            'commodity_description' => 'nullable',
            'avg_weight' => 'nullable|numeric',
            'dim_length' => 'nullable|numeric',
            'dim_width' => 'nullable|numeric',
            'dim_height' => 'nullable|numeric',
            'temp_reqs' => 'nullable',
            'is_palletized' => 'nullable|boolean',
            'num_pallets' => 'nullable|integer',
            'load_method' => 'nullable|array',
            'load_method_other' => 'nullable',
            'origin_location' => 'nullable',
            'origin_facility' => 'nullable',
            'destination_location' => 'nullable',
            'dest_facility' => 'nullable',
            'load_frequency' => 'nullable',
            'accessorials' => 'nullable|array',
            'accessorials_other' => 'nullable',
            'payment_terms' => 'nullable',
            'credit_references' => 'nullable',
            'capacity_lock' => 'nullable|boolean',
            'auth_name' => 'nullable',
            'auth_date' => 'nullable|date',
        ]);

        $messageBody = "New Company Application:\n\n";
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $value = implode(', ', $value);
            }
            $messageBody .= ucfirst(str_replace('_', ' ', $key)) . ": {$value}\n";
        }

        $to = 'info@truckerstalent.com';
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



