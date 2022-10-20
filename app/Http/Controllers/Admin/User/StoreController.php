<?php

namespace App\Http\Controllers\Admin\User;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke (StoreRequest $request)
    {

        $data = $request->validated();
        User::create($data);
        return redirect()->route('user.index');
    }
}
