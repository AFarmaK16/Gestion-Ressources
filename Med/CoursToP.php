<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../img/logo.png" rel="icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Libraries CSS Files -->
<link href="../lib/unveil-effects/animations.css" rel="stylesheet">
<!-- Main Stylesheet File -->
<link href="../css/style.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <title>Luxe Optique</title>
</head>

<style>
        @media print{
            #p {
                visibility:hidden;
            }
            #close {
            visibility:hidden;
            }
            #contain{
                /* width: 500px; */
                position: relative;
                top: 0%;
                left: 15%;
                bottom: 50%;
                right: 10%;
                font-size: 30px;
                padding-top: 0%;
                
            }
            img{
                height: 300px;
                width: 300px;
            }
            
 
        }



</style>
<script>
    function closeFunction(){
    document.getElementById('contain').style.display='none';
    
}
</script>
<body>
<?php
require_once "../Connexion.php";
// Recuperer datas
    $recuperer= explode("*", $_POST['name']);
  $classe=$recuperer[0];
  $jour=$recuperer[1];
    // $login=$_SESSION['login'];
    $cours=$recuperer[2];
//  print_r($recuperer);
// Informations d'identification


    // $tab=mysqli_fetch_all(mysqli_query($con,$reqCons),MYSQLI_ASSOC);
    // if (empty($tab)) {
    // $err="Informations non trouvees";
    // header("Location:search.php?result=$err");
    // }
    // else {
    // foreach($tab as $row){
    // $NomCli=$row['NomCli'];
    // $PrenomCli=$row['PrenomCli'];
    // $Sexe=$row['Sexe'];
    // $Tel=$row['Tel'];
    // $email=$row['Email'];
    // $assurance=$row['Assur'];
    // $today=date("Y-m-d");
    // $age= date_diff(date_create($row['DateNaiss']),date_create($today));
    // }
 
    
    // }
 

// Informations consultations


$reqJ="SELECT  * FROM EDT,cours where id_Prof='".$_SESSION['login']."' and EDT.id_Cours=cours.idCours and Jour='".$jour."'and classe='".$classe."'";

$result = mysqli_query($con, $reqJ);
    if(mysqli_num_rows($result)>0){
        $i=0;
        // $chaine="<table class='table table-condensed' style='margin-top: 50px;'><form name='form'><tr style='color:black;background:white;'><th>Jour</th><th>Cours</th><th>Salle</th><th>Classe</th><th>HeureDebut</th><th>HeureFin</th><th>Pointer</th></tr>";
           
        while ($row=mysqli_fetch_assoc($result)) {
            
                $salle=$row['salle'];
                $classe=$row['classe'];
                $HeureDebt=$row['HeureDebut'];
                $HeureFin=$row['HeureFin'];
                $Jour=$row['JOUR'];
                $cours=$row['libelle'];
                if($HeureDebt==date('h:i:s')){
                    $a='button';
                }
                else{
                    $a='hidden';
                }
                // $diff=round((strtotime(date(h:i:s)) - strtotime($HeureDebt))/60);
                // $info=$Telephone."*".$Nom."*".$Prenom."*".$idrv;
        //         $chaine=$chaine."<tr><td>$Jour</td><td>$cours</td><td>$salle</td><td>$classe</td><td>$HeureDebt</td><td>$HeureFin</td><td>Pointer<input type='hidden'></td></tr>";
        // $chaine=$chaine."</table>";
       echo  "<input type='".$a."' value='Pointer'>";
    //    echo "Avancement: ";
    }
}
    // else{
    //     echo "<tr><td>0 result's found</td></tr>";
    // }
  // INFOS DU MEDECIN CONSULTANT
//   $med="SELECT NomMed,PrenomMed from medecin where email='".$IdMedecin."'";
//   $t=mysqli_fetch_all(mysqli_query($con,$med),MYSQLI_ASSOC);
//   foreach($t as $row){
//       $NomM=$row['NomMed'];
//       $PrenomM=$row['PrenomMed'];
//   }

// echo $chaine;
        



?>
</body>
</html> 