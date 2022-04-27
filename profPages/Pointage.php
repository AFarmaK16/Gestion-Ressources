<?php
session_start();
require_once "../Connexion.php";
require_once "../function.php";

// Recuperer datas
$recuperer= explode("*", $_POST['name']);
$idEDT=$recuperer[0];
$jour=$recuperer[1];
$cours=$recuperer[2];
$hD=$recuperer[3];
$num=$recuperer[4];

// ****************INSERTION DONNEES***************

$reqUpdate="Update EDT set nbPointage=nbPointage+1,PointAuj=True where id_Prof='".$_SESSION['login']."'and Jour='".$jour."'and idEDT='".$idEDT."' and HeureDebut='".$hD."'";
$result = mysqli_query($con, $reqUpdate);

echo"<i class='fa fa-check' style='color:green'></i>";

?>