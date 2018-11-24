<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password'   => 'required|string|min:6|confirmed',
            'rue'        => 'required',
            'canton_id'  => 'required',
            'npa'        => 'required',
            'ville'      => 'required',
            'telephone'  => 'required',
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
            'name'       => $data['name'],
            'email'      => $data['email'],
            'password'   => Hash::make($data['password']),
            'rue'        => $data['rue'],
            'canton_id'  => $data['canton_id'],
            'npa'        => $data['npa'],
            'ville'      => $data['ville'],
            'telephone'  => isset($data['telephone']) && !empty($data['telephone']) ? $data['telephone'] : null,
            'fax'        => isset($data['fax']) && !empty($data['fax']) ? $data['fax'] : null,
            'cp'         => isset($data['cp']) && !empty($data['cp']) ? $data['cp'] : null,
            'complement' => isset($data['complement']) && !empty($data['complement']) ? $data['complement'] : null,
            'website'    => isset($data['website']) && !empty($data['website']) ? $data['website'] : null,
            'social'     => isset($data['social']) && !empty($data['social']) ? $data['social'] : null,
        ]);
    }
}
