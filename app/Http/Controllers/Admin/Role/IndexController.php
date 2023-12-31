<?php

namespace App\Http\Controllers\Admin\Role;
use App\Models\Role;
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
        $roles = Role::all();
        return view('admin.role.index', compact('roles'));
    }
}
