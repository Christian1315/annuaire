<!-- APPEL AU LAYOURT -->
@extends('layouts.manage-panel-layourt')

@section('title',"Ajouter une direction")

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <!-- SUR LES PETITS ECRANS -->
                <h3 class="search--title-litle d-md-none d-sm-block d-xs-block text-green text-uppercase">
                    Ajouter une direction</h3>
                <!-- SUR LES GRANDS ECRANS -->
                <h3
                    class="search--title d-none d-xs-none d-sm-none d-md-block d-lg-block text-green text-uppercase">
                    Ajouter une direction</h3>

                    <form action="/add-direction" method="POST">
                        @csrf
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label for="" class="">Libellé *</label>
                                <input class="form-control @error('libelle') is-invalid @enderror" value="{{old('libelle')}}" name="libelle" type="text" placeholder="Ex : Libellé"
                                    aria-label="Ex : Libellé">
                            </div>
                            @error('libelle')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
        
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label for="" class="">Code *</label>
                                <input class="form-control @error('code') is-invalid @enderror" name="code" value="{{old('code')}}"  type="text" placeholder="Ex : 0256">
                                @error('code')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
        
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label for="" class="">DGA *</label>
                                <div class="form-floating">
                                    <select class="form-control @error('dga') is-invalid @enderror" id="floatingSelect" name="dga"
                                        aria-label="Floating label select example">
                                        @foreach(allDgas() as $allDga)
                                            @if($loop->index==0)
                                                <option class="text-uppercase" selected value="{{$allDga}}">{{$allDga}}</option>
                                            @else
                                                <option class="text-uppercase" value="{{$allDga}}">{{$allDga}}</option>
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