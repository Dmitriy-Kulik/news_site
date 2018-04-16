<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index', [
            'users' => User::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create', [
            'first_name' => '',
            'last_name' => '',
            'email' => '',
            'password' => '',
            'role' => '',
            'url_avatar' => '',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'first_name' => $request->request->all()['first_name'],
            'last_name' => $request->request->all()['last_name'],
            'email' => $request->request->all()['email'],
            'password' => Hash::make($request->request->all()['password']),
            'role' => $request->request->all()['role'],
            'url_avatar' => $request->request->all()['url_avatar'],

            ]);
        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(User $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //dd($user);

        return view('admin.users.edit', [
            'users' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //dd($user);

        $user->update([
            'first_name' => $request->request->all()['first_name'],
            'last_name' => $request->request->all()['last_name'],
            'email' => $request->request->all()['email'],
            'password' => Hash::make($request->request->all()['password']),
            'role' => $request->request->all()['role'],
            'url_avatar' => $request->request->all()['url_avatar'],
        ]);
        return redirect()->route('admin.users.index');
//        Hash::make($data['password'])
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $users)
    {
        //
    }
}
