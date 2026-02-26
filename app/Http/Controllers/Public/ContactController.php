<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

class ContactController extends Controller
{
    public function index()
    {
        return view('public.contact');
    }

    public function store(Request $request)
    {
        // 🔥 Honeypot check
        if ($request->filled('website')) {
            abort(403);
        }

        // 🔥 Rate limiting (max 5 request per minute per IP)
        $key = 'contact-form:' . $request->ip();

        if (RateLimiter::tooManyAttempts($key, 5)) {
            return back()->withErrors([
                'message' => 'Terlalu banyak percobaan. Coba lagi nanti.'
            ]);
        }

        RateLimiter::hit($key, 60);

        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:150'],
            'subject' => ['nullable', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        // Trim input
        $validated = array_map('trim', $validated);

        Contact::create($validated);

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}