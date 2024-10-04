<?php 
session_start();
//test user connecte
if(!isset($_SESSION['nom'])){//ma3neha lutilisateur non connecte
    header('location:../connexion.php');
    Exit();//bech mayet3adech lel code li mba3d
}

//selectionner le produit avec id
include "../inc/functions.php";

//connexion bd

$conn=connect();

$visiteur=$_SESSION['id'];


// //var_dump($_POST);
 $id_produit= $_POST['produit'];
 $quantite= $_POST['quantite'];


// //requette de select
 $requette="SELECT prix,nom FROM produits WHERE id='$id_produit'";
// //execution requette
 $resultat=$conn-> query($requette);
// //$prix=$resultat->fetch();
 $produit=$resultat->fetch();
// //echo $prix; echo maemchoch 3la tableau w ahna ghadi 3ana tableau
// //var_dump($prix);
 $total = intval($quantite) * intval($produit['prix']);

 $date=date('Y-m-d');


if (!isset($_SESSION['panier'])){ //panier n'existe pas
    $_SESSION['panier']=array($visiteur,0,$date,array());//creation de panier

}
$_SESSION['panier'][1]+=$total;

$_SESSION['panier'][3][] =array( $quantite,$total,$date,$date,$id_produit,$produit['nom']);





header('location:../panier.php')



    ?> 