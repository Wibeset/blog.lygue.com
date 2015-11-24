@extends('layout')

@section('content')
<article id="article">
    <nav>
        <div>
            <a href="http://blog.lygue.com"><i class="fa fa-chevron-circle-left"></i> &nbsp; Back to blog.lygue.com</a>
        </div>
    </nav>
    <section itemscope itemtype="http://schema.org/Article">
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
    </section>
    @if (!empty($next))
        <section class="next">
            <hr>
            <time datetime="{{ $next['date']->formatLocalized('%Y-%m-%d') }}">{{ $next['date']->formatLocalized('%B %e, %Y') }}</time>
            <a class="title" href="http://blog.lygue.com/{{ $next['uri'] }}">{{ $next['title'] }}</a>
            <p>{{ $next['intro'] }}</p>
            <a class="btn" href="http://blog.lygue.com/{{ $next['uri'] }}">Read &rarr;</a>
        </section>
    @endif
    @if (!empty($previous))
        <section class="next">
            <hr>
            <time datetime="{{ $previous['date']->formatLocalized('%Y-%m-%d') }}">{{ $previous['date']->formatLocalized('%B %e, %Y') }}</time>
            <a class="title" href="http://blog.lygue.com/{{ $previous['uri'] }}">{{ $previous['title'] }}</a>
            <p>{{ $previous['intro'] }}</p>
            <a class="btn" href="http://blog.lygue.com/{{ $previous['uri'] }}">Read &rarr;</a>
        </section>
    @endif
    <footer>
        <hr>
        <p>Sports leagues management made easy</p>
        <a href="https://www.twitter.com/Lygue"><i class="fa fa-twitter-square"></i></a>
        <a href="https://www.facebook.com/Lygue"><i class="fa fa-facebook-square"></i></a>
        <a href="https://www.instagram.com/Lygueapp"><i class="fa fa-instagram"></i></a>
        <a href="https://www.lygue.com"><i class="fa fa-globe"></i></a>
    </footer>
</article>
@endsection
