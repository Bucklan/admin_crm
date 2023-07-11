<?php

namespace App\Providers;

use App\Http\View\Composers as Composers;
use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        View::composer(['admin._layouts.app', 'admin.dashboard.index', 'admin.account.profile.index'], Composers\UserComposer::class);
        View::composer(['admin._layouts.app', 'admin.dashboard.index', 'admin.account.profile.index'], Composers\CityComposer::class);
    }
}
