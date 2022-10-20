<?php

namespace App\Http\Controllers\Admin\Role;
use App\Http\Requests\Admin\Role\UpdateRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke (UpdateRequest$request,Role $role)
    {
$data = $request->validated();
$role->update($data);
        return view('admin.role.show', compact('role')) ;
    }
}
