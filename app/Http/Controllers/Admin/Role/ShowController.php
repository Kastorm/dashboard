<?php

namespace App\Http\Controllers\Admin\Role;
use App\Http\Requests\Admin\Role\StoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Role;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke (Role $role)
    {

        return view('admin.role.show', compact('role'));

    }
}
