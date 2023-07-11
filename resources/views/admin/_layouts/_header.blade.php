<nav class="navbar header-navbar pcoded-header iscollapsed" header-theme="theme1" pcoded-header-position="fixed">
    <div class="navbar-wrapper">
        <div class="navbar-logo" logo-theme="theme1">

            <a class="mobile-options">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>

        <div class="navbar-container container-fluid">
            <ul class="nav-right">

{{--                @can(App\Enums\User\Permission::SETTINGS)--}}
                    <li class="user-profile header-notification user-select-none">
                        <div class="dropdown-primary dropdown">
                            <div class="dropdown-toggle" data-toggle="dropdown">
                                <span class="btn btn-outline-primary">{{ $city_id ?? 'Выберите город' }}</span>
                                <i class="feather icon-chevron-down"></i>
                            </div>
                            <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn"
                                data-dropdown-out="fadeOut">
                                @if(!empty($cities_list))
                                    @foreach($cities_list as $id => $city)
                                        @if($city_id != $city)
                                            <li>
                                                <form
                                                    action="{{ route('admin.cities.choose-city', ['city_id' => $id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-primary">
                                                        {{ $city }}
                                                    </button>
                                                </form>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>

                        </div>
                    </li>
{{--                @endcan--}}

                <li class="user-profile header-notification user-select-none">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <img
                                src="{{ $user['avatar'] ?? asset('libraries/assets/images/default_avatar.png') }}"
                                class="img-radius" alt="user avatar">
                            <span>WHITE
                                {{--{{ Str::limit($user['name'], 12) }}--}}</span>
                            <i class="feather icon-chevron-down"></i>
                        </div>
                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn"
                            data-dropdown-out="fadeOut">
                            <li>
                                <a href="{{ route('admin.account.profile.index') }}">
                                    <i class="feather icon-user"></i>
                                    @lang('Профиль')
                                </a>
                            </li>
                            <li>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">
                                    @csrf
                                    <a href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="feather icon-log-out"></i>
                                        @lang('Выйти')
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
