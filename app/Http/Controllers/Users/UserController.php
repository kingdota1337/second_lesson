<?php

namespace App\Http\Controllers\Users;

use App\Models\Users\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UserStoreRequest;
use App\Service\Users\UserService as Service;

class UserController extends Controller
{
    protected $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return $this->service->index();
    }

    public function store(UserStoreRequest $request)
    {
        return $this->service->store($request->validated());
    }


    public function edit(User $user)
    {
        return $this->service->edit($user);
        $posts = $user->posts;
        
        return view('users.edit', compact('user'));
    }
}
