<?php
	session_start();
	if (!isset($_SESSION['login'])){
		header("Location:LoginMedecin.php?err=err");
	  }
	include '../Connexion.php';
	$login=$_SESSION['login'];
	$ancienmdp=$_POST['lastmdp'];
	$nouveaumdp=$_POST['newmdp'];
	function Insertion($con,$req)
	{
	            
	   return mysqli_query($con,$req);
    }
	$req="Select * from medecin where  email ='".$login."' and Password= sha1('".$ancienmdp."')";
	$reqUpdate="Update medecin set Password= sha1('".$nouveaumdp."') where email='".$login."' and Password= sha1('".$ancienmdp."')";
	          $tab=mysqli_fetch_all(Insertion($con,$req),MYSQLI_ASSOC);
	          if (!empty($tab))
	          {
	              Insertion($con,$reqUpdate);
				  session_destroy();
	              $change="Changement effectue avec succes";
	              header("Location:LoginMedecin.php?change=$change");
	          }
	          else{
	            $change="Erreur lors du changement de mot de passe.Veuillez reessayer";
	             header("Location:changePassMed.php?change=$change");
	          }

?>