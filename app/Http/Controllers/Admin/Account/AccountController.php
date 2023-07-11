<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\BaseController;

class AccountController extends BaseController
{
    protected string $url = 'admin.account.profile';

    public function index()
    {
        return view($this->url . '.index');
    }
}
