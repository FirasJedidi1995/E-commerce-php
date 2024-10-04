<?php //php start 

require_once('inc/functions.php');//pour que la fonction s'appelle une seule fois 

$categories = getALLCategories();


//php end?> 

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">E-Dressing-Room</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
             
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  CATEGORIES
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                <?php  //php start

                foreach($categories as $categorie){
                  print  '<li><a class="dropdown-item" href="#">'.$categorie['nom'].'</a></li>';
                }


                //php end?> 

                 
                </ul>
              </li>
              <?php  
              if (isset($_SESSION['nom'])){

                print '<li class="nav-item">
                <a class="nav-link active" aria-current="page" href="profile.php">Profile</a>
              </li>';
              if(isset($_SESSION['panier'][3]) && is_array($_SESSION['panier'][3])){//ken 3ana panier affichili 9adeh feha ken ma3anech panier affichili 0
                print '<li class="nav-item">
                <a class="nav-link active" aria-current="page" href="panier.php">Panier<span class="text-danger">( ' . count($_SESSION['panier'][3]).' )</span></a>
              </li>';
              }else{print '<li class="nav-item">
                <a class="nav-link active" aria-current="page" href="panier.php">Panier<span">( 0 )</span></a>
              </li>';

              }
              
              }else{

              
                  print '
                  <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="connexion.php">Connexion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="registre.php">Register</a>
              </li>';
                 
              }

            ?> 


              
            </ul>
            <form class="d-flex" action="index.php" method="POST">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search" >
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <?php  //php start
            if (isset($_SESSION['nom'])){
              print'<a href="deconnexion.php" class="btn btn-primary">deconnexion</a>';

            }
                //php end?> 



          </div>
        </div>
      </nav>