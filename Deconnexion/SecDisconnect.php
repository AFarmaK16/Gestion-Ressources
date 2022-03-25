<?php
session_destroy();
$dec="Deconnecte avec succes";
header("Location:../Sec/LoginSecretaire.php?dec=$dec");
?>
