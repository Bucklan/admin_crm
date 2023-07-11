<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BaseController;
use Cookie;
use Http;

class LogoutController extends BaseController
{
    function logout()
    {
        $response = Http::baseUrl(config('app.api_path'))
            ->acceptJson()
            ->withToken(Cookie::get('bearer_token'))
            ->post('user/logout');
        $this->checkResponse($response);

        return redirect()
            ->route('login')
            ->withCookies([
                Cookie::forget('bearer_token'),
                Cookie::forget('permissions'),
            ]);
    }

}
