<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Database\Eloquent\Builder;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    public function forgot(request $request)
    {
        if ($request->isMethod('post')) {

            $confirmation_code = time();
            $user = User::where('email',$request->email)->first();
            if ($user) {
                $user->confirmcode = $confirmation_code;
                $user->save();
                Mail::send('emails.forgotpassword', ['confirmation_code'=>$confirmation_code], function($message) use ($request) {
            $message->to($request->email)
                ->subject('Verify your email address');
        });
                return redirect('account/forgot-password')->with('message','Vui lòng xác minh email');
            }

        }
        return view('auth.passwords.forgot');
    }
    public function verify($code)
    {
            $user = User::where('confirmcode',$code)->first();
            if ($user) {
                return view('auth.forgotpassword',compact('user'));
            }else{

                return redirect()->back();
            }
    }
    public function reset(request $request)
    {
        $user = User::where('email',$request->email)->first();
        $user->password = bcrypt($request->password);
        $user->save();
        Auth::login($user);
        return redirect('');
    }
}
