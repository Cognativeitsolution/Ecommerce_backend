<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Cookie;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    use AuthenticatesUsers {
        logout as performLogout;
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {  
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        $remember = $request->has('remember') ? true : false;

        if (!empty($user)) {
            if ($user->is_admin == 1) {
                // Handle admin login
                if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']), $remember)) {

                    // Remember Me Functionality
                    if ($remember) {
                        if (Cookie::has('user_r')) {
                            Cookie::queue(Cookie::forget('user_r'));
                        }
                        Cookie::queue(Cookie::make('user_r', Crypt::encryptString($user->email), 525600));
                    } else {
                        if (Cookie::has('user_r')) {
                            Cookie::queue(Cookie::forget('user_r'));
                        }
                    }
                    
                    return redirect()->route('admin.home');
                } else {
                    return redirect()->route('login')
                        ->with('error', 'Email-Address And Password Are Wrong.');
                }
            } else {
                // Handle user login
                if (!is_null($user->email_verified_at)) {
                    if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']), $remember)) {
                        //return redirect('/');

                        // Remember Me Functionality
                        if ($remember) {
                            if (Cookie::has('user_r')) {
                                Cookie::queue(Cookie::forget('user_r'));
                            }
                            Cookie::queue(Cookie::make('user_r', Crypt::encryptString($user->email), 525600));
                        } else {
                            if (Cookie::has('user_r')) {
                                Cookie::queue(Cookie::forget('user_r'));
                            }
                        }

                        return redirect()->intended();
                    } else {
                        return redirect()->route('login')
                            ->with('error', 'Email-Address And Password Are Wrong.');
                    }
                } else {
                    $errorMessage = 'Your email is not verified, please check your inbox to verify your email or click '
                        . '<form action="' . route('verification.send') . '" method="POST" style="display:inline">'
                        . csrf_field()
                        . '<input type="hidden" name="user_id" value="' . $user->id . '"></input>'
                        . '<button type="submit" class="btn btn-link" style="padding: 0">here</button>'
                        . '</form>'
                        . ' to resend the verification email';
                    return redirect()->route('login')
                        ->with('error', $errorMessage);
                }
            }
        } else {
            return redirect()->route('login')
                ->with('error', 'Email-Address And Password Are Wrong.');
        }
          
    }

    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect()->route('login');
    }

}
