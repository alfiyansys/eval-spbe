<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Role;
use App\User;
use App\Http\Requests\UserRequest;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param User $model
     * @return View
     */
    public function index(User $model)
    {
//        abort_unless(Gate::allows('user_access'), 403);

        return view('users.index', ['users' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new user
     *
     * @return View
     */
    public function create()
    {
//        abort_unless(Gate::allows('user_create'), 403);

        $roles = Role::all()->pluck('title', 'id');

        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created user in storage
     *
     * @param StoreUserRequest $request
     * @return RedirectResponse
     */
    public function store(StoreUserRequest $request)
    {
//        abort_unless(Gate::allows('user_create'), 403);

        $user = User::query()->create($request->merge(['password' => Hash::make($request->get('password'))])->all());

        return redirect()->route('user.index')->with('status', __('User successfully created.'));
    }

    /**
     * Show a specific user
     *
     * @param User $user
     * @return Factory|View
     */
    public function show(User $user) {
//        abort_unless(Gate::allows('user_show'), 403);

        $user->load('roles');

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param User $user
     * @return View
     */
    public function edit(User $user)
    {
//        abort_unless(Gate::allows('user_edit'), 403);

        $roles = Role::all()->pluck('title', 'id');

        $user->load('roles');

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified user in storage
     *
     * @param UserRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(UpdateUserRequest $request, User  $user)
    {
//        abort_unless(Gate::allows('user_edit'), 403);

        $hasPassword = $request->get("password");
        $user->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$hasPassword ? '' : 'password']
        ));
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('user.index')->with('status', __('User successfully updated.'));
    }

    /**
     * Remove the specified user from storage
     *
     * @param User $user
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(User  $user)
    {
//        abort_unless(Gate::allows('user_show'), 403);

        $user->delete();

        return redirect()->route('user.index')->with('status', __('User successfully deleted.'));
    }
}
