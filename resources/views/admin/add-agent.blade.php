<!-- APPEL AU LAYOURT -->
@extends('layouts.manage-panel-layourt')

@section('title',"Ajouter un agent")

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <!-- SUR LES PETITS ECRANS -->
            <h3 class="search--title-litle d-md-none d-sm-block d-xs-block text-green text-uppercase">
                Ajouter un agent</h3>
            <!-- SUR LES GRANDS ECRANS -->
            <h3 class="search--title d-none d-xs-none d-sm-none d-md-block d-lg-block text-green text-uppercase">
                Ajouter un agent</h3>

            <form action="/add-agent" method="post">
                @csrf
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="" class="">Nom *</label>
                        <input class="form-control @error('nom') is-invalid @enderror" type="text" name="nom" placeholder="Ex : DOE" value="{{old('nom')}}" aria-label="Ex : DOE">
                        @error('nom')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="" class="">Prénom *</label>
                        <input class="form-control @error('prenom') is-invalid @enderror" type="text" name="prenom" value="{{old('prenom')}}" placeholder="Ex : John">
                        @error('prenom')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="" class="">Poste *</label>
                        <input class="form-control @error('poste') is-invalid @enderror" type="text" name="poste" placeholder="Ex : Sécrétaire" value="{{old('poste')}}" aria-label="Ex : Sécrétaire">
                        @error('poste')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="" class="">Ligne Directe *</label>
                        <input class="form-control @error('direct_ligne') is-invalid @enderror" type="text" name="direct_ligne" placeholder="Ex : +3325684585" value="{{old('direct_ligne')}}" aria-label="Ex : +3325684585">
                        @error('direct_ligne')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="" class="">Portable *</label>
                        <input class="form-control @error('portable') is-invalid @enderror" type="text" name="portable" placeholder="Ex : +33256987598" value="{{old('portable')}}" aria-label="Ex : +33256987598">
                        @error('portable')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="" class="">E-mail *</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="Ex : johndoe@gmail.com" value="{{old('email')}}" aria-label="Ex : johndoe@gmail.com">
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="" class="">Fonction *</label>
                        <input class="form-control @error('fonction') is-invalid @enderror" type="text" name="fonction" placeholder="Ex : Management" value="{{old('fonction')}}" aria-label="Ex : Management">
                        @error('fonction')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="" class="">Service *</label>
                        <div class="form-floating">
                            <select class="form-control @error('service') is-invalid @enderror" name="service" id="floatingSelect" value="{{old('service')}}" aria-label="Floating label select example">
                                @foreach(allServices() as $allService)
                                    @if($loop->index==0)
                                        <option selected value="{{$allService}}">{{$allService}}</option>
                                    @else
                                        <option value="{{$allService}}">{{$allService}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label for="floatingSelect">Selectionnez un service</label>
                        </div>
                        @error('service')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="" class="">Direction *</label>
                        <div class="form-floating">
                            <select class="form-control @error('direction') is-invalid @enderror" name="direction" value="{{old('direction')}}" id="floatingSelect" aria-label="Floating label select example">
                                @foreach(allDirections() as $allDirection)
                                    @if($loop->index==0)
                                        <option selected value="{{$allDirection}}">{{$allDirection}}</option>
                                    @else
                                        <option value="{{$allDirection}}">{{$allDirection}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label for="floatingSelect">Selectionnez une Direction</label>
                        </div>
                        @error('direction')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="" class="">DGA *</label>
                        <div class="form-floating">
                            <select class="form-control @error('dga') is-invalid @enderror" name="dga" value="{{old('dga')}}" id="floatingSelect" aria-label="Floating label select example">
                                @foreach(allDgas() as $allDga)
                                    @if($loop->index==0)
                                        <option selected value="{{$allDga}}">{{$allDga}}</option>
                                    @else
                                        <option value="{{$allDga}}">{{$allDga}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label for="floatingSelect">Selectionnez un DGA</label>
                        </div>
                        @error('dga')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>


                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="" class="">Sous-service *</label>
                        <div class="form-floating">
                            <select class="form-control @error('sous_service') is-invalid @enderror" name="sous_service" value="{{old('sous_service')}}" id="floatingSelect" aria-label="Floating label select example">
                                @foreach(allSousServices() as $allSousService)
                                    @if($loop->index==0)
                                        <option selected value="{{$allSousService}}">{{$allSousService}}</option>
                                    @else
                                        <option value="{{$allSousService}}">{{$allSousService}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label for="floatingSelect">Selectionnez un sous-service</label>
                        </div>
                        @error('sous_service')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="" class="">Département *</label>
                        <div class="form-floating">
                            <select class="form-control @error('departement') is-invalid @enderror" name="departement" value="{{old('departement')}}" id="floatingSelect" aria-label="Floating label select example">
                                @foreach(allDepartements() as $departement)
                                    @if($loop->index==0)
                                        <option class="text-uppercase" selected value="{{$departement}}">{{$departement}}</option>
                                    @else
                                        <option class="text-uppercase" value="{{$departement}}">{{$departement}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label for="floatingSelect">Selectionnez un département</label>
                        </div>
                        @error('departement')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="row my-5">
                    <div class="col-md-12  text-center">
                        <button class="close-button bg-green">Ajouter</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection