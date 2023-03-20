<!-- APPEL AU LAYOURT -->
@extends('layouts.layourt')

@section('title','Accueil')

@section('content')
<div class="row" id="main">
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <!-- SUR LES PETITS ECRANS -->
                    <h3 class="login--title-litle d-md-none d-sm-block d-xs-block">Connectez-vous</h3>
                    <!-- SUR LES GRANDS ECRANS -->
                    <h3 class="login--title d-none d-xs-none d-sm-none d-md-block d-lg-block">Connectez-vous
                    </h3>

                    <form action="/user-login" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input class="form-control @error('identifiant') is-invalid @enderror" type="text" value="{{old('identifiant')}}" name="identifiant" placeholder="Identifiant">
                        </div>
                        @error('identifiant')
                        <p class="text-danger">{{$message}}</p>
                        @enderror


                        <div class="input-group mb-3">
                            <input class="form-control @error('password') is-invalid @enderror" type="password" value="{{old('password')}}" name="password" placeholder="Mot de passe">
                        </div>
                        @error('password')
                        <p class="text-danger">{{$message}}</p>
                        @enderror


                        <div class="text-center">
                            <button type="submit" class="login-btn">CONNEXION</button>
                        </div>
                        <p class="text-center mt-2">
                            <span>Pas de compte ?</span> <a href="/registration" class="text-green"> Créer votre compte</a>
                        </p>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</div>
@endsection