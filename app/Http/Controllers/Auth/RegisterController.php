<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\UserMeta;
use Mail;
use App\Mail\SendMailActiveAccount;
use Redirect;
use Session;
use Socialite;
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
    protected $redirectTo = '/login';

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
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $name = '';
        if (isset($data['name']) && $data['name']) {
            $name = $data['name'];
        }
        return User::create([
            'name' => $name,
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'remember_token' => $data['_token'],
        ]);
    }

    /*
    @overide register
    */
    public function register(Request $request)
    {
        $data = $request->all();

        $this->validator($data)->validate();

        event(new Registered($user = $this->create($data)));

        Mail::to($request->email)->send(new SendMailActiveAccount(
            array('id' => $user->id, 'code' => $user->password)//To create url active
        ));
        UserMeta::create(['user_id' => $user->id]);//Create more info in table user_meta

        Session::flash('success', 'Create account successfully! Please check email to active this account.');

        return Redirect::to('/');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        if ($authUser) {
            Auth::login($authUser, true);
        } else {
            Session::flash('error', 'This email has been used');
        }

        return redirect()->back();
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();

        //check user registed by email
        $user_email = User::where('email', '=', $user->email)
            ->where('provider_id', '<>', $user->id)
            ->first();

        if ($authUser) {
            return $authUser;
        }

        //dd($user_email);
        if ($user_email) {
            return false;
        }
        $new_user = new User();
        $new_user->name = $user->name;
        $new_user->email = $user->email;
        $new_user->provider = $provider;
        $new_user->provider_id = $user->id;
        $new_user->isactive = 1;
        $new_user->save();
        return $new_user;
    }
}
