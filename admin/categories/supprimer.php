<?php  

//echo "ID de categorie".$_GET['idc'];

$idcategorie=$_GET['idc'];
include "../../inc/functions.php";
$conn=connect();
$requette="DELETE FROM categories WHERE id='$idcategorie'";
$resultat=$conn-> query($requette);
if($resultat){
    //echo"categorie supprimer";
    header('location:liste.php?delete=ok');
}
?> 