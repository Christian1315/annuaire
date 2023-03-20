<div>
    <!-- SUR LES PETITS ECRANS -->
    <h3 class="search--title-litle d-md-none d-sm-block d-xs-block">{{$title}}
    </h3>
    <!-- SUR LES GRANDS ECRANS -->
    <h3 class="search--title d-none d-xs-none d-sm-none d-md-block d-lg-block"> {{$title}} </h3>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div action="" method="post">
                <p class="text-center text-red">{{$error}}</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Que recherchez-vous ?" wire:model="name" aria-label="Que recherchez-vous ?" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">Trouver</span>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

    @if($resultsCount>0)
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="bg-green">
                    <tr>
                        <th scope="col text-start">N°</th>
                        <th scope="col text-center">Nom/Libellé</th>
                        <th scope="col text-center">Type</th>
                        <th scope="col text-end">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($results as $result)
                        <tr class="px-0 mx-0">
                            <td>{{$loop->index +1}}</td>
                            @if($result->nom)
                            <td class="text-center">{{$result->nom}} {{$result->prenom}}</td>
                            @else
                            <td class="text-center">{{cutLongText($result->libelle)}}</td>
                            @endif
                            <td class="text-center">{{$result->status}}</td>
                            
                            <td class="text-end">
                                @if($result->status=="Agent")
                                <a href="/agent/{{$result->id}}/show" class="action-button bg-green text-white">En savoir plus</a>
                                @endif

                                @if($result->status=="Departement")
                                <a href="/departement/{{$result->id}}/show" class="action-button bg-green text-white">En savoir plus</a>
                                @endif
                                
                                @if($result->status=="Direction")
                                <a href="/direction/{{$result->id}}/show" class="action-button bg-green text-white">En savoir plus</a>
                                @endif

                                @if($result->status=="Service")
                                <a href="/service/{{$result->id}}/show" class="action-button bg-green text-white">En savoir plus</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>