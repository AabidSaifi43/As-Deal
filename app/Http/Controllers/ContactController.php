<?php
// app/Http/Controllers/ContactController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::send([], [], function ($message) use ($data) {
            $message->to('your-email@example.com')
                ->subject($data['subject'])
                ->html('<h1>Contact Enquiry</h1><p>Name: ' . $data['name'] . '</p><p>Email: ' . $data['email'] . '</p><p>Message: ' . $data['message'] . '</p>');
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}

