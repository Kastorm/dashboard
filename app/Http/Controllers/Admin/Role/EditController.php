<?php

namespace App\Http\Controllers\Admin\Role;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke (Role $role)
    {

        return view('admin.role.edit', compact('role')) ;
    }
}
