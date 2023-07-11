<ul class="language-tabs nav nav-tabs md-tabs img-tabs" role="tablist">
    @foreach(config('app.multilingual.locales') as $language)
        <li>
            <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="tab"
               href="#{{ $key ?? '' }}{{ $language }}" role="tab">
                {{ Str::upper($language) }}
            </a>
        </li>
    @endforeach
</ul>
