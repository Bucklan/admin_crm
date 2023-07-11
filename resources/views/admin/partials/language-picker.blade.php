@php
    $locales = config('app.multilingual.locales');
@endphp

<ul class="language-tabs nav nav-tabs md-tabs img-tabs" role="tablist">
    @foreach($locales as $language)
        <li>
            <a id="{{ $language }}" class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="tab" href="#" >
                {{ Str::upper($language) }}
            </a>
        </li>
    @endforeach
</ul>

{{ Form::hidden('lang', $locales[0]) }}
