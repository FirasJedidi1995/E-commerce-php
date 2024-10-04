<?php 
session_start();//9bal man3ayet l ay session lezem naamel start

//test bech manaccedich lel page profile sans passez par connexion
if(!isset($_SESSION['nom'])){//ma3neha pas de session ouvert
header('location:connexion.php');
}
//php end?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<?php 
include "inc/header.php";
?>
<div class="container">
<h1>Bienvenue <span class="text-primary"><?php echo $_SESSION['nom']." ".$_SESSION['prenom']." ";?></span>dans votre compte</h1>
    <h2>Email :<?php echo $_SESSION['email']?></h2>


</div>
    
<?php  
      include "inc/footer.php";
       ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>