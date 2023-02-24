<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store()
    {
        return User::all();
    }

    public function create($request)
    {
        return User::create($request);
    }

    public function show()
    {
        if(!Gate::allows('ascess-admin')){
            return redirect('dashboard');
        }else{
            $users=User::all();
            return view('user.UserRead',[
                'users' => $users
            ]);
        }

    }
}
