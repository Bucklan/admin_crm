<?php

namespace App\Http\View\Composers;

use Cache;
use Cookie;
use Http;
use Illuminate\View\View;

class CityComposer
{
    public function compose(View $view): void
    {
        $response = Cache::remember(Cookie::get('cities_list'), now()->addHour(), function () {
            return Http::baseUrl(config('app.api_path'))
                ->withToken(Cookie::get('bearer_token'))
                ->get('user/cities/cities-list')
                ->json();
        });

        $city_id = Cache::get('city_id');

        $user_city = $response[$city_id] ?? null;

        $view->with('cities_list', $response);
        $view->with('city_id', $user_city);
    }
}
