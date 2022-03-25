<?php
session_destroy();
$dec="Deconnecte avec succes";
header("Location:../Med/LoginMedecin.php?dec=$dec");
?>
