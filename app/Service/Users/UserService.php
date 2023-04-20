<?php
namespace App\Service\Users;

use App\Models\Users\User;


class UserService 
{
    public function index()
    {
        // $users = User::select('users.id', 'email', 'text')
        //     ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
        //     ->whereNotNull('posts.text')
        //     ->get()
        //     ->toArray();

        $user = User::find(1);
        $user->posts;
        $users = User::whereHas('posts')->toSql();
        // ->get()->toArray();

        dd($users);

        
            // ->where('name', 'like', "{$keyword}")
        // SELECT id, email FROM users WHERE id > 1;
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