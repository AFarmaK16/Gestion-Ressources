<?php
session_destroy();
$dec="Deconnecte avec succes";
header("Location:../AdminManage/LoginAdmin.php?dec=$dec");
?>
