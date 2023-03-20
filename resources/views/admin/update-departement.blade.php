<!-- APPEL AU LAYOURT -->
@extends('layouts.manage-panel-layourt')

@section('title',"Modifier un département")

@section('content')
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <!-- SUR LES PETITS ECRANS -->
                    <h3 class="search--title-litle d-md-none d-sm-block d-xs-block text-green text-uppercase">
                        Modifier un département</h3>
                    <!-- SUR LES GRANDS ECRANS -->
                    <h3
                        class="search--title d-none d-xs-none d-sm-none d-md-block d-lg-block text-green text-uppercase">
                        Modifier un département</h3>

                    <form action="/departement/{{$departement->id}}/update" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label for="" class="">Libellé *</label>
                                <input class="form-control @error('libelle') is-invalid @enderror" name="libelle" value="{{$departement->libelle}}" type="text" placeholder="Ex : Libellé"
                                    aria-label="Ex : Libellé">
                            </div>
                            @error('libelle')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label for="" class="">Direction *</label>
                                <div class="form-floating">
                                    <select class="form-control @error('direction') is-invalid @enderror" name="direction" id="floatingSelect" name="direction"
                                        aria-label="Floating label select example">
                                        @foreach(allDirections() as $allDirection)
                                            @if($departement->direction==$allDirection)
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
                        </div>

                        <div class="row my-5">
                            <div class="col-md-12  text-center">
                                <button class="close-button bg-green">Modifier</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
@endsection