<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/fav.jpg" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('fichiers/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('fichiers/style.css')}}">
    <title>@yield('title')</title>
</head>

<body>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 shadow-lg" id="nav--bar">
                <a class="home--logo" href="/">
                    <img src="{{asset('images/logo.png')}}" id="logo" alt="Logo Ville-Baie-Mahault" srcset="">
                </a>
                <div class="">
                    @if(Auth::check())
                        <img src="{{asset('storage/avatars/'.Auth::user()->avatar)}}" class="avatar" alt="Logo Ville-Baie-Mahault" srcset=""> <span>{{ Auth::user()->identifiant }}</span>
                    @else
                    <a href="/" class="login-btn">CONNEXION</a>
                    @endif
                </div>
            </div>
        </div>

        <div class="row" id="after-ban">
            <div class="col-md-1"></div>
            <div class="col-md-11">
                <!-- SUR LES PETITS ECRANS -->
                <h2 class="ban--title-litle d-md-none d-sm-block d-xs-block">Annuaire Interne</h2>

                <!-- SUR LES GRANDS ECRANS -->
                <h2 class="ban--title d-none d-xs-none d-sm-none d-md-block d-lg-block">Annuaire Interne</h2>
            </div>
        </div>

        <!-- GESTION DES MESSAGES FLASH -->
        <div class="container mt-2">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                </div>
                <div class="col-md-3"></div>

            </div>
        </div>

        @yield('content')

        <div class="row" id="footer">
            <div class="col-md-12">
                <h3 class="footer--title">© <?php echo date('Y');?> - Tout droit réservé </h3>
            </div>
        </div>
    </div>


    <script src="{{asset('fichiers/popper.min.js')}}"></script>
    <script src="{{asset('fichiers/my-bootstrap.min.js')}}"></script>
</body>

</html>