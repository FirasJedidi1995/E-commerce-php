<?php //php start 
session_start();
include "inc/functions.php";
//var_dump($_SESSION['panier']);
$total=0;
if(isset($_SESSION['panier'])){
$total=$_SESSION['panier'][1];
}
$categories = getALLCategories();

if (!empty($_POST)){ //click sur boutton search
 //echo $_POST['search'];   li nektbou f search yatla3li l fou9
 $produits=searchProduits($_POST['search']);
}else{//bech ki manenzel 3ala chy yatl3ouli les produits lkol
   

  $produits=getALLProducts();
}
$commandes=array();
if (isset($_SESSION['panier'])){
    if(count($_SESSION['panier'][3])>0){
        $commandes=$_SESSION['panier'][3];
    }

}

//php end?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-SHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
<?php  //php  NAV

include "inc/header.php";

//php end?> 

      <div class="row col-12 mt-4 p-5">
        <H1>Panier utilisateur</H1>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Produit</th>
      <th scope="col">Quantite</th>
      <th scope="col">Total</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  <?php
  foreach($commandes as $index=>$commande )
  {
    print' <tr>
    <th scope="row">'.($index+1).'</th>
    <td>'.$commande[5].'</td>
    <td>'.$commande[0].' pieces</td>
    <td>'.$commande[1].' DTT</td>
    <td>   <a href="actions/enlever-produit-panier.php?id='.$index.'" class="btn btn-danger">Supprimer</a>
    </td>

  </tr>';
  }
  
  ?> 
    
    
  </tbody>
</table>



<div class="text-end mt-3">
    <h3>Total : <?php echo   $total?> DTT</h3>
    <hr />
    <a href="actions/valider-panier.php" class="btn btn-success" style="width:100px">Valider</a>
</div>       
      </div>

      <?php  
      include "inc/footer.php";
       ?> 


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>