<!-- APPEL AU LAYOURT -->
@extends('layouts.manage-panel-layourt')

@section('title',"Ajouter un service")

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <!-- SUR LES PETITS ECRANS -->
            <h3 class="search--title-litle d-md-none d-sm-block d-xs-block text-green text-uppercase">
                Ajouter un service</h3>
            <!-- SUR LES GRANDS ECRANS -->
            <h3 class="search--title d-none d-xs-none d-sm-none d-md-block d-lg-block text-green text-uppercase">
                Ajouter un service</h3>

            <form action="/add-service" method="post">
                @csrf
                <div class="row mt-2">
                    <div class="col-md-12">
                        <label for="" class="">Libellé *</label>
                        <input class="form-control @error('libelle') is-invalid @enderror" name="libelle" value="{{old('libelle')}}" type="text" placeholder="Ex : Libellé" aria-label="Ex : Libellé">
                    </div>
                    @error('libelle')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="row mt-2">
                    <div class="col-md-12">
                        <label for="" class="">Direction *</label>
                        <div class="form-floating">
                            <select class="form-control @error('direction') is-invalid @enderror" name="direction" id="floatingSelect" aria-label="Floating label select example">
                                @foreach(allDirections() as $allDirection)
                                    @if($loop->index==0)
                                        <option class="text-uppercase" selected value="{{$allDirection}}">{{$allDirection}}</option>
                                    @else
                                        <option class="text-uppercase" value="{{$allDirection}}">{{$allDirection}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label for="floatingSelect">Selectionnez une direction</label>
                        </div>
                        @error('direction')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-12">
                        <label for="" class="">Département *</label>
                        <div class="form-floating">
                            <select class="form-control @error('departement') is-invalid @enderror" name="departement" id="floatingSelect" aria-label="Floating label select example">
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

                <div class="row mt-3">
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