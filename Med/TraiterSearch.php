<?php
  session_start();
  if (!isset($_SESSION['login'])){
    header("Location:LoginMedecin.php?err=err");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Luxe Optique</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="../lib/unveil-effects/animations.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- =======================================================
    Template Name: MinimalLanding
    Template URL: https://templatemag.com/minimallanding-bootstrap-landing-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->

  <style>

  #toprint{
    background:tan;
  }

  #output{
    width: 500px;
    position: absolute;
    overflow: hidden;
    background: white;
    box-shadow: 0 0 10px black;
    border-radius: 10px;
    position: relative;
    top: 50%;
    left: 50%;
    bottom: 50%;
    right: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    padding: 10px;
    text-align: center;
  
  /* display: none; */

  }
  /* Print */
  @media print{
     body * {
        visibility:hidden;
      }
    }
    #output, #output * {
      visibility:visible;
    }



  </style>
  <script type='text/javascript'>
     // PRINT ONE

     function CheckedOn(id) {
      $.ajax({
        type:'POST',
        url:'../Print/pageToP.php',
        // async:true,
        data:{
          name:id,
        },
        success:function(data){
          $('#output').html(data);
          $('#output').style.display = "block";
          $('.Overlay').style.display = "none";

        }
      });    
    }

  
  // PRINT ALL

  $(document).ready(function(){
    $('#hide').click(function(){
      // alert('hey');
      $.ajax({
        type:'POST',
        url:'../Print/PrintAll.php',
        data:{
          name:$('#toprint').val(),
        },
        success:function(data){
          $('#output').html(data);
          $('#output').style.display = "block";
          $('.Overlay').style.display = "none";

        }
      });
    });
  });
      
      

 
</script>

</head>
  

<body onload="window.location.hash = 'data'">
<div id="navigation" class="navbar navbar-fixed-top">
    <div class="contain">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="glyphicon glyphicon-th-list"></i>
        </button>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
        <li ><a href="../index.html" class="smoothscroll">Home</a></li>
          <li class='active'><a href="search.php" class="smoothscroll">Rechercher </a></li>
          <li><a href="waiting.php" class="smoothscroll">Consulter </a></li>
          <li><a href="changePassMed.php" class="smoothscroll">Changer de mot de passe </a></li>
          <li><a href= "../Deconnexion/MedDisconnect.php"
 class="smoothscroll">Se deconnecter</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
    <!-- BACK UP BUTTONS -->


    <div>
    <div id='back'>
        <a href="#null" onclick="javascript:history.back();">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="tan" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
        </svg>
        </a>
    </div>
  <div id='up'>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="tan" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
        <path fill-rule="evernod" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
      </svg>
  </div>
  </div>
<!-- BACK UP BUTTONS -->
  <!--  ********** HEADER SECTION ********** -->
  <a href="../index.html">

  <div id="h" class="slide story">
    <div class="container">
      
        <div class="row centered" >     
        </div>
      
      <!--/row -->
    </div>
    <!-- /container -->
  </div>
</a>
  <!--/header-->

  <!--  ********** WHITE SECTION ********** -->
  <div id="w">
    <div class="container">
      <div class="row centered">
        <div class="col-md-8 col-md-offset-2">
          <h4>DEPARTEMENT GENIE INFORMATIQUE<i class="glyphicon glyphicon-heart"></i></h4>
          <br/>
          <i class="glyphicon glyphicon-chevron-down"></i>
        </div>
        <!--col-md-8 -->
      </div>
      <!--/row -->
      
    </div>
    <!--/container -->
  </div>
  <!--/w -->

  <!--  ********** GREEN SECTION ********** -->
  <div>
    <div class="container">
      <div class="row mt">
        <div class="col-md-6 centered">
        </div>
        <!--/col-md-6 -->
        <?php
        require_once "../Connexion.php";
          function Insertion($con,$req)
          {
              return mysqli_query($con,$req);
          }



          $limit=count($_REQUEST);
          for ($i=1; $i <=$limit ; $i++) {
            $id="add".$i;
           
            if (isset($_REQUEST[$id])) {
              $recuperer= explode("*", $_REQUEST[$id]);
            $Numero=$recuperer[0];
            $Nom=$recuperer[1];
            $Prenom=$recuperer[2]." ".$Nom;
            $p=$recuperer[2];



//Informations patients
          $reqCons="SELECT * FROM client WHERE Tel=".$Numero." and NomCli='".$Nom."'and PrenomCli LIKE'%".$p."%'";

          $tab=mysqli_fetch_all(Insertion($con,$reqCons),MYSQLI_ASSOC);
          if (empty($tab)) {
            $err="Informations non trouvees";
          header("Location:search.php?result=$err");
        }
        else {
          $chaine1="<table class='table table-striped table-condensed  glass'><tr><th>Nom </th><th>Prenom</th><th>Sexe</th><th>Age</th><th>Telephone</th><th>Email</th><th>Assurance</th></tr>";
          foreach($tab as $ligne){
          $NomCli=$ligne['NomCli'];
          $PrenomCli=$ligne['PrenomCli'];
          $Sexe=$ligne['Sexe'];
          $Tel=$ligne['Tel'];
          $email=$ligne['Email'];
          $assurance=$ligne['Assur'];
          $today=date("Y-m-d");
          $age= date_diff(date_create($ligne['DateNaiss']),date_create($today));

       $chaine1=$chaine1."<tr><td>$NomCli</td><td>$PrenomCli</td><td>$Sexe</td><td>".$age->format('%y')."</td><td>$Tel</td><td>$email</td><td>$assurance</td></tr>";
        }

        $chaine1=$chaine1."</table>";
        }



        

//Consultation

          $sql = "SELECT C.IdMedecin ,C.AccDroite,C.AccGauche,C.BioDroite,C.BioGauche,C.FondDroite,C.FondGauche,C.LunDroite,C.LunGauche,C.DernierRV,C2.* FROM consultation1 C natural join consultation2 C2  WHERE C.IdCli=C2.IdCli and C2.IdCli=".$Numero." and prenom='".$Prenom."' ";
        
          $tab1=mysqli_fetch_all(Insertion($con,$sql),MYSQLI_ASSOC);
         
          $chaine="<table class='table table-striped table-bordered table-hover table-responsive Overlay glass'  >
                      <tr>
                      <th>Print</th>
                  <th>Date</th>
                  <th>Id Medecin</th><th colspan='2'>Accuite Visuelle</th><th colspan='2'>Pression Intraoculaire</th><th colspan='2'>Mouvement occulaires/Vue couleur</th><th colspan='2'>Lunettes </th><th colspan='2'>Examen Biomicroscopique </th><th colspan='2'>Examen  du fond d'oeil</th><th>Commentaires </th><th>Posologie</th>
              </tr>
              <tr>
                  <th></th>
                  <th></th><th>Droite</th><th>Gauche</th><th>Droite</th><th>Gauche</th><th>Droite</th><th>Gauche</th><th>Droite</th><th>Gauche</th><th>Droite</th><th>Gauche</th><th>Droite</th><th>Gauche</th>
                  <th></th>
                  <th></th>
              </tr>";
              $i=0;

         foreach($tab1 as $ligne)
         {
              $IdCli=$ligne['IdCli'];
              $AccDroite=$ligne['AccDroite'];
              $AccGauche=$ligne['AccGauche'];
              $BioDroite=$ligne['BioDroite'];
              $BioGauche=$ligne['BioGauche'];
              $FondDroite=$ligne['FondDroite'];
              $FondGauche=$ligne['FondGauche'];
              $LunDroite=$ligne['LunDroite'];
              $LunGauche=$ligne['LunGauche'];
              $IdMedecin=$ligne['IdMedecin'];
              $Droite_Mouv=$ligne['Droite_Mouv'];
              $Gauche_Mouv=$ligne['Gauche_Mouv'];
              $Droite_Vue=$ligne['Droite_Vue'];
              $Gauche_Vue=$ligne['Gauche_Vue'];
              $PressDroite=$ligne['PressDroite'];
              $PressGauche=$ligne['PressGauche'];
              $Commentaires=$ligne['Commentaires'];
              $Posologie=$ligne['Posologie'];
              $DernierRV=$ligne['DernierRV'];
              $i++;
              $id=$DernierRV."*".$Numero."*".$Nom."*".$p;
              $a='CheckedOn("'.$DernierRV.'*'.$Numero.'*'.$Nom.'*'.$p.'");';
              $chaine=$chaine."<tr><td class='btn'><input  id='toprint' type='checkbox' name='add".$i."' value=".$id." onchange='
             $a'></td><td>$DernierRV</td><td>$IdMedecin</td><td>$AccDroite/10</td><td>$AccGauche/10</td><td>$PressDroite</td><td>$PressGauche</td><td>$Droite_Mouv/$Droite_Vue</td><td>$Gauche_Mouv/$Gauche_Vue</td><td>$LunDroite</td><td>$LunGauche</td><td>$BioDroite</td><td>$BioGauche</td><td>$FondDroite</td><td>$FondGauche</td><td>$Commentaires</td><td>$Posologie</td></tr>";
              
            }
          $chaine=$chaine."<div class='form-send'>
          <button type='submit' class='btn btn-primary' id='hide'>Imprimer Tout</button>
        </table>";
          if (empty($tab1)) {
            $chaine=" <div class='alert alert-danger' role='alert'>Informations non trouvees</div>";
        }
             break;
          }
          else{
            $limit++;
          }
        }
?>
        <div class="col-md-4" id='data'>
          
          <?php
       echo "<div data-effect='slide-right' >".$chaine1."</div>";
          ?>
          
        <!--/col-md-4 -->

      </div>
      <!--/row -->
    </div>
    <!--/container -->
  </div>
  <!--/G -->

<!--  ********** CTA SECTION ********** -->
      <div class='container'>
        
      <table>
        <tbody id="output" > 
         
        </tbody>
       
      </table>
      
      </div>

  <!--  ********** GREEN SECTION ********** -->
  <div>
    <div class="container-fluid">
      <div style="padding-top: 5%;">
        <div class="centered">
          
         <div  >
         <?php
       echo "<div data-effect='slide-right'>".$chaine."</div>";
          ?>
       
        </div>
        </div> 
        <!--/col-md-6 -->


        <!--/col-md-4 -->

      </div>
      <!--/row -->
    </div>
    <!--/container -->
  </div>
  <!--/G -->






  <!-- / copyrights -->

  <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>  <script src='../js/myJS.js'></script>  <script src="../lib/unveil-effects/unveil-effects.js"></script>
  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

</body>
</html>
