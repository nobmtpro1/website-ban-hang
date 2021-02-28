<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\register;
use Auth;


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
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function register(request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request,[
            'email'=>'unique:users,email'
        ],[
            'email.unique'=>'Email này đã tồn tại'
        ]);
            $confirmation_code=time();
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->phone = $request->phone;
            $user->confirmcode = $confirmation_code;
            $user->save();
            Mail::send('emails.verify', ['confirmation_code'=>$confirmation_code], function($message) use ($request) {
            $message->to($request->email, $request->name)
                ->subject('Verify your email address');
        });
            return redirect()->back()->with('message','Vui lòng xác thực email');
        }

        return view('auth.register');
    }
    public function verify($code)
    {

        if ($user = User::where('confirmcode',$code)->first()) {
            $user->confirmed = 1;
            $user->confirmcode =null;
            $user->save();
            Auth::login($user);
            return redirect('');
        }else{

            return redirect('account/register')->with('message','Đăng ký thất bại');
        }

    }
}
