<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */

    protected function validator(array $input)
    {
        return Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class),],
            'username' => ['required', 'string', 'max:255'],
            'PhoNomber' => ['required', 'string', 'max:255'],
            'avatar' => ['sometimes', 'image', 'mimes:jpg,jpeg,bmp,svg,png', 'max:255'],
            'password' => $this->passwordRules(),
        ])->validate();
    }

    public function create(array $input)
    {
        if (request()->has('avatar')) {
            $avatarupload = request()->file('avatar');
            $avatarname = $avatarupload->getClientOriginalName();
            $avatarpath = public_path('/Avatar/');
            $avatarupload->move($avatarpath, $avatarname);
            return User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'username' => $input['username'],
                'PhoNumber' => $input['PhoNumber'],
                'avatar' =>  $avatarname,
                'password' => bcrypt($input['password']),
            ]);
        }
        return User::create([
            'name' => $input['name'],
            'username' => $input['username'],
            'PhoNumber' => $input['PhoNumber'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
