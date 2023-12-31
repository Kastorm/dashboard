<?php

namespace App\Http\Controllers\Admin\User;
use App\Http\Requests\Admin\Role\StoreRequest;
use App\Http\Controllers\Controller;

use App\Models\User;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke (User $user)
    {

        return view('admin.user.show', compact('user'));

    }
}
