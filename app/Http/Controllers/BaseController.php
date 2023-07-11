<?php

namespace App\Http\Controllers;

use Cookie;
use Illuminate\Http\Client\Response;
use Illuminate\Validation\ValidationException;
use Session;

abstract class BaseController extends Controller
{
    /**
     * @throws ValidationException
     */
    public function checkResponse(Response $response)
    {
        if($response->status() == 403){
            return redirect()
                ->route('login')
                ->withCookies([
                    Cookie::forget('bearer_token'),
                    Cookie::forget('permissions'),
                ])->send();
        }

        if($response->status() == 401){
            return redirect()
                ->route('login')
                ->withCookies([
                    Cookie::forget('bearer_token'),
                    Cookie::forget('permissions'),
                ])
                ->send();
        }

        if($response->status() == 422)
        {
            if($errors = $response->json('errors')){
                throw ValidationException::withMessages($errors);
            }

            return back()
                ->withErrors($response->json('errors'))
                ->withInput()
                ->with('error', $response->json('message'))
                ->send();
        }

        if($response->status() == 428)
        {
            Session::flash(
                $response->header('state') ?? 'error',
                $response->json('message')
            );

            throw ValidationException::withMessages([]);
        }

        abort_if($response->failed(), $response->status());
    }
}
