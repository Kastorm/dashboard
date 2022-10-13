<?php

namespace App\View\Composers;
use Illuminate\View\View;
use App\Models\User;

class AppComposer
{
    public function compose (View $view)
    {
        $view->with ('user_count', User::count() );
    }

}
