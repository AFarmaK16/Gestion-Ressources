<?php
session_destroy();
$dec="Deconnecte avec succes";
header("Location:../Admin/index.php?dec=$dec");
?>
