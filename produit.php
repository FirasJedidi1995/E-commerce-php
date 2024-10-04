<?php //php start 
session_start();
include "inc/functions.php";

$categories = getALLCategories();

//APPEL DE LA FONCTION getProduitById

if (isset($_GET['id'])){
 $produit= getProduitById($_GET['id']);

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
              <!--nouvelle card-->

      <div class="row col-12 mt-4">
      <?php if(isset($_SESSION['etat']) && $_SESSION['etat']==0){ 

print'<div class="alert alert-danger">Compte non validée  </div>
';
} ?> 

        </div>

      <div class="card col-8 offset-2">
  <img src="images/<?php  //php  pour que quant je clique sur produit 1 l'image de produit 1 s'affiche et exetera ijib fihom mel BDD

echo $produit['image']

//php end?>" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">
  <?php  //php  pour que quant je clique sur produit 1 le nom de produit s'affiche 1 et exetera ijib fihom mel BDD

      echo $produit['nom']

  //php end?> </h5>
    <p class="card-text"><?php  //php  pour que quant je clique sur produit 1 la description nom de produit 1 s'affiche et exetera ijib fihom mel BDD

echo $produit['description']

//php end?>
</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php  //php  pour que quant je clique sur produit 1 le prix de produit 1 s'affiche et exetera ijib fihom mel BDD

    echo $produit['prix']

//php end?> Dt
</li>

<?php  foreach($categories as $index=> $c){
if($c['id']==$produit['categorie'])
{
  print ' <button class="btn btn-success mb-2">'.$c['nom'].'</button>';
}
}
?>    

    
  </ul>
  <div class="col-12 m-2 ">
  <form class="d-flex" action="actions/commander.php" method="POST">
    <input type="hidden" value="<?php echo $produit['id'] ?>" name="produit">
    <input type="number" name="quantite" class="form-control" step="1" placeholder="Quantite du produit ...">
  <button type="submit" <?php if(isset($_SESSION['etat']) && $_SESSION['etat']==0){ echo"disabled" ;} ?> class="btn btn-primary">Commander</button>

  </form>
</div>
</div>



        
       
      </div>

      <?php  
      include "inc/footer.php";
       ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>