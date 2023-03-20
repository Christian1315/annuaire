<!-- APPEL AU LAYOURT -->
@extends('layouts.manage-panel-layourt')

@section('title',"Gestion des Services")

@section('content')
    <!-- SUR LES PETITS ECRANS -->
    <h3 class="search--title-litle d-md-none d-sm-block d-xs-block text-green text-uppercase text-center">
        Gestion des Services</h3>
    <!-- SUR LES GRANDS ECRANS -->
    <h3 class="search--title d-none d-xs-none d-sm-none d-md-block d-lg-block text-green text-uppercase text-center">
        Gestion des Services</h3>

    <div class="row my-5">
        <div class="col-md-12  text-center">
            <a href="/add-service" class="close-button bg-green">AJOUTER UN SERVICE</a>
        </div>
    </div>
    <livewire:search-service/>
@endsection