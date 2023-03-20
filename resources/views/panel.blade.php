<!-- APPEL AU LAYOURT -->
@extends('layouts.panel-layourt')

@section('title',"Panel d'utilisateur")

@section('content')

<!--  -->
<div class="row">
    <div class="col-12">
        <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade  show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <livewire:search-panel/>

                        </div>
                    </div>
                </div>

            </div>


            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                <!-- SUR LES PETITS ECRANS -->
                <h3 class="search--title-litle d-md-none d-sm-block d-xs-block text-green text-uppercase">
                    Panel de gestion Admin</h3>
                <!-- SUR LES GRANDS ECRANS -->
                <h3 class="search--title d-none d-xs-none d-sm-none d-md-block d-lg-block text-green text-uppercase">
                    Panel de gestion Admin</h3>


                <div class="row">
                    <div class="col-md-4">
                        <div class="block bg-green text-center px-3 py-2 mt-5">
                            <img src="images/icons/agent-11.png" class="admin-icon" alt="" srcset="">
                            <p class="panel--title text-uppercase">Gérer les agents</p>
                            <a href="/getAgentManage" class="text-green text-uppercase manage-admin-button bg-white">Gérer</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block bg-green text-center px-3 py-2 mt-5">
                            <img src="images/icons/services.png" class="admin-icon" alt="" srcset="">
                            <p class="panel--title text-uppercase">Gérer les SERVICES</p>
                            <a href="/getServiceManage" class="text-green text-uppercase manage-admin-button bg-white">Gérer</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block bg-green text-center px-3 py-2 mt-5">
                            <img src="images/icons/pngtree-gov-removebg-preview.png" class="admin-icon" alt="" srcset="">
                            <p class="panel--title text-uppercase">Gérer les directions</p>
                            <a href="/getDirectionsManage" class="text-green text-uppercase manage-admin-button bg-white">Gérer</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 mt-5">
                        <div class="block bg-green text-center px-3 py-2">
                            <img src="images/icons/department-6.png" class="admin-icon" alt="" srcset="">
                            <p class="panel--title text-uppercase">Gérer les départements</p>
                            <a href="/getDepartementsManage" class="text-green text-uppercase manage-admin-button bg-white">Gérer</a>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection