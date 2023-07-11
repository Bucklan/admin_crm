<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">

        <div class="pcoded-navigatio-lavel" menu-title-theme="theme5">
            @lang('Панель')
        </div>

        <ul class="pcoded-item pcoded-left-item">
{{--            @can(App\Enums\User\Permission::DASHBOARD)--}}
                <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span>
                        <span class="pcoded-mtext">@lang('Статистика')</span>
                    </a>
                </li>
{{--            @endcan--}}
        </ul>

{{--        @canany([--}}
{{--            App\Enums\User\Permission::PRODUCTS, App\Enums\User\Permission::BANNERS,--}}
{{--            App\Enums\User\Permission::ORDERS, App\Enums\User\Permission::NOTIFICATIONS, App\Enums\User\Permission::PROMOCODES, App\Enums\User\Permission::DELIVER--}}
{{--        ])--}}

            <div class="pcoded-navigatio-lavel" menu-title-theme="theme5">
                @lang('Основные')
            </div>

            <ul class="pcoded-item pcoded-left-item">
{{--                @can(App\Enums\User\Permission::PRODUCTS)--}}
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="{{ request()->routeIs('admin.products.*') ? 'pcoded-hasmenu active pcoded-trigger' : 'pcoded-hasmenu' }}" dropdown-icon="style1" subitem-icon="style1">
                            <a href="javascript:void(0)">
                                <span class="pcoded-micon"><i class="icofont icofont-ui-cart"></i></span>
                                <span class="pcoded-mtext">@lang('Товары')</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="{{ request()->routeIs('admin.products.games.index') ? 'active' : '' }}">
                                    <a href="{{--{{ route('admin.products.games.index') }}--}}">
                                        <span class="pcoded-mtext">@lang('Игры')</span>
                                    </a>
                                </li>
                                <li class="{{ request()->routeIs('admin.products.index') ? 'active' : '' }}">
                                    <a href="{{--{{ route('admin.products.index') }}--}}">
                                        <span class="pcoded-mtext">@lang('Товары')</span>
                                    </a>
                                </li>
                                <li class="{{ request()->routeIs('admin.products.sets.index') ? 'active' : '' }}">
                                    <a href="{{--{{ route('admin.products.sets.index') }}--}}">
                                        <span class="pcoded-mtext">@lang('Сеты')</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
{{--                @endcan--}}
{{--                @can(App\Enums\User\Permission::BANNERS)--}}
                    <li class="{{ request()->routeIs('admin.banners.index') ? 'active' : '' }}">
                        <a href="{{--{{ route('admin.banners.index') }}--}}">
                            <span class="pcoded-micon"><i class="icofont icofont-image"></i></span>
                            <span class="pcoded-mtext">@lang('Баннеры')</span>
                        </a>
                    </li>
{{--                @endcan--}}
{{--                @can(App\Enums\User\Permission::ORDERS)--}}
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="{{ request()->routeIs('admin.orders.*') ? 'pcoded-hasmenu active pcoded-trigger' : 'pcoded-hasmenu' }}" dropdown-icon="style1" subitem-icon="style1">
                            <a href="javascript:void(0)">
                                <span class="pcoded-micon"><i class="icofont icofont-inbox"></i></span>
                                <span class="pcoded-mtext">@lang('Заказы')</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="{{ request()->routeIs('admin.orders.created') ? 'active' : '' }}">
                                    <a href="{{--{{ route('admin.orders.created') }}--}}">
                                        <span class="pcoded-mtext">@lang('Созданные')</span>
                                    </a>
                                </li>
                                <li class="{{ request()->routeIs('admin.orders.waiting-acceptance') ? 'active' : '' }}">
                                    <a href="{{--{{ route('admin.orders.waiting-acceptance') }}--}}">
                                        <span class="pcoded-mtext">@lang('Ожидается курьер')</span>
                                    </a>
                                </li>
                                <li class="{{ request()->routeIs('admin.orders.in-process') ? 'active' : '' }}">
                                    <a href="{{--{{ route('admin.orders.in-process') }}--}}">
                                        <span class="pcoded-mtext">@lang('Курьер доставляет')</span>
                                    </a>
                                </li>
                                <li class="{{ request()->routeIs('admin.orders.delivered') ? 'active' : '' }}">
                                    <a href="{{--{{ route('admin.orders.delivered') }}--}}">
                                        <span class="pcoded-mtext">@lang('Доставленные')</span>
                                    </a>
                                </li>
                                <li class="{{ request()->routeIs('admin.orders.completed') ? 'active' : '' }}">
                                    <a href="{{--{{ route('admin.orders.completed') }}--}}">
                                        <span class="pcoded-mtext">@lang('Завершенные')</span>
                                    </a>
                                </li>
                                <li class="{{ request()->routeIs('admin.orders.completed') ? 'active' : '' }}">
                                    <a href="{{--{{ route('admin.orders.completed') }}--}}">
                                        <span class="pcoded-mtext">@lang('Отклоненные')</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
{{--                @endcan--}}

{{--                @can(App\Enums\User\Permission::DELIVER)--}}
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="{{ request()->routeIs('admin.deliveries.*') ? 'pcoded-hasmenu active pcoded-trigger' : 'pcoded-hasmenu' }}" dropdown-icon="style1" subitem-icon="style1">
                            <a href="javascript:void(0)">
                                <span class="pcoded-micon"><i class="icofont icofont-inbox"></i></span>
                                <span class="pcoded-mtext">@lang('Доставки')</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="{{ request()->routeIs('admin.deliveries.waiting-acceptance.index') ? 'active' : '' }}">
                                    <a href="{{--{{ route('admin.deliveries.waiting-acceptance.index') }}--}}">
                                        <span class="pcoded-mtext">@lang('Ожидается курьер')</span>
                                    </a>
                                </li>
                                <li class="{{ request()->routeIs('admin.deliveries.in-process.index') ? 'active' : '' }}">
                                    <a href="{{--{{ route('admin.deliveries.in-process.index') }}--}}">
                                        <span class="pcoded-mtext">@lang('В процессе доставки')</span>
                                    </a>
                                </li>
                                <li class="{{ request()->routeIs('admin.deliveries.retrieve.index') ? 'active' : '' }}">
                                    <a href="{{--{{ route('admin.deliveries.retrieve.index') }}--}}">
                                        <span class="pcoded-mtext">@lang('Возвращаемые')</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
{{--                @endcan--}}

{{--                @can(App\Enums\User\Permission::NOTIFICATIONS)--}}
                    <li class="{{ request()->routeIs(false) ? 'active' : '' }}">
                        <a href="{{--{{ route('admin.dashboard') }}--}}">
                            <span class="pcoded-micon"><i class="icofont icofont-notification"></i></span>
                            <span class="pcoded-mtext">@lang('Уведомления')</span>
                        </a>
                    </li>
{{--                @endcan--}}
{{--                @can(App\Enums\User\Permission::PROMOCODES)--}}
                    <li class="{{ request()->routeIs('admin.promocodes.*') ? 'active' : '' }}">
                        <a href="{{--{{ route('admin.promocodes.index') }}--}}">
                            <span class="pcoded-micon"><i class="icofont icofont-coins"></i></span>
                            <span class="pcoded-mtext">@lang('Промокоды')</span>
                        </a>
                    </li>
{{--                @endcan--}}
            </ul>

{{--        @endcanany--}}

{{--        @canany([--}}
{{--            App\Enums\User\Permission::CITIES, App\Enums\User\Permission::CATEGORIES,--}}
{{--            App\Enums\User\Permission::GENRES, App\Enums\User\Permission::HELP_SECTIONS,--}}
{{--            App\Enums\User\Permission::CONTACTS,--}}
{{--        ])--}}

            <div class="pcoded-navigatio-lavel" menu-title-theme="theme5">
                @lang('Справочники')
            </div>

            <ul class="pcoded-item pcoded-left-item">
{{--                @can(App\Enums\User\Permission::CITIES)--}}
                    <li class="{{ request()->routeIs('admin.cities.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.cities.index') }}">
                            <span class="pcoded-micon"><i class="feather icon-map"></i></span>
                            <span class="pcoded-mtext">@lang('Города')</span>
                        </a>
                    </li>
{{--                @endcan--}}
{{--                @can(App\Enums\User\Permission::CATEGORIES)--}}
                    <li class="{{ request()->routeIs('admin.categories.index') ? 'active' : '' }}">
                        <a href="{{--{{ route('admin.categories.index') }}--}}">
                            <span class="pcoded-micon"><i class="icofont icofont-social-dribble"></i></span>
                            <span class="pcoded-mtext">@lang('Категории')</span>
                        </a>
                    </li>
{{--                @endcan--}}
{{--                @can(App\Enums\User\Permission::GENRES)--}}
                    <li class="{{ request()->routeIs('admin.genres.index') ? 'active' : '' }}">
                        <a href="{{--{{ route('admin.genres.index') }}--}}">
                            <span class="pcoded-micon"><i class="icofont icofont-game"></i></span>
                            <span class="pcoded-mtext">@lang('Жанры')</span>
                        </a>
                    </li>
{{--                @endcan--}}
{{--                @can(App\Enums\User\Permission::HELP_SECTIONS)--}}
                    <li class="{{ request()->routeIs('admin.help-sections.*') ? 'active' : '' }}">
                        <a href="{{--{{ route('admin.help-sections.index') }}--}}">
                            <span class="pcoded-micon"><i class="icofont icofont-question-circle"></i></span>
                            <span class="pcoded-mtext">@lang('Раздел помощи')</span>
                        </a>
                    </li>
{{--                @endcan--}}
{{--                @can(App\Enums\User\Permission::CONTACTS)--}}
                    <li class="{{ request()->routeIs('admin.settings.index') ? 'active' : '' }}">
                        <a href="{{--{{ route('admin.settings.index') }}--}}">
                            <span class="pcoded-micon"><i class="icofont icofont-settings"></i></span>
                            <span class="pcoded-mtext">@lang('Настройки')</span>
                        </a>
                    </li>
{{--                @endcan--}}
            </ul>

{{--        @endcanany--}}

{{--        @canany([App\Enums\User\Permission::CLIENTS, App\Enums\User\Permission::MANAGERS, App\Enums\User\Permission::COURIERS])--}}

            <div class="pcoded-navigatio-lavel" menu-title-theme="theme5">
                @lang('Роли')
            </div>

            <ul class="pcoded-item pcoded-left-item">
{{--                @can(App\Enums\User\Permission::CLIENTS)--}}
                    <li class="{{ request()->routeIs('admin.clients.index') ? 'active' : '' }}">
                        <a href="{{--{{ route('admin.clients.index') }}--}}">
                            <span class="pcoded-micon"><i class="icon-people"></i></span>
                            <span class="pcoded-mtext">@lang('Пользователи')</span>
                        </a>
                    </li>
{{--                @endcan--}}
{{--                @can(App\Enums\User\Permission::MANAGERS)--}}
                    <li class="{{ request()->routeIs('admin.managers.*') ? 'active' : '' }}">
                        <a href="{{--{{ route('admin.managers.index') }}--}}">
                            <span class="pcoded-micon"><i class="icofont icofont-user-suited"></i></span>
                            <span class="pcoded-mtext">@lang('Менеджеры')</span>
                        </a>
                    </li>
{{--                @endcan--}}
{{--                @can(App\Enums\User\Permission::COURIERS)--}}
                    <li class="{{ request()->routeIs('admin.couriers.index') ? 'active' : '' }}">
                        <a href="{{--{{ route('admin.couriers.index') }}--}}">
                            <span class="pcoded-micon"><i class="icofont icofont-vehicle-delivery-van"></i></span>
                            <span class="pcoded-mtext">@lang('Курьеры')</span>
                        </a>
                    </li>
{{--                @endcan--}}
            </ul>

{{--        @endcanany--}}

    </div>
</nav>
