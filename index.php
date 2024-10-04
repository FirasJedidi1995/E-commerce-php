<?php //php start 
session_start();
include "inc/functions.php";

$categories = getALLCategories();

if (!empty($_POST)){ //click sur boutton search
 //echo $_POST['search'];   li nektbou f search yatla3li l fou9
 $produits=searchProduits($_POST['search']);
}else{//bech ki manenzel 3ala chy yatl3ouli les produits lkol
   

  $produits=getALLProducts();
}


//php end?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Dressing-Room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
<?php  //php  NAV

include "inc/header.php";

//php end?> 

      <div class="row col-12 mt-4">

      <?php  //php  affichage des produits

      
        foreach($produits as $produit){
          print'<div class="col-3">
          <div class="card" style="width: 18rem;">
              <img src="images/'.$produit['image'].'" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">'.$produit['nom'].'</h5>
                <p class="card-text">'.$produit['description'].'</p>
                <a href="produit.php?id='.$produit['id'].'" class="btn btn-primary">Afficher</a>
              </div>
            </div>
      </div>';
        }
      //php end?> 


        
       
      </div>

      <?php  
      include "inc/footer.php";
       ?> 


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>