<!-- APPEL AU LAYOURT -->
@extends('layouts.manage-panel-layourt')

@section('title',"Modifier un agent")

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <!-- SUR LES PETITS ECRANS -->
            <h3 class="search--title-litle d-md-none d-sm-block d-xs-block text-green text-uppercase">
                Modifier un agent</h3>
            <!-- SUR LES GRANDS ECRANS -->
            <h3 class="search--title d-none d-xs-none d-sm-none d-md-block d-lg-block text-green text-uppercase">
                Modifier un agent</h3>
            <form action="/agent/{{$agent->id}}/update" method="POST">
                @method('PATCH')
                @csrf
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="" class="">Nom *</label>
                        <input class="form-control @error('nom') is-invalid @enderror" type="text" name="nom" placeholder="Ex : DOE" value="{{$agent->nom}}" aria-label="Ex : DOE">
                        @error('nom')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="" class="">Prénom *</label>
                        <input class="form-control @error('prenom') is-invalid @enderror" type="text" name="prenom" value="{{$agent->prenom}}" aria-label="Ex : John">
                        @error('prenom')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="" class="">Poste *</label>
                        <input class="form-control @error('poste') is-invalid @enderror" type="text"  name="poste" placeholder="Ex : Sécrétaire" value="{{$agent->poste}}" aria-label="Ex : Sécrétaire">
                        @error('poste')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="" class="">Ligne Directe *</label>
                        <input class="form-control @error('direct_ligne') is-invalid @enderror" type="text" name="direct_ligne" value="{{$agent->direct_ligne}}" aria-label="Ex : +3325684585">
                        @error('direct_ligne')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="" class="">Portable *</label>
                        <input class="form-control @error('portable') is-invalid @enderror" type="text" name="portable" placeholder="Ex : +33256987598" value="{{$agent->portable}}" aria-label="Ex : +33256987598">
                        @error('portable')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="" class="">E-mail *</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{$agent->email}}" aria-label="Ex : johndoe@gmail.com">
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="" class="">Fonction *</label>
                        <input class="form-control @error('fonction') is-invalid @enderror" type="text" name="fonction" placeholder="Ex : Management" value="{{$agent->fonction}}" aria-label="Ex : Management">
                        @error('fonction')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="" class="">Service *</label>
                        <!-- <input class="form-control" type="text" placeholder="Sélectionnez le service"
                            aria-label="Sélectionnez le service"> -->
                        <div class="form-floating">
                            <select class="form-control @error('service') is-invalid @enderror" id="floatingSelect" name="service" value="{{$agent->service}}" aria-label="Floating label select example">
                                @foreach(allServices() as $allService)
                                    @if($agent->service==$allService)
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
                            <select class="form-control @error('direction') is-invalid @enderror" id="floatingSelect" name="direction" aria-label="Selectionnez un département">
                                @foreach(allDirections() as $allDirection)
                                    @if($agent->direction==$allDirection)
                                        <option selected value="{{$allDirection}}">{{$allDirection}}</option>
                                    @else
                                        <option value="{{$allDirection}}">{{$allDirection}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label for="floatingSelect">Selectionnez une direction</label>
                        </div>
                        @error('direction')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="" class="">DGA *</label>
                        <div class="form-floating">
                            <select class="form-control @error('dga') is-invalid @enderror" id="floatingSelect" name="dga" aria-label="Selectionnez un département">
                                @foreach(allDgas() as $allDga)
                                    @if($agent->dga==$allDga)
                                        <option selected value="{{$allDga}}">{{$allDga}}</option>
                                    @else
                                        <option value="{{$allDga}}">{{$allDga}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label for="floatingSelect">Selectionnez un dga</label>
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
                            <select class="form-control @error('sous_service') is-invalid @enderror" id="floatingSelect" name="sous_service" aria-label="Selectionnez un département">
                                @foreach(allSousServices() as $allSousService)
                                    @if($agent->sous_service==$allSousService)
                                        <option selected value="{{$allSousService}}">{{$allSousService}}</option>
                                    @else
                                        <option value="{{$allSousService}}">{{$allSousService}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label for="floatingSelect">Selectionnez un sous service</label>
                        </div>
                        @error('sous_service')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="" class="">Département *</label>
                        <div class="form-floating">
                            <select class="form-control @error('departement') is-invalid @enderror" id="floatingSelect" name="departement" aria-label="Selectionnez un département">
                                @foreach(allDepartements() as $allDepartement)
                                    @if($agent->departement==$allDepartement)
                                        <option selected value="{{$allDepartement}}">{{$allDepartement}}</option>
                                    @else
                                        <option value="{{$allDepartement}}">{{$allDepartement}}</option>
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
                        <button class="close-button bg-green">Modifier</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection