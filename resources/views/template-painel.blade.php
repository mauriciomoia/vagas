<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Empresa - Painel administrativo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?php echo asset('css/bootstrap-theme.min..css')?>" type="text/css">
        <link rel="stylesheet" href="<?php echo asset('css/main.css')?>" type="text/css">
        <link rel="stylesheet" href="<?php echo asset('css/font-awesome.css')?>" type="text/css">
        
		<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

		<script type="text/javascript" src="<?php echo asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')?>"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"><a href="/logout" class="btn btn-primary">Sair</a></span>
          </button>
          <a class="navbar-brand" href="#">Empresa</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form action="login" method="POST" class="navbar-form navbar-right" role="form">
            <a class="btn btn-primary" href='{!! url('/logout'); !!}'>Sair</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <div class="container">
    
		@yield('content')

      <hr>

      <footer>
        <p>&copy; Empresa - 2019</p>
      </footer>
    </div> <!-- /container -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo asset('js/vendor/bootstrap.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo asset('js/main.js')?>"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
		
    </body>
</html>
