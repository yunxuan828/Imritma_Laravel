<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
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
     * Display the IT team portal page
     *
     * @return \Illuminate\View\View
     */
    public function itTeam(Request $request)
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
        
        return view('it-team.index');
    }
}
