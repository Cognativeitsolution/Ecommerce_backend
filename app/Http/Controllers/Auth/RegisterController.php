<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Jobs\VerifyEmailJob;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail;
use App\Mail\MyTestMail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_admin' => 0
        ]);
    }

    protected function google() {
        // Send user to google for signup with google
        return Socialite::driver('google')->redirect();
    }

    protected function googleRedirect() {
        // get user info comming from google
        $user = Socialite::driver('google')->user();

        $user = User::firstOrCreate([
            'email' => $user->email
        ], [
            'name'              => $user->name,
            'email'             => $user->email,
            'email_verified_at' => Carbon::now(),
            'password'          => Hash::make(Str::random(24)),
            'is_admin'          => 0
        ]);

        Auth::login($user, true);

        return redirect('/');
    }

    protected function facebook() {
        // Send user to facebook for signup with facebook
        return Socialite::driver('facebook')->redirect();
    }

    protected function facebookRedirect() {
        // get user info comming from facebook
        $user = Socialite::driver('facebook')->user();

        $user = User::firstOrCreate([
            'email' => $user->email
        ], [
            'name'              => $user->name,
            'email'             => $user->email,
            'email_verified_at' => Carbon::now(),
            'password'          => Hash::make(Str::random(24)),
            'is_admin'          => 0
        ]);

        Auth::login($user, true);

        return redirect()->route('web.home');
    }

    protected function linkedin() {
        // Send user to linkedin for signup with linkedin
        return Socialite::driver('linkedin')->redirect();
    }

    protected function linkedinRedirect() {
        // get user info comming from linked
        $user = Socialite::driver('linkedin')->user();

        $user = User::firstOrCreate([
            'email' => $user->email
        ], [
            'name'              => $user->name,
            'email'             => $user->email,
            'email_verified_at' => Carbon::now(),
            'password'          => Hash::make(Str::random(24)),
            'is_admin'          => 0
        ]);

        Auth::login($user, true);

        return redirect('/');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        //dispatch(new VerifyEmailJob($user));
        // $email = $request['email'] ;
        // $name = $request['name'] ;
        
        // echo "<pre>";
        // var_dump( $user["email"] );
        // exit();
        
        //$details['verification_code'] = 452221;
        //$details['id'] = $user->id ;

        //Mail::to($request->email)->send(new MyTestMail($details));

        //event(new Registered($user)); // its working on myServer
        
        $code = rand(1000000,9999999);
        
        $user->update(['year' => $code ]);
        $data = [
            'user_name'  => $user["name"],
            'code'  => $code
            ];
        
        Mail::send('emails.myTestMail', $data, function($message) use ($user) {
            $message->to($user["email"] , $user["name"])
            ->subject('Cognitive IT Solutions - Verify Email Address');
        });
    
        
        // New code for testing redirect
        $message = 'Registration successful, please verify your email to login';

        $status = 'success';
        
        return redirect('/')->with('message', $message)->with('status', $status);
        
        // New code for testing redirect close

        // if (!is_null($user->emailVerifiedAt)) {
        //     $this->guard()->login($user);
        // }

        // if ($response = $this->registered($request, $user)) {
        //     return $response;
        // }

        // return $request->wantsJson()
        //     ? new JsonResponse([], 201)
        //     : redirect($this->redirectPath());
    }

    protected function registered(Request $request, $user)
    {
        $message = 'Registration successful, please verify your email to login';

        $status = 'success';
        
        return redirect('/')->with('message', $message)->with('status', $status);
    }

}
