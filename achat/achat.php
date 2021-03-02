<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../header/header.css">

    <link rel="stylesheet" href="achat.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!--  <link href="../footer/footer.css" rel="stylesheet" />  -->
    <title>Cafiné</title>
</head>

<body>

    <!-- ajout du header en include -->


    <?php
    include "../header/headerBoutique.html"
    ?>


    <!-- ajout de card  -->

    <div class="lesarticles">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card h-100">


                    <div class="container">
                        <img src="/cafine/IMAGES_CL/coffeeGIF/cafe2.gif" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal  ">
                        <div class="overlay">Ajouter aux panier <img src="panier.png " style="width: 11%;" alt="panier"> </div>

                        <!-- ajout fenetre panier  -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Êtes vous sur de rajouter cette arcticle à votre panier? </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <img class="ajoutpanier" src="/cafine/IMAGES_CL/coffeeGIF/cafe2.gif" style="width: 30%; ">
                                    </div>

                                    <h5 class="titrePanier" > Voici le premier café </h5>

                                    <div class="modal-footer">
                                        <p class="prixAjout "> Prix : 10 € </p>
                                        <div>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <button type="button" class="btn btn-primary">Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fin ajout fenetre panier  -->

                    </div>
                    <div class="card-body ">
                        <h5 class="card-title">Voici le premier café</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <!-- fin ajout de card  -->



            <div class="col">
                <div class="card h-100">

                    <div class="container">
                        <img src="/cafine/IMAGES_CL/coffeeGIF/cafe2.gif" class="card-img-top" alt="...">
                        <div class="overlay">Ajouter aux panier <img src="panier.png " style="width: 11%;" alt="panier"> </div>

                        <!-- ajout fenetre panier  -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Êtes vous sur de rajouter cette arcticle à votre panier? </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <img class="ajoutpanier" src="/cafine/IMAGES_CL/coffeeGIF/cafe2.gif" style="width: 30%; ">
                                    </div>

                                    <h5 class="titrePanier" > Voici le premier café </h5>

                                    <div class="modal-footer">
                                        <p class="prixAjout "> Prix : 10 € </p>
                                        <div>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <button type="button" class="btn btn-primary">Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fin ajout fenetre panier  -->

                </div>
                    <div class="card-body">
                        <h5 class="card-title">Voici 2eme café </h5>
                        <p class="card-text"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque beatae ea exercitationem asperiores corporis veritatis voluptatibus ullam odio quia, sint recusandae vero corrupti mollitia repudiandae laboriosam minima velit, sapiente possimus? </p>
                    </div>
                </div>
            </div>





            <div class="col">
                <div class="card h-100">

                    <div class="container">
                        <img src="/cafine/IMAGES_CL/coffeeGIF/cafe2.gif" class="card-img-top" alt="...">
                        <div class="overlay">Ajouter aux panier <img src="panier.png " style="width: 11%;" alt="panier"> </div>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Voici café</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>



        

            <div class="col">
                <div class="card h-100">

                    <div class="container">
                        <img src="/cafine/IMAGES_CL/coffeeGIF/cafe2.gif" class="card-img-top" alt="...">
                        <div class="overlay">Ajouter aux panier <img src="panier.png " style="width: 11%;" alt="panier"> </div>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Voici 4eme article</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!--- javaSciprt -->
    <script type="text/javascript" src="header.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>