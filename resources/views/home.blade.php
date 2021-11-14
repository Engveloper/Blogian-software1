<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Blogian</title>
    <meta name="description" content="Blogian es un gestor de contenido para blog">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
    <div class="container"><a class="navbar-brand" href="index.html">Blogian</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div
            class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="index.html">Tags</a></li>
                <li class="nav-item"><a class="nav-link" href="post.html">Artículos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Iniciar Sesión</a></li>
            </ul>
        </div>
    </div>
</nav>
<header class="masthead" style="background-image:url({{asset('img/home-bg.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <div class="site-heading">
                    <h1>Blogian</h1><span class="subheading">Blog para desarrolladores</span></div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <h2 class="text-center" style="font-size: 45px;">Artículos destacados</h2>
    <div class="row">
        <div class="col-md-10 col-lg-8">
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">JavaScript, usos en 2020</h2>
                    <h3 class="post-subtitle">JavaScript es un lenguaje muy usado en la actualidad...</h3>
                </a>
                <p class="post-meta">Publicado por&nbsp;<a href="#">Engels Baca, Noviembre 20, 2020</a></p>
            </div>
            <div class="post-preview"><a href="#"></a></div>
            <hr>
            <div class="post-preview">
                <a href="#">
                    <h2 class="post-title">Laravel vs Symphony, pros y contras de usarlos</h2>
                    <h3 class="post-subtitle">Laravel y Symphony son frameworks de PHP usados en el mercado actual...</h3>
                </a>
                <p class="post-meta">Publicado por&nbsp;<a href="#">Engels Baca, Noviembre 21, 2020</a></p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="#">
                    <h2 class="post-title">Los diagramas de secuencia en StarUML</h2>
                    <h3 class="post-subtitle">Hay una gran variedad de programas que podemos utilizar para diagramar...</h3>
                </a>
                <p class="post-meta">Publicado por&nbsp;<a href="#">Engels Baca, Noviembre 23, 2020</a></p>
            </div>
            <hr>
            <div class="clearfix"><button class="btn btn-primary float-right" type="button">publicaciones Antiguas⇒</button></div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></li>
                    <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></li>
                    <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-github fa-stack-1x fa-inverse"></i></span></li>
                </ul>
                <p class="text-muted copyright">Copyright&nbsp;©&nbsp;Blogian 2020</p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/clean-blog.js"></script>
</body>

</html>
