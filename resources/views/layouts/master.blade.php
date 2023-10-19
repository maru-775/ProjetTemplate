<!doctype html>
<html lang="fr">
<head>
    <title>EVAL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::style('assets/css/monStyle.css') !!}
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet'
          type='text/css'>
</head>
<body class="body">
<div class="container">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-target">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar+ bvn"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">Marouane BOUZIDA</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-target">
                <ul class="nav navbar-nav">
                    <li><a href="{{url('/listerMembres')}}" data-toggle="collapse" data-target=".navbar-collapse.in">Lister Membres</a></li>
                    <li><a href="{{url('/listerCours')}}" data-toggle="collapse" data-target=".navbar-collapse.in">Lister Cours</a></li>
                    <li><a href="{{url('/listerInscriptions')}}" data-toggle="collapse" data-target=".navbar-collapse.in">Lister Inscription</a></li>
                    <li><a href="{{url('/ajouterMembres')}}" data-toggle="collapse" data-target=".navbar-collapse.in">Ajouter Membres</a></li>
                </ul>
            </div>
        </div><!--/.container-fluid -->
    </nav>
</div>
<div class="container">
    @yield('content')
</div>
{!! Html::script('assets/js/bootstrap.min.js') !!}
{!! Html::script('assets/js/bootstrap.js') !!}
</body>
</html>
