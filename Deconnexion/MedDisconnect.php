<?php
session_destroy();
$dec="Deconnecte avec succes";
header("Location:../profpages/index.php?dec=$dec");
?>
