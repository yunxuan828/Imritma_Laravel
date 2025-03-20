<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use App\Models\User;

class MicrosoftLoginController extends Controller
{
    /**
     * Allowed email domains for authentication
     *
     * @var array
     */
    protected $allowedDomains = [
        'ritmapres.com',
        'profvets.com',
        'trendatasc.com',
    ];

    /**
     * Redirect the user to the Microsoft authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('microsoft')
            ->stateless()
            ->with([
                'prompt' => 'select_account',
                'response_type' => 'code',
                'response_mode' => 'query'
            ])
            ->redirect();
    }

    /**
     * Obtain the user information from Microsoft.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        try {
            Log::info('Starting Microsoft callback handling');
            
            // Get the user from Microsoft
            $microsoftUser = Socialite::driver('microsoft')->stateless()->user();
            
            Log::info('Microsoft user data received', [
                'id' => $microsoftUser->getId(),
                'name' => $microsoftUser->getName(),
                'email' => $microsoftUser->getEmail() ?? 'No email provided',
                'has_token' => !empty($microsoftUser->token),
            ]);
            
            // Check if email is available
            if (empty($microsoftUser->getEmail())) {
                Log::error('No email received from Microsoft');
                return redirect()->route('login')
                    ->with('error', 'No email address received from Microsoft. Please ensure your Microsoft account has an email address.');
            }
            
            // Check if email domain is allowed
            $email = $microsoftUser->getEmail();
            $domain = substr($email, strpos($email, '@') + 1);
            
            Log::info('Checking email domain', ['domain' => $domain]);
            
            if (!in_array($domain, $this->allowedDomains)) {
                Log::warning('Unauthorized domain attempt', ['domain' => $domain]);
                return redirect()->route('login')
                    ->with('error', 'Access restricted to employees only. Your email domain is not authorized.');
            }
            
            // Find or create user
            $user = User::firstOrCreate(
                ['email' => $email],
                [
                    'name' => $microsoftUser->getName(),
                    'password' => bcrypt(Str::random(16)), // Random password
                    'microsoft_id' => $microsoftUser->getId(),
                ]
            );
            
            Log::info('User authenticated successfully', ['user_id' => $user->id]);
            
            // Log the user in
            Auth::login($user, true);
            
            return redirect()->route('it-team');
            
        } catch (\Exception $e) {
            // Log the detailed error
            Log::error('Microsoft authentication error: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
            
            return redirect()->route('login')
                ->with('error', 'Authentication failed: ' . $e->getMessage());
        }
    }

    /**
     * Logout the user.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('login');
    }
}
