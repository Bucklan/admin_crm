<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\BaseController;
use Cookie;
use Http;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class DashboardController extends BaseController
{
    protected $url = 'admin.dashboard.';
    protected $route = 'admin.dashboard.';

    /**
     * @throws ValidationException
     */
    public function index(): View
    {
        $response = Http::baseUrl(config('app.api_path'))
            ->acceptJson()
            ->withToken(Cookie::get('bearer_token'))
            ->get('/user/dashboard');
        $this->checkResponse($response);

        return view($this->url . 'index', $response->json());
    }
}
