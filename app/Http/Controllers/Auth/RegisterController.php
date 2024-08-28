<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserRoleMaster;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/email/verify';

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
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'postal_code' => ['required', 'string', 'max:10'],
            'address_prefecture' => ['required', 'string', 'max:255'],
            'address_city' => ['required', 'string', 'max:255'],
            'address_street' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:20'],
            'birth_date' => ['required', 'date'],
            'occupation' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed', 'regex:/[a-zA-Z]/', 'regex:/[0-9]/'], // 英数字を含む
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
        // 「無料会員」のロールIDを取得
        $freeMemberRoleId = UserRoleMaster::where('user_role', '無料会員')->first()->id;

        return User::create([
            'last_name' => $data['last_name'],
            'first_name' => $data['first_name'],
            'postal_code' => $data['postal_code'],
            'address_prefecture' => $data['address_prefecture'],
            'address_city' => $data['address_city'],
            'address_street' => $data['address_street'],
            'phone_number' => $data['phone_number'],
            'birth_date' => $data['birth_date'],
            'occupation' => $data['occupation'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_role_master_id' => $freeMemberRoleId, // ロールIDを設定
        ]);
    }
}
