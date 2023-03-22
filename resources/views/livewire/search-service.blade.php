<div>
    <div action="" method="post">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <!-- SUR LES GRANDS ECRANS -->

                <div class="d-none d-xs-none d-sm-none d-md-block d-lg-block">
                    <p class="text-center text-red">{{$error}}</p>
                    <div class="input-group mb-3  text-green text-uppercase text-center">
                        <input type="text" class="form-control" wire:model="name" placeholder="Que recherchez-vous ?" aria-label="Que recherchez-vous ?" aria-describedby="basic-addon2">
                        <span class="btn input-group-text bg-green py-3" style="align-items: center;border-radius:0px" aria-disabled="true">Trouver</span>
                    </div>
                </div>
                <!-- SUR LES PETITS ECRANS -->

                <div class="mb-3 d-md-none d-sm-block d-xs-block text-green text-uppercase text-center">
                    <p class="text-center text-red">{{$error}}</p>
                    <input type="text" class="form-control" wire:model="name" placeholder="Que recherchez-vous ?" aria-label="Que recherchez-vous ?">
                    <button class="close-button bg-green mt-2 w-100" disabled>Trouver</button>
                </div>

            </div>
            <div class="col-2"></div>
        </div>
    </div>
    @if(count($results)>0)
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="bg-green">
                <tr>
                    <th scope="col text-start">N°</th>
                    <th scope="col text-center">Nom Prénom</th>
                    <th scope="col text-end">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($results as $service)
                <tr class="px-0 mx-0">
                    <td>{{$loop->index +1}}</td>
                    <td class="text-center">{{cutLongText($service->libelle)}}</td>
                    <td class="text-end">
                        <div class="dropdown">
                            <button class="btn bg-green dropdown-toggle" style="border:solid 1px transparent " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Button d'action
                            </button>
                            <ul class="dropdown-menu bg-transparent">
                                <div class="text-end">
                                    <a href="/service/{{$service->id}}/update" class="action-button bg-warning">Modifier</a>
                                    <a href="/service/{{$service->id}}/delete" class="action-button bg-red text-white">Supprimer</a>
                                </div>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else

    @if($servicesCount>0)
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="bg-green">
                <tr>
                    <th scope="col text-start">N°</th>
                    <th scope="col text-center">Nom Prénom</th>
                    <th class="col text-end">Buttons d'Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($services as $service)
                <tr class="px-0 mx-0">
                    <td>{{$loop->index +1}}</td>
                    <td class="text-center">{{cutLongText($service->libelle)}}</td>
                    <td class="text-end">
                        <div class="dropdown">
                            <button class="btn bg-green dropdown-toggle" style="border:solid 1px transparent " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Button d'action
                            </button>
                            <ul class="dropdown-menu bg-transparent">
                                <div class="text-end">
                                    <a href="/service/{{$service->id}}/update" class="action-button bg-warning">Modifier</a>
                                    <a href="/service/{{$service->id}}/delete" class="action-button bg-red text-white">Supprimer</a>
                                </div>
                            </ul>
                        </div>
                        <!-- <a href="/service/{{$service->id}}/update" class="action-button bg-warning">Modifier</a> -->
                        <!-- <a href="/service/{{$service->id}}/delete" class="action-button bg-red text-white">Supprimer</a> -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- PAGINATION -->
    @if(!$search)
    <div class="" aria-label="Page navigation example">
        <div class="pagination justify-content-center">
            {{$services->links()}}
        </div>
    </div>
    @endif
    @else
    <h3 class="text-center text-green mt-2">Aucun service ajouté!</h3>
    @endif
    @endif
</div>