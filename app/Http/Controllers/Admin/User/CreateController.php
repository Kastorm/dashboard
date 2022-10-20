<?php

namespace App\Http\Controllers\Admin\User;
use App\Models\Entity;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke (Request $request)
    {
           $roles=Role::all();
        $entities=Entity::all();
        return view('admin.user.create', compact('roles','entities'));
    }
}
