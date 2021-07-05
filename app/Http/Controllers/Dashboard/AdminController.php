<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::whereIn('role_id', [Role::IS_ADMIN, Role::IS_HEAD_ADMIN])->orderByDesc('created_at')->paginate(10);

        return view('dashboard.admins.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::whereIn('id', [Role::IS_ADMIN, ROLE::IS_HEAD_ADMIN])->get();

        return view('dashboard.admins.create', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('dashboard.admins.index')->with('flash_status', 'Admin has been created');
    }

    public function destroy($id, Request $request)
    {
        if (Auth::id() == $id) {
            abort(403);
        }

        User::destroy($id);

        return redirect()->route('dashboard.admins.index')->with('flash_status', 'Admin has been deleted');
    }
}
