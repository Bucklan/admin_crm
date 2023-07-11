<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BaseController;
use Cookie;
use Http;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends BaseController
{
    public function index()
    {
        return view('auth.login');
    }

    /**
     * @throws ValidationException
     */
    public function login(Request $request): string
    {
//        dd(config('app.api_path'));
        $response = Http::baseUrl(config('app.api_path'))
            ->acceptJson()
            ->post('/auth/login', $request->all());
//        $response = Http::get('http://api.cosmos.test/api/client/cities');
//dd($response->json());
        $this->checkResponse($response);

        $minutes = 60 * 24 * 365;
        Cookie::queue(cookie('bearer_token', $response->json('token'), $minutes));
        Cookie::queue(cookie('permissions', json_encode($response->json('permissions')), $minutes));
//dd(\Auth::user());
        return redirect()->route('admin.dashboard');
    }
}
