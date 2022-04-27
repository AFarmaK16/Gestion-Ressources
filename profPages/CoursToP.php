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

<!-- Bootstrap CSS File -->
<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- Libraries CSS Files -->
<link href="../lib/unveil-effects/animations.css" rel="stylesheet">
<!-- Main Stylesheet File -->
<link href="../css/style.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link href="../assets/demo/demo.css" rel="stylesheet" />
<script>
    function Register(id,num) {
      $.ajax({
        type:'POST',
        url:'Pointage.php',
        data:{
          name:id,
        }
        ,
        success:function(data){
          $('#'+num).html(data);
          document.getElementById('container-fluid').style.display='none'; 
        }
      });    
    }

    function closeFunction(){
        document.getElementById('container-fluid').style.display='none';   
    }

</script>
      <title>Luxe Optique</title>
</head>

<body>
<?php
require_once "../Connexion.php";
require_once "../function.php";



// Recuperer datas
    $recuperer= explode("*", $_POST['name']);
    $idEDT=$recuperer[0];
    $jour=$recuperer[1];
    $cours=$recuperer[2];
    $hD=$recuperer[3];
    $num=$recuperer[4];


$reqJ="SELECT  * FROM EDT,cours where id_Prof='".$_SESSION['login']."' and EDT.id_Cours=cours.idCours and Jour='".$jour."'and idEDT='".$idEDT."' and HeureDebut='".$hD."'";

$result = mysqli_query($con, $reqJ);
    if(mysqli_num_rows($result)>0){
           
        while ($row=mysqli_fetch_assoc($result)) {        
                $salle=$row['salle'];
                $classe=$row['classe'];
                $HeureDebt=$row['HeureDebut'];
                $HeureFin=$row['HeureFin'];
                $Jour=$row['JOUR'];
                $cours=$row['libelle'];
                $diff=diff_time($HeureDebt,'0:30:0');
                $add30=additioneheure('0:30:0',$HeureDebt);
            }

    $heureActu=date('H:i:s');    
    if($heureActu>$diff && $heureActu<$add30){
        $a='button';
    }
    else{
        $a='button';
    }

    $todo='Register("'.$idEDT.'*'.$Jour.'*'.$cours.'*'.$hD.'*'.$_SESSION['login'].'","'.$num.'")';
    $chaine="<div id='container-fluid'>";
    $chaine=$chaine."
    <div class='float-end mt-8'>
       <button class='btn btn-link text-dark p-0 fixed-plugin-close-button '>
         <i class='fa fa-close' id='close'  onclick='closeFunction();' style='color:red'></i>
       </button>
     </div>
    ";
      $chaine=$chaine."<div style='text-align:center;'>
      <div class='card-header card-header-primary '>
        <h4 class='card-title'>$cours</h4>
      </div>
        Debut:$HeureDebt<br>Salle:$salle<br>Classe:$classe<br>
      <input  class='btn btn-primary' type='".$a."' value='Pointer' onclick='$todo'>
      ";
      $chaine=$chaine."</div></div>";
       echo $chaine;
       
    }
?>
</body>
</html> 