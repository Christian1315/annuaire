<!-- APPEL AU LAYOURT -->
@extends('layouts.manage-panel-layourt')

@section('title',"Modifier une direction")

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <!-- SUR LES PETITS ECRANS -->
                <h3 class="search--title-litle d-md-none d-sm-block d-xs-block text-green text-uppercase">
                    Modifier un direction</h3>
                <!-- SUR LES GRANDS ECRANS -->
                <h3
                    class="search--title d-none d-xs-none d-sm-none d-md-block d-lg-block text-green text-uppercase">
                    Modifier un direction</h3>

                <form action="/direction/{{$direction->id}}/update" method="POST">
                    @method('PATCH')
                    @csrf

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label for="" class="">Libellé *</label>
                            <input class="form-control @error('libelle') is-invalid @enderror" type="text"  placeholder="Ex : Libellé" name="libelle" value="{{$direction->libelle}}"
                                aria-label="Ex : Libellé">
                        </div>
                        @error('libelle')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label for="" class="">Code *</label>
                            <input class="form-control @error('code') is-invalid @enderror" type="text" placeholder="Ex : 0256" name="code" value="{{$direction->code}}">
                        </div>
                        @error('code')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label for="" class="">DGA *</label>
                            <div class="form-floating">
                                <select class="form-control @error('dga') is-invalid @enderror" id="floatingSelect" name="dga"
                                    aria-label="Floating label select example">
                                    @foreach(allDgas() as $allDga)
                                        @if($direction->dga==$allDga)
                                            <option selected value="{{$allDga}}">{{$allDga}}</option>
                                        @else
                                            <option value="{{$allDga}}">{{$allDga}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Selectionnez un DGA</label>
                            </div>
                        </div>
                        @error('dga')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="row mt-3">
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