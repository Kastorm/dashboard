<?php

namespace App\Http\Controllers\Admin\User;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use App\Http\Controllers\Controller;


class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke (UpdateRequest$request,User $user)
    {
$data = $request->validated();
$user->update($data);
        return redirect()->route('user.index');
    }
}
