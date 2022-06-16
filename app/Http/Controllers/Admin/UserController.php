<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $users = User::paginate(15);
        $users = User::orderByDesc('created_at')->take(10)->get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        User::create([
            'name_org'             => $request->input('name-org'),
            'full_name_org'        => $request->input('full-name-org'),
            'address_org'          => $request->input('address-org'),
            'inn'                  => $request->input('inn'),
            'kpp'                  => $request->input('kpp'),
            'ogrn'                 => $request->input('ogrn'),
            'name_bank'            => $request->input('name-bank'),
            'payment_account'      => $request->input('payment-account'),
            'corresp_account'      => $request->input('corresp-account'),
            'bik'                  => $request->input('bik'),
            'fio_general_manager'  => $request->input('fio-general-manager'),
            'site'                 => $request->input('site'),
            'phone'                => $request->input('phone'),
            'email'                => $request->input('email'),
            'name'                 => $request->input('email'),
            'password'             => Hash::make($request->input('password')),
            'role'                 => (int)$request->input('role'),
        ]);

        $request->session()->flash('success', 'Пользователь добавлен');

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required',
            'role' => 'required',
        ]);

        $user = User::find($id);

        $user->update([
            'name_org'             => $request->input('name-org'),
            'full_name_org'        => $request->input('full-name-org'),
            'address_org'          => $request->input('address-org'),
            'inn'                  => $request->input('inn'),
            'kpp'                  => $request->input('kpp'),
            'ogrn'                 => $request->input('ogrn'),
            'name_bank'            => $request->input('name-bank'),
            'payment_account'      => $request->input('payment-account'),
            'corresp_account'      => $request->input('corresp-account'),
            'bik'                  => $request->input('bik'),
            'fio_general_manager'  => $request->input('fio-general-manager'),
            'site'                 => $request->input('site'),
            'phone'                => $request->input('phone'),
            'email'                => $request->input('email'),
            'name'                 => $request->input('email'),
            'password'             => Hash::make($request->input('password')),
            'role'                 => (int)$request->input('role'),
        ]);

        if ($request->input('password')) {
            $user->password = Hash::make($request->input('password'));
            $user->save();
        }

        $request->session()->flash('success', 'Пользователь изменен');

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Пользователь удален');
    }
}
