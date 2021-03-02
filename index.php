<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header/header.css">  
    <link rel="stylesheet" href="./FOOTER/styleFooter.css">  

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<!--  <link href="../footer/footer.css" rel="stylesheet" />  -->
    <title>Cafiné</title>
</head>
<body>

<!-- ajout du header en include --> 

<?php 
include "header/header.html"
?>


<section>
                 <div class="leftCtn"> 
                <p> Cafiné a vu le jour suite à la rencontre entre un passionné de spiritueux et différents artisans français. Ce qui nous a réunis, c’est la passion des produits artisanaux de qualité. Nous avons souhaité rendre hommage à la richesse des spiritueux français. </p>
        
                  <p>Notre ambition est d'être des pionniers, des provocateurs et des créateurs de nouvelles saveurs. Nous souhaitons dépoussiérer l’image des spiritueux en mélangeant savoir-faire français et créations originales. Ceci afin de reconnecter les consommateurs avec des saveurs oubliées et leur faire redécouvrir la richesse des spiritueux français.</p>
                  <p>La seule limite à notre créativité est notre imagination. </p>
 
                  <p>Notre concept est d’utiliser des fûts ayant servis à l’élevage des meilleurs spiritueux français pour y affiner du café. </p>
                  <p>Nous travaillons aussi sur le mariage du chocolat et du thé avec les spiritueux au travers de procédés innovants.</p>
                  </div>
                <div class="rightCtn">
<img src="./IMAGES_CL/PhotosThomas/barrels.jpg" alt="cave avec futs" class="photoFuts">
                </div>
            </section>
<?php
include "FOOTER/footerCl.html"
?>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>