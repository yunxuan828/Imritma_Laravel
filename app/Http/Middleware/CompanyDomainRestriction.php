<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyDomainRestriction
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
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $email = $user->email;
            
            $domain = substr($email, strpos($email, '@') + 1);
            
            if (!in_array($domain, $this->allowedDomains)) {
                Auth::logout();
                
                return redirect()->route('login')->with('error', 'Access restricted to employees only. Your email domain is not authorized.');
            }
        }
        
        return $next($request);
    }
}
