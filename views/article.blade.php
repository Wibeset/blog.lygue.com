@extends('layout')

@section('content')
<section id="article">
    <article itemscope itemtype="http://schema.org/Article">
        <div>
            <header>
                <time datetime="{{ $date->formatLocalized('%Y-%m-%d') }}" itemprop="datePublished">{{ $date->formatLocalized('%B %e, %Y') }}</time>
                <h1 itemprop="name">{{ $title }}</h1>
            </header>
            {{ $content }}
            <footer>
                <a href="https://twitter.com/home?status={{ $share['title'] . ' ' . $share['url'] }}"><i class="fa fa-twitter-square"></i></a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $share['url'] }}"><i class="fa fa-facebook-square"></i></a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ $share['url'] }}&title={{ $share['title'] }}&summary=&source="><i class="fa fa-linkedin-square"></i></a>
                <a href="https://plus.google.com/share?url={{ $share['url'] }}"><i class="fa fa-google-plus-square"></i></a>
                <a href="mailto:?subject={{ $share['title'] }}&body={{ $share['url'] }}"><i class="fa fa-envelope-square"></i></a>
            </footer>
            <div id="disqus_thread"></div>
        </div>
    </article>
    @if (!empty($next))
        <article class="next">
            <div>
                <header>
                    <h2>Next post</h2>
                </header>
                <time datetime="{{ $next['date']->formatLocalized('%Y-%m-%d') }}">{{ $next['date']->formatLocalized('%B %e, %Y') }}</time>
                <a class="title" href="http://blogue.ellipse-synergie.com/{{ $next['uri'] }}">{{ $next['title'] }}</a>
                <p>{{ $next['intro'] }}</p>
                <a class="btn" href="http://blogue.ellipse-synergie.com/{{ $next['uri'] }}">Read &rarr;</a>

            </div>
        </article>
    @endif
    @if (!empty($previous))
        <article class="next">
            <div>
                <header>
                    <h2>Previous post</h2>
                </header>
                <time datetime="{{ $previous['date']->formatLocalized('%Y-%m-%d') }}">{{ $previous['date']->formatLocalized('%B %e, %Y') }}</time>
                <a class="title" href="http://blogue.ellipse-synergie.com/{{ $previous['uri'] }}">{{ $previous['title'] }}</a>
                <p>{{ $previous['intro'] }}</p>
                <a class="btn" href="http://blogue.ellipse-synergie.com/{{ $previous['uri'] }}">Read &rarr;</a>
            </div>
        </article>
    @endif
</section>
@endsection
