<?php

namespace App\Http\Controllers\Auth;

use App\Team;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';

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
            'team_name' => 'required|string|max:191',
            'user1'=>'required|string|max:191',
            'user2'=>'required|string|max:191',
            'user3'=>'required|string|max:191',
            'user4'=>'required|string|max:191',
            'user5'=>'required|string|max:191',
            'user6'=>'required|string|max:191',
            'password' => 'required|string|min:6|confirmed',
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
        return Team::create([
            'team_name' => $data['team_name'],
            'user1'=>$data['user1'],
            'user2'=>$data['user2'],
            'user3'=>$data['user3'],
            'user4'=>$data['user4'],
            'user5'=>$data['user5'],
            'user6'=>$data['user6'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
