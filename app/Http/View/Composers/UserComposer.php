<?php

namespace App\Http\View\Composers;

use Cache;
use Cookie;
use Http;
use Illuminate\View\View;

class UserComposer
{
    public function compose(View $view): void
    {
        $response = Cache::remember(Cookie::get('bearer_token'), now()->addHour(), function () {
            return Http::baseUrl(config('app.api_path'))
                ->withToken(Cookie::get('bearer_token'))
                ->get('user/account/profile')
                ->json();
        });

        $view->with('user', $response);
    }
}
