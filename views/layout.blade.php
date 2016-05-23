<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $title }} - Blog - Lygue</title>
    <meta name="description" content="{{ $description != '' ? strip_tags($description) : 'Sports leagues management made easy' }}">
    <meta name="author" content="{{ $author['name'] or 'Lygue' }}">
    <meta name="keywords" content="lygue,league,manager,hockey,baseball,soccer,football">
    <meta property="og:site_name" content="Blog @ Lygue">
    <meta property="og:title" content="{{ $title or 'Blog @ Lygue' }}">
    <meta property="og:description" content="{{ $description != '' ? strip_tags($description) : 'Sports leagues management made easy' }}">
    <meta property="article:author" content="https://www.facebook.com/Lygue">
    <meta property="og:type" content="{{ !empty($title) ? 'article' : 'website' }}">
    <meta property="og:url" content="{{ $share['url'] or 'http://blog.lygue.com'}}">
    <meta property="og:locale" content="en_US">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="//fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" media="all" href="{{ $assets }}css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ $assets }}favicon.png" type="image/x-icon">
    <link rel="icon" type="image/png" href="{{ $assets }}favicon.png">
</head>
<body class="{{ $body }}">

    <nav>
        <a class="btn" href="http://lygue.com">Manage my league</a>
        <a class="btn" href="http://lygue.com/tour">Learn more</a>
        <a class="logo" href="http://blog.lygue.com">
            <img src="{{ $assets }}img/logo.png" width="100">
        </a>
    </nav>

    <div>
        @yield('content')
    </div>

    <footer>
        <div>
            <h2>Manage your sport league with Lygue</h2>
            <p>Better organize your league. Manage, share, discuss and archive everything that's essential for your league. Give Lygue a try, it's free for 30 days.</p>
            <a class="btn btn-inverse" href="http://lygue.com">Manage my league</a>
            <a class="btn btn-inverse" href="http://lygue.com/tour">Learn more</a>
        </div>
    </footer>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-34049964-3', 'auto');
        ga('send', 'pageview');
    </script>

    <script>
        (function() {  // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = '//lygue.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>

</body>
</html>
