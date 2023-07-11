<?php

namespace App\Http\Controllers\Admin\City;

use App\Http\Controllers\BaseController;
use Cache;
use Cookie;
use GuzzleHttp\Promise\PromiseInterface;
use Http;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Client\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use Request;

class CityController extends BaseController
{
    public $url = 'admin.cities.';
    public $route = 'admin.cities.';


    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @throws ValidationException
     */
    public function index()
    {
//        if ($this->request->ajax()) {
//            return Http::baseUrl(config('app.api_path'))
//                ->acceptJson()
//                ->withToken(Cookie::get('bearer_token'))
//                ->get('/user/cities/datatable', $this->request->all());
//        }
//
//        $response = Http::baseUrl(config('app.api_path'))
//            ->acceptJson()
//            ->withToken(Cookie::get('bearer_token'))
//            ->post("/user/cities/check-access");
//
//        $this->checkResponse($response);
//
//        return view($this->url . 'index');
    }

    public function select(string $city_id): RedirectResponse
    {
//        Cache::forget(Cookie::get('city_id'));
//
//        $minutes = 60 * 24 * 365;
//        Cache::put('city_id', $city_id, $minutes);
//
//        return redirect()
//            ->back();
//    }
//
//    public function create(): View
//    {
//        return view($this->url . 'create');
//    }

}}
