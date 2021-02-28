<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Support\Facades\Mail;

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

    use AuthenticatesUsers;

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
    public function login(request $request)
    {
        if ($request->isMethod('post')) {
            $user = User::where('email',$request->email)->first();
            if ($user && $user->confirmed==0) {
                $confirmation_code=time();
                $user->confirmcode = $confirmation_code;
                 $user->save();
            Mail::send('emails.verify', ['confirmation_code'=>$confirmation_code], function($message) use ($request) {
            $message->to($request->email, $request->name)
                ->subject('Verify your email address');
        });
                return redirect()->back()->with('message','Vui lòng xác thực email');
            }
            if (Auth::attempt(['email'=>$request->email,'password'=>$request->password,'confirmed'=>1])) {
                if (Auth::user()->level===1) {
                    return redirect('admin');
                }else{
                    return redirect('');
                }

            }else{
                return redirect()->back()->with('message','Đăng nhập thất bại');
            }
        }
        return view('auth.login');
    }
    public function logout()
    {
        if (Auth::user()->level===1) {
            Auth::logout();
        return redirect('');
        }else{
            Auth::logout();
        return redirect()->back();
        }

    }
    public function googleredirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googlecallback()
    {
        $user = Socialite::driver('google')->user();
          $existingUser = User::where('email', $user->getEmail())->first();
        if ($existingUser) {
                auth()->login($existingUser, true);
        } else {
                $newUser                    = new User;

                $newUser->name              = $user->getName();
                $newUser->email             = $user->getEmail();


                $newUser->save();
                auth()->login($newUser, true);

        }
        return redirect('/');

    }
}
