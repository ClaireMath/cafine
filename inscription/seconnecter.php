
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="seconnecter.css">

	<title></title>
</head>
<body>

<!-- ajout du header en include --> 
<?php 
include "../header/header.html"
?>

  


<div class=" card-body"   style="max-width: 30rem " >
  <form>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Veuillez entrer votre adresse mail.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mot de passe </label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1"> Se souvenir de moi  </label>
      </div>
      <button type="submit" class="btn btn-primary"> Validez </button>
      
     <a href="/cafine/achat/achat.html"> <button type="submit " class="btn  btn-danger ms-1 ">Annuler </button> </a>
    </form>
</div>









<!--- javaSciprt -->
<script type="text/javascript"  src="header.js"  ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>