<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\FrontendContent;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'organization' => 'nullable|string|max:255',
            'message'      => 'required|string',
        ]);

        // Save the message to the database
        \App\Models\ContactMessage::create($validated);

        // Fetch recipient email from DB or use fallback
        $recipientEmail = FrontendContent::where('section', 'Contact')
                            ->where('key', 'email')
                            ->value('value') ?? 'boldfellows4@gmail.com';

        try {
            Mail::to($recipientEmail)->send(new ContactFormMail($validated));
            return back()->with('success', 'Your message has been sent successfully! We will get back to you soon.');
        } catch (\Exception $e) {
            \Log::error('Contact Form Error: ' . $e->getMessage());
            return back()->with('error', 'Sorry, there was an issue sending your message. Please try again later.');
        }
    }
}
