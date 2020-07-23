@extends('layout')

@section('header')
    <title>Generic Page - Industrious by TEMPLATED</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="/assets/css/main.css" />
@endsection
@section('content')
<body class="is-preload">

    <!-- Header -->
        <header id="header">
            <a class="logo" href="index.html">Industrious</a>
            <nav>
                <a href="#menu">Menu</a>
            </nav>
        </header>

    <!-- Nav -->
        <nav id="menu">
            <ul class="links">
                <li><a href="/">Home</a></li>
                <li><a href="/element">Elements</a></li>
                <li><a href="/generic">Generic</a></li>
                <li><a href="/articles">Articles</a></li>
            </ul>
        </nav>

    <!-- Heading -->
        <div id="heading" >
            <h1>NEW ARTICLE</h1>
        </div>

    <!-- Main -->
        <section id="main" class="wrapper">
            <div class="inner">
                <div class="content">
                    
                    <form method="POST" action="/articles/{{ $article->id }}">
                        @csrf
                        @method('PUT')
                        <div class="row gtr-uniform">
                            <div class="col-12 col-12-xsmall">
                                <input type="text" name="title" id="title" value="{{ $article->title }}" placeholder="Title Name" />
                            </div>
                            <div class="col-12 col-12-xsmall">
                                <textarea name="excerpt" id="excerpt" value="" placeholder="Excerpt" rows="3">{{ $article->excerpt }}</textarea>
                            </div>
                            <div class="col-12 col-12-xsmall">
                                <textarea name="body" id="body" value="" placeholder="Body" rows="6">{{ $article->body }}</textarea>
                            </div>
                            
                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="reset" value="Reset" /></li>
                                    <li><input type="submit" value="Submit Form" class="primary" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <div class="content">
                    <section>
                        <h3>Accumsan montes viverra</h3>
                        <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
                    </section>
                    <section>
                        <h4>Sem turpis amet semper</h4>
                        <ul class="alt">
                            <li><a href="#">Dolor pulvinar sed etiam.</a></li>
                            <li><a href="#">Etiam vel lorem sed amet.</a></li>
                            <li><a href="#">Felis enim feugiat viverra.</a></li>
                            <li><a href="#">Dolor pulvinar magna etiam.</a></li>
                        </ul>
                    </section>
                    <section>
                        <h4>Magna sed ipsum</h4>
                        <ul class="plain">
                            <li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
                            <li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
                            <li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
                            <li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
                        </ul>
                    </section>
                </div>
                <div class="copyright">
                    &copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
                </div>
            </div>
        </footer>

    <!-- Scripts -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/browser.min.js"></script>
        <script src="/assets/js/breakpoints.min.js"></script>
        <script src="/assets/js/util.js"></script>
        <script src="/assets/js/main.js"></script>

</body>
@endsection