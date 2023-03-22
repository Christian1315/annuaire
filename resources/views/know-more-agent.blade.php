<!-- APPEL AU LAYOURT -->
@extends('layouts.panel-layourt')

@section('title',"En savoir plus")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <!-- SUR LES PETITS ECRANS -->
                <h3 class="search--title-litle d-md-none d-sm-block d-xs-block text-green">EN SAVOR PLUS</h3>
                <!-- SUR LES GRANDS ECRANS -->
                <h3 class="search--title d-none d-xs-none d-sm-none d-md-block d-lg-block text-green">EN SAVOR PLUS</h3>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="" class="">Nom *</label>
                        <input class="form-control" type="text" value="{{$agent->nom}}"  aria-label="Ex : DOE" disabled readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="">Prénom *</label>
                        <input class="form-control" type="text" value="{{$agent->prenom}}" aria-label="Ex : John" disabled readonly>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="" class="">Poste *</label>
                        <input class="form-control" type="text" value="{{$agent->poste}}" aria-label="Ex : Sécrétaire" disabled readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="">Ligne Directe *</label>
                        <input class="form-control" type="text" value="{{$agent->direct_ligne}}" aria-label="Ex : +3325684585" disabled readonly>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="" class="">Portable *</label>
                        <input class="form-control" type="text" value="{{$agent->portable}}" aria-label="Ex : +33256987598" disabled readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="">E-mail *</label>
                        <input class="form-control" type="text" value="{{$agent->email}}" aria-label="Ex : johndoe@gmail.com" disabled readonly>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="" class="">Fonction *</label>
                        <input class="form-control" type="text" value="{{$agent->fonction}}" aria-label="Ex : Management" disabled readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="">Service *</label>
                        <input class="form-control" type="text" value="{{$agent->service}}" aria-label="Sélectionnez le service" disabled readonly>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="" class="">Direction *</label>
                        <input class="form-control" type="text" value="{{$agent->direction}}" aria-label="Sélectionnez le direction" disabled readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="">DGA *</label>
                        <input class="form-control" type="text" value="{{$agent->dga}}" aria-label="Sélectionnez le DGA" disabled readonly>
                    </div>
                </div>

                
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="" class="">Sous-service *</label>
                        <input class="form-control" type="text" value="{{$agent->sous_service}}" aria-label="Sélectionnez le sous-service" disabled readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="">Département *</label>
                        <input class="form-control" type="text" value="{{$agent->departement}}" aria-label="Sélectionnez le département" disabled readonly>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12  text-center">
                        <a href="/panel" class="close-button bg-green">Fermé</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection