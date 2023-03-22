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
                    <div class="col-md-12">
                        <label for="" class="">Libellé *</label>
                        <!-- <input class="form-control" type="text" value="{{$departement->libelle}}" aria-label="Ex : Libellé" disabled readonly> -->
                        <textarea class="form-control" type="text" aria-label="Ex : Libellé" disabled readonly>{{$service->departement}}</textarea>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-12">
                        <label for="" class="">Direction *</label>
                        <input class="form-control" type="text" value="{{$departement->direction}}" aria-label="Sélectionnez le département" disabled readonly>
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