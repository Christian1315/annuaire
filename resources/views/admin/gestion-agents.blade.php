<!-- APPEL AU LAYOURT -->
@extends('layouts.manage-panel-layourt')

@section('title',"Gestion des agents")

@section('content') 
        <!-- SUR LES PETITS ECRANS -->
        <h3 class="search--title-litle d-md-none d-sm-block d-xs-block text-green text-uppercase text-center">
            Gestion des agents</h3>
        <!-- SUR LES GRANDS ECRANS -->
        <h3 class="search--title d-none d-xs-none d-sm-none d-md-block d-lg-block text-green text-uppercase text-center">
            Gestion des agents</h3>

        <div class="row">
            <div class="col-md-12  text-center">
                <a href="/add-agent" class="btn close-button bg-green">AJOUTER UN AGENT</a>
            </div>
        </div>
        <livewire:search-agent/>
        
@endsection