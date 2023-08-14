<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $data['users'] = User::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.user.index')->with('data', $data);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(StoreUserRequest $request)
    {
        User::create([
            'name' => $request->get('name'),
            'password' => $request->get('password'),
            'email' => $request->get('email'),
        ]);

        if ($request->has('save_and_continue')) {
            return back();
        }

        return redirect()->to(route('admin.user.index'));
    }

    public function edit( User $user )
    {
        $data['user'] = $user;
        return view('admin.user.edit')->with('data', $data);
    }

    public function update(User $user, UpdateUserRequest $request)
    {
        $user->update( array_filter($request->validated()) );
        if ($request->has('save_and_continue')) {
            return back();
        }

        return redirect()->to(route('admin.user.index'));
    }

    public function show( User $user )
    {
        $data['user'] = $user;
        return view('admin.user.show')->with('data', $data);
    }

    public function destroy(  User $user  )
    {
        $user->delete();
        return redirect()->to(route('admin.user.index'));
    }

}
