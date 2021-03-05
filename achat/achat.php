
        <!-- page boutique ne ligne  -->




<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleFooter.css">
    <link rel="stylesheet" href="../FOOTER/styleFooter.css"> 

    

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

<div class="titre sticky-top "  >
  <a href="#tea" > <img  src="tea.png " style="width:20%;" > </a>
  <a href="#cafe" >  <img src="graineCafe.png"  style="width:20% ; " > </a>
  <a href="#chocolat" > <img src="chocolat.png" style="width:20% ; " > </a>
  <a href="#poivre" >  <img src="poivre.png" style="width:20% ; " > </a>
  <a href="#autres" >  <img src="autres.png" style="width:20% ; " > </a>

</div>




<!-- ajout de card thé -->

<div class="lesarticles" id="tea">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card h-100">
                    <div class="container">
                        <img src="/cafine/IMAGES_CL/TEA/tea1.jpg" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal  ">
                        <div class="overlay">Ajouter aux panier <img src="panier.png " style="width: 11%;" alt="panier"> </div>

                        <!-- ajout fenetre panier  -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Êtes vous sur de rajouter cette arcticle à votre panier ? </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <img class="ajoutpanier" src="/cafine/IMAGES_CL/TEA/tea1.jpg" style="width: 30%; ">
                                    </div>

                                    <h5 class="titrePanier" > Voici le premier thé </h5>

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
                        <h5 class="card-title">Voici le premier thé </h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <!-- fin ajout de card  -->



            <div class="col">
                <div class="card h-100">
                    <div class="container">
                        <img src="/cafine/IMAGES_CL/TEA/tea1.jpg" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal  ">
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

                                        <img class="ajoutpanier" src="/cafine/IMAGES_CL/TEA/tea1.jpg" style="width: 30%; ">
                                    </div>

                                    <h5 class="titrePanier" > Voici le deuxième thé </h5>

                                    <div class="modal-footer">
                                        <p class="prixAjout "> Prix : 10€ </p>
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
                        <h5 class="card-title">Voici le deuxième thé </h5>
                        <p class="card-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, aut error veritatis facilis voluptatem blanditiis aliquam provident harum ipsam! Unde, amet delectus? Dignissimos porro iste dolorem cupiditate vel recusandae vero. </p>
                    </div>
                </div>
            </div>






            <div class="col">
                <div class="card h-100">
                    <div class="container">
                        <img src="/cafine/IMAGES_CL/TEA/tea1.jpg" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal  ">
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

                                        <img class="ajoutpanier" src="/cafine/IMAGES_CL/TEA/tea1.jpg" style="width: 30%; ">
                                    </div>

                                    <h5 class="titrePanier" > Voici le 3ème thé </h5>

                                    <div class="modal-footer">
                                        <p class="prixAjout "> Prix : 30 € </p>
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
                        <h5 class="card-title">Voici le troisième thé </h5>
                        <p class="card-text"> t, aut error veritatis facilis voluptatem blanditiis aliquam provident harum ipsam! Unde, amet delectus? Dignissimos porro iste dolorem cupiditate vel recusandae vero. </p>
                    </div>
                </div>
            </div>


        </div>
    </div>


                                <div class="barre" > 
                                
                                </div>
        <!-- ------------------------------------------------------------------- --> 



    <!-- ajout des card café -->

    <div class="lesarticles" id="cafe" >
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
                                        <h5 class="modal-title" id="exampleModalLabel">Êtes vous sur de rajouter cette arcticle à votre panier ? </h5>
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

                                    <h5 class="titrePanier" > Voici le deuxième café </h5>

                                    <div class="modal-footer">
                                        <p class="prixAjout "> Prix : 10€ </p>
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
                        <h5 class="card-title">Voici le deuxième café</h5>
                        <p class="card-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, aut error veritatis facilis voluptatem blanditiis aliquam provident harum ipsam! Unde, amet delectus? Dignissimos porro iste dolorem cupiditate vel recusandae vero. </p>
                    </div>
                </div>
            </div>


 



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

                                    <h5 class="titrePanier" > Voici le 3ème café </h5>

                                    <div class="modal-footer">
                                        <p class="prixAjout "> Prix : 30 € </p>
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
                        <h5 class="card-title">Voici le troisième café</h5>
                        <p class="card-text"> t, aut error veritatis facilis voluptatem blanditiis aliquam provident harum ipsam! Unde, amet delectus? Dignissimos porro iste dolorem cupiditate vel recusandae vero. </p>
                    </div>
                </div>
            </div>




        

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

                                    <h5 class="titrePanier" > Voici le 4ème café </h5>

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
                        <h5 class="card-title">Voici le 4ème café</h5>lectus? Dignissimos porro iste dolorem cupiditate vel recusandae vero. </p>
                    </div>
                </div>
            </div>

        </div>
    </div>


                                 <div class="barre" > 
                                
                                </div>
            <!-- ------------------------------------------------------------------- --> 





<!-- ajout de card Chocolat -->

<div class="lesarticles" id="chocolat" >
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card h-100">
                    <div class="container">
                        <img src="/cafine/IMAGES_CL/Chocolat/chocolat.jpg" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal  ">
                        <div class="overlay">Ajouter aux panier <img src="panier.png " style="width: 11%;" alt="panier"> </div>

                        <!-- ajout fenetre panier  -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Êtes vous sur de rajouter cette arcticle à votre panier ? </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <img class="ajoutpanier" src="/cafine/IMAGES_CL/Chocolat/chocolat.jpg" style="width: 30%; ">
                                    </div>

                                    <h5 class="titrePanier" > Voici le premier Chocolat  </h5>

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
                        <h5 class="card-title">Voici le premier Chocolat  </h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <!-- fin ajout de card  -->



            <div class="col">
                <div class="card h-100">
                    <div class="container">
                        <img src="/cafine/IMAGES_CL/Chocolat/chocolat.jpg" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal  ">
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

                                        <img class="ajoutpanier" src="/cafine/IMAGES_CL/Chocolat/chocolat.jpg" style="width: 30%; ">
                                    </div>

                                    <h5 class="titrePanier" > Voici le deuxième Chocolat  </h5>

                                    <div class="modal-footer">
                                        <p class="prixAjout "> Prix : 10€ </p>
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
                        <h5 class="card-title">Voici le deuxième Chocolat  </h5>
                        <p class="card-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, aut error veritatis facilis voluptatem blanditiis aliquam provident harum ipsam! Unde, amet delectus? Dignissimos porro iste dolorem cupiditate vel recusandae vero. </p>
                    </div>
                </div>
            </div>






            <div class="col">
                <div class="card h-100">
                    <div class="container">
                        <img src="/cafine/IMAGES_CL/Chocolat/chocolat.jpg" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal  ">
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

                                        <img class="ajoutpanier" src="/cafine/IMAGES_CL/Chocolat/chocolat.jpg" style="width: 30%; ">
                                    </div>

                                    <h5 class="titrePanier" > Voici le 3ème Chocolat </h5>

                                    <div class="modal-footer">
                                        <p class="prixAjout "> Prix : 30 € </p>
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
                        <h5 class="card-title">Voici le troisième Chocolat  </h5>
                        <p class="card-text"> t, aut error veritatis facilis voluptatem blanditiis aliquam provident harum ipsam! Unde, amet delectus? Dignissimos porro iste dolorem cupiditate vel recusandae vero. </p>
                    </div>
                </div>
            </div>


        </div>
    </div>



                                        <div class="barre" > 
                                        
                                        </div>
                        
        <!-- ------------------------------------------------------------------- --> 



<!-- ajout de card poivre -->

<div class="lesarticles" id="poivre" >
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card h-100">
                    <div class="container">
                        <img src="/cafine/IMAGES_CL/poivre/poivre.jpg" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal  ">
                        <div class="overlay">Ajouter aux panier <img src="panier.png " style="width: 11%;" alt="panier"> </div>

                        <!-- ajout fenetre panier  -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Êtes vous sur de rajouter cette arcticle à votre panier ? </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <img class="ajoutpanier" src="/cafine/IMAGES_CL/poivre/poivre.jpg" style="width: 30%; ">
                                    </div>

                                    <h5 class="titrePanier" > Voici le premier poivre  </h5>

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
                        <h5 class="card-title">Voici le premier poivre  </h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <!-- fin ajout de card  -->



            <div class="col">
                <div class="card h-100">
                    <div class="container">
                        <img src="/cafine/IMAGES_CL/poivre/poivre.jpg" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal  ">
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

                                        <img class="ajoutpanier" src="/cafine/IMAGES_CL/poivre/poivre.jpg" style="width: 30%; ">
                                    </div>

                                    <h5 class="titrePanier" > Voici le deuxième poivre   </h5>

                                    <div class="modal-footer">
                                        <p class="prixAjout "> Prix : 10€ </p>
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
                        <h5 class="card-title">Voici le deuxième poivre   </h5>
                        <p class="card-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, aut error veritatis facilis voluptatem blanditiis aliquam provident harum ipsam! Unde, amet delectus? Dignissimos porro iste dolorem cupiditate vel recusandae vero. </p>
                    </div>
                </div>
            </div>






            <div class="col">
                <div class="card h-100">
                    <div class="container">
                        <img src="/cafine/IMAGES_CL/poivre/poivre.jpg" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal  ">
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

                                        <img class="ajoutpanier" src="/cafine/IMAGES_CL/poivre/poivre.jpg" style="width: 30%; ">
                                    </div>

                                    <h5 class="titrePanier" > Voici le 3ème poivre  </h5>

                                    <div class="modal-footer">
                                        <p class="prixAjout "> Prix : 30 € </p>
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
                        <h5 class="card-title">Voici le troisième poivre   </h5>
                        <p class="card-text"> t, aut error veritatis facilis voluptatem blanditiis aliquam provident harum ipsam! Unde, amet delectus? Dignissimos porro iste dolorem cupiditate vel recusandae vero. </p>
                    </div>
                </div>
            </div>


        </div>
    </div>


                            <div class="barre" > 
                                
                                </div>
                        
        <!-- ------------------------------------------------------------------- --> 


                    

<!-- ajout de card autres -->

<div class="lesarticles" id="autres" >
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card h-100">
                    <div class="container">
                        <img src="/cafine/IMAGES_CL/SPIRITUEUX/bourbon.jpg" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal  ">
                        <div class="overlay">Ajouter aux panier <img src="panier.png " style="width: 11%;" alt="panier"> </div>

                        <!-- ajout fenetre panier  -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Êtes vous sur de rajouter cette arcticle à votre panier ? </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <img class="ajoutpanier" src="/cafine/IMAGES_CL/SPIRITUEUX/bourbon.jpg" style="width: 30%; ">
                                    </div>

                                    <h5 class="titrePanier" > Voici le premier autres </h5>

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
                        <h5 class="card-title">Voici le premier autres   </h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <!-- fin ajout de card  -->



            <div class="col">
                <div class="card h-100">
                    <div class="container">
                        <img src="/cafine/IMAGES_CL/SPIRITUEUX/bourbon.jpg" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal  ">
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

                                        <img class="ajoutpanier" src="/cafine/IMAGES_CL/SPIRITUEUX/bourbon.jpg" style="width: 30%; ">
                                    </div>

                                    <h5 class="titrePanier" > Voici le deuxième autres    </h5>

                                    <div class="modal-footer">
                                        <p class="prixAjout "> Prix : 10€ </p>
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
                        <h5 class="card-title">Voici le deuxième autres    </h5>
                        <p class="card-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, aut error veritatis facilis voluptatem blanditiis aliquam provident harum ipsam! Unde, amet delectus? Dignissimos porro iste dolorem cupiditate vel recusandae vero. </p>
                    </div>
                </div>
            </div>






            <div class="col">
                <div class="card h-100">
                    <div class="container">
                        <img src="/cafine/IMAGES_CL/SPIRITUEUX/bourbon.jpg" class="card-img-top" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal  ">
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

                                        <img class="ajoutpanier" src="/cafine/IMAGES_CL/SPIRITUEUX/bourbon.jpg" style="width: 30%; ">
                                    </div>

                                    <h5 class="titrePanier" > Voici le 3ème autres   </h5>

                                    <div class="modal-footer">
                                        <p class="prixAjout "> Prix : 30 € </p>
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
                        <h5 class="card-title">Voici le troisième autres   </h5>
                        <p class="card-text"> t, aut error veritatis facilis voluptatem blanditiis aliquam provident harum ipsam! Unde, amet delectus? Dignissimos porro iste dolorem cupiditate vel recusandae vero. </p>
                    </div>
                </div>
            </div>


        </div>
    </div>

<div class="barre" > 
 
</div>


<?php
    include "../FOOTER/footerCl.html"
    ?>









    
    <!--- javaSciprt -->
    <script type="text/javascript" src="header.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>