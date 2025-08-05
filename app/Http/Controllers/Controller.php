<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function index()
    {
        return view('index');
    }

    function about()
    {
        return view('about');
    }

    function contact()
    {
        return view('contact');
    }

    function faqs()
    {
        return view('faqs');
    }

    function gallery()
    {
        return view('gallery');
    }

    function bookNow()
    {
        return view('bookNow');
    }

    function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'property_type' => 'required|string',
            'budget' => 'required|string',
            'mreif' => 'required|string',
            'payment_preference' => 'required|string',
            'schedule' => 'required|string',
        ]);

        Applicant::create($validated);

        try {
            /** Store information to include in mail in $data as an array */
            $data = array(
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'property_type' => $request->property_type,
                'budget' => $request->budget,
                'mreif' => $request->mreif,
                'payment_preference' => $request->payment_preference,
                'schedule' => $request->schedule,
                'created_at' => now(),
                'admin' => 'customercare@bcal.ng',
            );

            /** Send message to the admin */
            Mail::send('emails.form-submission', $data, function ($m) use ($data) {
                $m->to($data['admin'])->subject(config('app.name').' - Application Form Notification');
            });
        } catch (Exception $e) {
            Log::error($e);
        }

        return response()->json(['message' => 'Application submitted successfully']);
    }
}
