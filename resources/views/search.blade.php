<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/fav.jpg" type="image/x-icon">
    <link rel="stylesheet" href="fichiers/bootstrap.css">
    <link rel="stylesheet" href="fichiers/style.css">
    <title>Recherche</title>
</head>

<body>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12" id="nav--bar">
                <a class="" href="#">
                    <img src="images/logo.png" id="logo" alt="Logo Ville-Baie-Mahault" srcset="">
                </a>
                <button class="login-btn">CONNEXION</button>
            </div>
        </div>

        <div class="row" id="after-ban">
            <div class="col-md-1"></div>
            <div class="col-md-11">
                <!-- SUR LES PETITS ECRANS -->
                <h2 class="ban--title-litle d-md-none d-sm-block d-xs-block">Annuaire Interne</h2>

                <!-- SUR LES GRANDS ECRANS -->
                <h2 class="ban--title d-none d-xs-none d-sm-none d-md-block d-lg-block">Annuaire Interne</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4" id="sidebar">
                <div class="text-center">
                    <img src="images/user-acc.png" class="avatar-sidebar">
                    <p class="">
                        <span class="user-name">Nom Prénom</span> <br> 
                        <span class="user-type">Utilisateur</span>
                    </p>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">Recherhe annuaire</button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false">Panel admin</button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                            aria-selected="false">Se déconnecter</button>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                            <!-- SUR LES PETITS ECRANS -->
                            <h3 class="search--title-litle d-md-none d-sm-block d-xs-block">Recherche annuaire Interne
                            </h3>
                            <!-- SUR LES GRANDS ECRANS -->
                            <h3 class="search--title d-none d-xs-none d-sm-none d-md-block d-lg-block">Recherche
                                annuaire Interne</h3>

                            <form action="" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Que recherchez-vous ?"
                                        aria-label="Que recherchez-vous ?" aria-describedby="basic-addon2">
                                    <span class="input-group-text" id="basic-addon2">Trouver</span>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab" tabindex="0">Lorem ipsum dolor sit, amet
                                consectetur adipisicing elit. Quasi adipisci explicabo perferendis debitis
                                inventore. Provident illo nulla labore nihil hic ipsa, commodi pariatur blanditiis?
                                Asperiores architecto porro unde commodi voluptatem.</div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab" tabindex="0">Lorem ipsum dolor sit, amet
                                consectetur adipisicing elit. Quia eius iusto, corrupti soluta voluptate blanditiis
                                laboriosam enim temporibus laudantium, assumenda placeat, atque voluptas nobis
                                ratione consequatur! Laudantium, ipsam! Architecto, earum.</div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab" tabindex="0">Lorem ipsum dolor sit, amet
                                consectetur adipisicing elit. Quia eius iusto, corrupti soluta voluptate blanditiis
                                laboriosam enim temporibus laudantium, assumenda placeat, atque voluptas nobis
                                ratione consequatur! Laudantium, ipsam! Architecto, earum.</div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab" tabindex="0">Lorem ipsum dolor sit, amet
                                consectetur adipisicing elit. Quia eius iusto, corrupti soluta voluptate blanditiis
                                laboriosam enim temporibus laudantium, assumenda placeat, atque voluptas nobis
                                ratione consequatur! Laudantium, ipsam! Architecto, earum.</div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <div class="row" id="footer">
            <div class="col-md-12">
                <h3 class="footer--title">© 2023 - Tout droit réservé </h3>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>

</html>