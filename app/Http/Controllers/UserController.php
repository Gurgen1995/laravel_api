<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(): View
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create(): View
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => 'required|between:3, 40',
            'last_name' => 'required|between:3, 40',
            'phone' => 'required|string|regex:/^\+7\d{10}$/',
            'avatar' => 'required|file|image|mimes:jpg,png|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('avatar')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['avatar'] = "$profileImage";
        }

        User::create($input);

        return redirect()->route('users.index')->with('success', 'User has been created successfully.');
    }

    public function show(User $user): View
    {
        return view('user.show',compact('user'));
    }


    public function edit(User $user): View
    {
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, User $user): RedirectResponse
    {
        $request->validate([
            'first_name' => 'required|between:3, 40',
            'last_name' => 'required|between:3, 40',
            'phone' => 'required|string|regex:/^\+7\d{10}$/'
        ]);

        $input = $request->all();

        if ($image = $request->file('avatar')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['avatar'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $user->update($input);

        return redirect()->route('users.index')
            ->with('success','User Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();

        return redirect()->route('users.index')
            ->with('success','User has been deleted successfully');
    }
}
