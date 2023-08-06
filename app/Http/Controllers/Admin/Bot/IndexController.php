<?php

namespace App\Http\Controllers\Admin\Bot;
use App\Models\Bot;
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
        $bot = Bot::all();
        return view('admin.bot.index', compact('bot'));
    }
}
