<?php
namespace App\Service\Users;

use App\Models\Users\User;


class UserService 
{
    public function index()
    {
        return view('users.index');
    }

    public function store(array $request): User
    {
        return User::create($request);
    }

    public function test(array $request)
    {
        $user = User::create($request);
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->color = 'red';
        $user->save();
        return true;
    }


}