<div class="page-header-breadcrumb">
    <ul class="breadcrumb-title">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard') }}">
                <i class="icofont icofont-home"></i>
            </a>
        </li>
        @if(isset($first) && $first)
            @if($active == 1)
                <li class="breadcrumb-item text-primary" aria-current="page">
                    {{ Str::limit($first, 12) }}
                </li>
            @else
                @if(isset($first_link) && $first_link)
                    <li class="breadcrumb-item" >
                        <a href="{{ $first_link }}">
                            {{ Str::limit($first, 12) }}
                        </a>
                    </li>
                @else
                    <li class="breadcrumb-item">
                        {{ Str::limit($first, 12) }}
                    </li>
                @endif
            @endif
        @endif
        @if(isset($second) && $second)
            @if($active == 2)
                <li class="breadcrumb-item text-primary" aria-current="page">
                    {{ Str::limit($second, 12) }}
                </li>
            @else
                @if(isset($second_link) && $second_link)
                    <li class="breadcrumb-item" >
                        <a href="{{ $second_link }}">
                            {{ Str::limit($second, 12) }}
                        </a>
                    </li>
                @else
                    <li class="breadcrumb-item">
                        {{ Str::limit($second, 12) }}
                    </li>
                @endif
            @endif
        @endif
        @if(isset($third) && $third)
            @if($active == 3)
                <li class="breadcrumb-item text-primary" aria-current="page">
                    {{ Str::limit($third, 10) }}
                </li>
            @else
                @if(isset($third_link) && $third_link)
                    <li class="breadcrumb-item" >
                        <a href="{{ $third_link }}">
                            {{ Str::limit($third, 10) }}
                        </a>
                    </li>
                @else
                    <li class="breadcrumb-item">
                        {{ Str::limit($third, 10) }}
                    </li>
                @endif
            @endif
        @endif
        @if(isset($forth) && $forth)
            @if($active == 4)
                <li class="breadcrumb-item text-primary" aria-current="page">
                    {{ Str::limit($forth, 15) }}
                </li>
            @else
                @if(isset($forth_link) && $forth_link)
                    <li class="breadcrumb-item" >
                        <a href="{{ $forth_link }}">
                            {{ Str::limit($forth, 15) }}
                        </a>
                    </li>
                @else
                    <li class="breadcrumb-item">
                        {{ Str::limit($forth, 15) }}
                    </li>
                @endif
            @endif
        @endif
        @if(isset($fifth) && $fifth)
            @if($active == 4)
                <li class="breadcrumb-item text-primary" aria-current="page">
                    {{ Str::limit($fifth, 15) }}
                </li>
            @else
                @if(isset($fifth_link) && $fifth_link)
                    <li class="breadcrumb-item" >
                        <a href="{{ $fifth_link }}">
                            {{ Str::limit($fifth, 15) }}
                        </a>
                    </li>
                @else
                    <li class="breadcrumb-item">
                        {{ Str::limit($fifth, 15) }}
                    </li>
                @endif
            @endif
        @endif
    </ul>
</div>
