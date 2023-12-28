<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUser()
    {
        $users = User::all();
        $total_clients = User::where('role_id', '2')->count();
        $total_products = Product::count();
        $total_projects = Project::count();

        return view('user_dashboard')->with(compact('users', 'total_clients', 'total_products', 'total_projects'));
    }

    public function addUser()
    {
        return view('auth.register');
    }

    public function deactivateUser(User $user)
    {
        $user->update([
            'is_active' => '0'
        ]);

        return redirect()->route('all_user');
    }

    public function activateUser(User $user)
    {
        $user->update([
            'is_active' => '1'
        ]);

        return redirect()->route('all_user');
    }
}
