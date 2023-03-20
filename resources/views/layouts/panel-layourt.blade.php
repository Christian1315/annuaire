<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/fav.jpg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('fichiers/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('fichiers/style.css')}}">
    <title>@yield('title')</title>
    @livewireStyles
</head>

<body>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 shadow-lg" id="nav--bar">
                <a class="" href="/">
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

        <div class="row">
            <div class="col-md-4" id="sidebar">
                <div class="text-center">
                    <img src="{{asset('storage/avatars/'.Auth::user()->avatar)}}" class="avatar-sidebar">
                    <p class="">
                        <span class="user-name">{{Auth::user()->identifiant}}</span> <br>
                        @if(Auth::user()->is_admin)
                        <span class="user-type">Administrateur</span>
                        @else
                        <span class="user-type">Utilisateur</span>
                        @endif
                    </p>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Recherche annuaire</button>
                        @if(Auth::user()->is_admin)
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Panel admin</button>
                        @endif
                        <a href="/user-logout" class="nav-link">Se déconnecter</a>
                    </div>
                    <div class="">
                    </div>
                </div>
            </div>


            <div class="col-md-8 my-5">

                @yield('content')

            </div>
        </div>
        <div class="row" id="footer">
            <div class="col-md-12">
                <h3 class="footer--title">© <?php echo date('Y');?> - Tout droit réservé </h3>
            </div>
        </div>
    </div>
    <script src="{{asset('fichiers/popper.min.js')}}"></script>
    <script src="{{asset('fichiers/my-bootstrap.min.js')}}"></script>

    @livewireScripts
</body>

</html>