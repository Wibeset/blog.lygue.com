@extends('layout')

@section('content')
<article id="blogs">
    <header>
        <img src="{{ $assets }}img/logo.png" width="100">
        <h1>Blog @ Lygue</h1>
        <p>Sports leagues management made easy.</p>
    </header>
    <ul>
        @foreach ($articles as $article)
        <li itemscope itemtype="http://schema.org/Article">
            <hr>
            <a class="title" href="http://blogue.ellipse-synergie.com/{{ $article['uri'] }}"><span itemprop="name">{{ $article['title'] }}</span></a>
            <time datetime="{{ $article['date']->formatLocalized('%Y-%m-%d') }}" itemprop="datePublished">{{ $article['date']->formatLocalized('%B %e, %Y') }}</time>
            <p>{{ $article['intro'] }}</p>
            <a class="btn" href="http://blogue.ellipse-synergie.com/{{ $article['uri'] }}">Read &rarr;</a>
        </li>
        @endforeach
    </ul>
    <nav id="pagination">
        <a class="pull-right {{ $page != $max_page ? '' : 'hide' }}" href="http://blog.lygue.com/page{{ $page + 1 }}.html">Next &rarr;</a>
        <a class="{{ $page != '1' ? '' : 'hide' }}" href="{{ ($page - 1 ) == 1 ? 'http://blog.lygue.com/' : 'http://blog.lygue.com/page'.($page - 1).'.html' }}">&larr; Previous</a>
    </nav>
    <footer>
        <a href="https://www.twitter.com/Lygue"><i class="fa fa-twitter-square"></i></a>
        <a href="https://www.facebook.com/Lygue"><i class="fa fa-facebook-square"></i></a>
        <a href="https://www.instagram.com/Lygueapp"><i class="fa fa-instagram"></i></a>
        <a href="https://www.lygue.com"><i class="fa fa-globe"></i></a>
    </footer>
</article>
@endsection
