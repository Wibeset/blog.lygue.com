@extends('layout')

@section('content')
<section id="blogs">
    <header class="lygue">
        <img src="{{ $assets }}img/logo.png">
        <h1>Blog @ Lygue</h1>
        <p>Sports leagues management made easy</p>
    </header>
    <ul>
        @foreach ($articles as $article)
        <li>
            <div itemscope itemtype="http://schema.org/Article">
                <hr>
                <a class="title" href="http://blogue.ellipse-synergie.com/{{ $article['uri'] }}"><span itemprop="name">{{ $article['title'] }}</span></a>
                <time datetime="{{ $article['date']->formatLocalized('%Y-%m-%d') }}" itemprop="datePublished">{{ $article['date']->formatLocalized('%B %e, %Y') }}</time>
                <p>{{ $article['intro'] }}</p>
                <a class="btn" href="http://blogue.ellipse-synergie.com/{{ $article['uri'] }}">Read &rarr;</a>
            </div>
        </li>
        @endforeach
    </ul>
    <div id="pagination">
        <a class="pull-right {{ $page != $max_page ? '' : 'hide' }}" href="http://blog.lygue.com/page{{ $page + 1 }}.html">Next &rarr;</a>
        <a class="{{ $page != '1' ? '' : 'hide' }}" href="{{ ($page - 1 ) == 1 ? 'http://blog.lygue.com/' : 'http://blog.lygue.com/page'.($page - 1).'.html' }}">&larr; Previous</a>
    </div>
</section>
@endsection
