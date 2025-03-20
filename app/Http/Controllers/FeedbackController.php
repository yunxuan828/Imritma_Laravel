<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    /**
     * The allowed email domains
     * 
     * @var array
     */
    protected $allowedDomains = [
        'ritmapres.com',
        'profvets.com',
        'trendatasc.com',
    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Apply auth middleware at route level instead
    }
    
    /**
     * Process the feedback submission
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitFeedback(Request $request)
    {
        // Check email domain restriction
        $user = Auth::user();
        $email = $user->email;
        $domain = substr($email, strpos($email, '@') + 1);
        
        if (!in_array($domain, $this->allowedDomains)) {
            Auth::logout();
            return redirect()->route('login')
                ->with('error', 'Access restricted to employees only. Your email domain is not authorized.');
        }
    
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'department' => 'required|string|max:255',
            'message' => 'required|string',
            'suggestions' => 'nullable|string',
        ]);

        // Prepare email data
        $emailData = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'department' => $validated['department'],
            'feedback' => $validated['message'],
            'suggestions' => $validated['suggestions'] ?? 'None provided'
        ];

        // Send email
        try {
            Mail::send('emails.it-feedback', $emailData, function($message) use ($emailData) {
                $message->to(config('mail.from.address', 'itadmin@ritmapres.com'))
                        ->subject('IT Support Feedback Submission')
                        ->replyTo($emailData['email'], $emailData['name']);
            });
            
            return redirect()->route('it-team')->with('status', 'success');
        } catch (\Exception $e) {
            return redirect()->route('it-team')->with('status', 'error');
        }
    }
}
