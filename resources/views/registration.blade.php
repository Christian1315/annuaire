<!-- APPEL AU HEADER -->
@extends('layouts.layourt')

@section('title','Registration')

@section('content')
<div class="row" id="main">
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <!-- SUR LES PETITS ECRANS -->
                    <h3 class="login--title-litle d-md-none d-sm-block d-xs-block">Enregistrez-vous</h3>
                    <!-- SUR LES GRANDS ECRANS -->
                    <h3 class="login--title d-none d-xs-none d-sm-none d-md-block d-lg-block">Enregistrez-vous
                    </h3>

                    
                    <form action="/registration" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input class="form-control @error('identifiant') is-invalid @enderror" value="{{old('identifiant')}}" name="identifiant" type="text" placeholder="Identifiant" aria-label="Identifiant">
                        </div>
                        @error('identifiant')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="input-group mb-3">
                            <input class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" type="text" placeholder="Email" aria-label="Email">
                        </div>
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="input-group mb-3">
                            <input class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" name="password" type="password" placeholder="Mot de passe" aria-label="Mot de passe">
                        </div>
                        @error('password')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="input-group mb-3">
                            <input class="form-control" value="{{old('password_confirmation')}}" name="password_confirmation" type="password" placeholder="Mot de passe" aria-label="Mot de passe">
                        </div>
                        

                        <div class="input-group mb-3">
                            <input class="form-control @error('avatar') is-invalid @enderror" value="{{old('avatar')}}" name="avatar" type="file" placeholder="Avatar" aria-label="Avatar">
                        </div>
                        @error('avatar')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <div class="text-center">
                            <button type="submit" class="login-btn">Créer</button>
                        </div>

                        <p class="text-center mt-2">
                            <span>Connectez-vou ici!</span> <a href="/" class="text-green"> Se connecter</a>
                        </p>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</div>

@endsection