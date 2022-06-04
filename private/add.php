<?php
session_start();

require("../config/commandes.php");

// if(!isset($_SESSION['']))
// {
//     header("Location: ../login.php");
// }

// if(empty($_SESSION['']))
// {
//     header("Location: ../login.php");
// }


// foreach($_SESSION['xRttpHo0greL39'] as $i){
//   $nom = $i->pseudo;
//   $email = $i->email;
// }

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
   	<title> FROMAGE </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    

    

<link href="../assets/css/bootstrapmorphe.min.css" rel="stylesheet">



    
    <!-- Custom styles for this template -->
    <link href="../assets/css/signin.css" rel="stylesheet">

   
    
   

</head>
<body>
  <div class="container">
    <main class="form-signin w-150 m-auto">
      <form>
          
            <h1 class="h3 mb-3 fw-normal text-center">Ajouter un Produit</h1>
    
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" placeholder="url de l'image" name="image" required>
              <label for="floatingInput">url de l'image </label>
            </div>
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingPassword" placeholder="Nom du produit" name="nom" required>
              <label for="floatingPassword">Nom du produit</label>
            </div>
            <div class="form-floating">
              <input type="number" class="form-control" id="floatingInput" placeholder="Prix du produit" name="prix" required>
              <label for="floatingInput">Prix du produit</label>
            </div>
            <div class="form-floating">
              <textarea class="form-control" placeholder="description" name="desc" name="desc" required></textarea>
              <label for="floatingPassword">description</label>
            </div>
    
            <a href=""><button class="w-100 btn btn-md btn-outline-success" type="submit">Ajouter</button></a>
    
      </form>
    </main>
  </div>





    
</body>
</html>

<?php

  if(isset($_POST['valider']))
  {
    if(isset($_POST['image']) AND isset($_POST['nom']) AND isset($_POST['prix']) AND isset($_POST['desc']))
    {
    if(!empty($_POST['image']) AND !empty($_POST['nom']) AND !empty($_POST['prix']) AND !empty($_POST['desc']))
	    {
	    	$image = htmlspecialchars(strip_tags($_POST['image']));
	    	$nom = htmlspecialchars(strip_tags($_POST['nom']));
	    	$prix = htmlspecialchars(strip_tags($_POST['prix']));
	    	$desc = htmlspecialchars(strip_tags($_POST['desc']));
          
          try 
          {
            ajouter($image, $nom, $prix, $desc);
            header('Location: afficher.php');
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }

	    }
    }
  }

?>