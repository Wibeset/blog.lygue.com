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
    <link href="//fonts.googleapis.com/css?family=Headland+One" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" media="all" href="{{ $assets }}css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ $assets }}favicon.png" type="image/x-icon">
    <link rel="icon" type="image/png" href="{{ $assets }}favicon.png">
</head>
<body class="{{ $body }}">

    <a class="btn" id="back" href="http://blog.lygue.com"><i class="fa fa-angle-left"></i></a>

    <div id="container">
        @yield('content')
    </div>

    <footer>
        <div>
            <hr>
            <span>Blog @ Lygue</span>
            <a href="https://www.twitter.com/Lygue"><i class="fa fa-fw fa-twitter-square"></i></a>
            <a href="https://www.facebook.com/Lygue"><i class="fa fa-fw fa-facebook-square"></i></a>
            <a href="https://www.instagram.com/Lygueapp"><i class="fa fa-fw fa-instagram"></i></a>
            <a href="https://www.lygue.com"><i class="fa fa-fw fa-globe"></i></a>
        </div>
    </footer>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-26401583-3', 'auto');
        ga('send', 'pageview');
    </script>

    <!-- Disqus plugin https://disqus.com/ -->
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES * * */
        var disqus_shortname = 'liguesca';
        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>

</body>
</html>
