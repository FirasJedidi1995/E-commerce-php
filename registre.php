<?php 

session_start();

//condition bech lutilisateur ki yabda halel session ma3andouch l ha9 ihel l page connexion ken maysaker
if(isset($_SESSION['nom'])){//ma3neha lutilisateur connecte
  header('location:profile.php');
  }


include "inc/functions.php";
$showRegistrationAlert=0;
$categories = getALLCategories();//php start bech l categorie 1 w 2 w 3 w 4 yatl3ou fel page register


if(!empty($_POST)){

  if(  AddVisiteur($_POST)){
    $showRegistrationAlert=1;
  }

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.css"><!--SWEET ALERT POUR MINDIQUER QUANT JAJOUTE UN VISITEUR-->
    <script src="khedma.js"></script>

</head>
<body>
<?php  //php start

include "inc/header.php";

//php end?> 
      <!--Fin nav-->
      <div class="col-12 p-5">
        <h1 class="text-center">Registre</h1>
        <form action="registre.php" method="post" name="f" id=myform>
            <div class="mb-3">

              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"><span id="mail"> </span>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Nom</label>
              <input type="text" name="nom" class="form-control" id="nom"><span id="snom"> </span>
            </div>
            
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Prenom</label>
                <input type="text"name="prenom" class="form-control" id="pnom"><span id="spnom"></span>
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">telephone</label>
                <input type="text" name="telephone" class="form-control" id="tel"><span id="stel"> </span>
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" name="mp" class="form-control" id="mp"><span id="mdp"> </span>
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm-Mot de passe</label>
                <input type="password" name="cmp" class="form-control" id="cmp" required>
              </div>

              <button type="submit" class="btn btn-primary"onclick="verif()">Sauvegarder</button>
              
          </form>
          
      </div>
  
      
      
<!--FOOTER-->
<?php  
      include "inc/footer.php";
 ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.all.min.js"></script><!--SWEET ALERT POUR MINDIQUER QUANT JAJOUTE UN VISITEUR-->
<?php  //php ALERT
if($showRegistrationAlert==1){
  print "
  <script >
   
  Swal.fire({
  icon: 'Success',
  text: 'Creation de compte avec succes!',
  icon:'success',
  confirmButtonText:'ok',
  timer:2000
})
</script>
  ";
}


//php end?>


</html>