@extends('layout')

@section('content')
<article id="blogs">
    <header>
        <div>
            <h1>Manage your sport league with Lygue</h1>
            <p>Better organize your league. Manage, share, discuss and archive everything that's essential for your league. Give Lygue a try, it's free for 30 days.</p>
            <a href="https://www.twitter.com/Lygue"><i class="fa fa-twitter-square"></i></a>
            <a href="https://www.facebook.com/Lygue"><i class="fa fa-facebook-square"></i></a>
            <a href="https://www.instagram.com/Lygueapp"><i class="fa fa-instagram"></i></a>
            <a href="https://www.lygue.com"><i class="fa fa-globe"></i></a>
        </div>
    </header>
    <ul>
        @foreach ($articles as $article)
        <li itemscope itemtype="http://schema.org/Article">
            <a class="title" href="http://blog.lygue.com/{{ $article['uri'] }}"><span itemprop="name">{{ $article['title'] }}</span></a>
            <time datetime="{{ $article['date']->formatLocalized('%Y-%m-%d') }}" itemprop="datePublished">{{ $article['date']->formatLocalized('%B %e, %Y') }}</time>
            <p>{{ $article['intro'] }} <a href="http://blog.lygue.com/{{ $article['uri'] }}">Read more...</a></p>
        </li>
        @endforeach
    </ul>
    <nav id="pagination">
        <a class="pull-right {{ $page != $max_page ? '' : 'hide' }}" href="http://blog.lygue.com/page{{ $page + 1 }}.html">Next &rarr;</a>
        <a class="{{ $page != '1' ? '' : 'hide' }}" href="{{ ($page - 1 ) == 1 ? 'http://blog.lygue.com/' : 'http://blog.lygue.com/page'.($page - 1).'.html' }}">&larr; Previous</a>
    </nav>
</article>
@endsection
