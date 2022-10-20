<?php

namespace App\Http\Controllers\Admin\User;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke (Request $request)
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }
}