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
          <li class="active"><a href="search.php" class="smoothscroll">Rechercher </a></li>
          <li ><a href="waiting.php" class="smoothscroll">Consulter </a></li>
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
        
        <!--/col-md-6 -->
        <?php
        require_once "../Connexion.php";

          function Insertion($con,$req)
          {
              return mysqli_query($con,$req);

          }

          
            // IF TOUS LES CHAMPS NE SONT PAS RENSEIGNEES

            //##################################################

       
            echo "<br>";
            if (!empty($_GET['nom'])&& !empty($_GET['prenom']) && empty($_GET['tel'])) {
             
              $reqCons="SELECT NomCli,PrenomCli,Sexe,DateNaiss,Tel FROM CLIENT WHERE NomCli='".$_GET['nom']."'and PrenomCli LIKE'%".$_GET['prenom']."%'";

            }
            else if (!empty($_GET['nom']) && !empty($_GET['tel']) && empty($_GET['prenom'])) {
              $reqCons="SELECT NomCli,PrenomCli,Sexe,DateNaiss,Tel FROM CLIENT WHERE Tel=".$_GET['tel']." and NomCli='".$_GET['nom']."'";
             
            }
            else if (!empty($_GET['prenom'])&& !empty($_GET['tel']) && empty($_GET['nom'])) {
              $reqCons="SELECT NomCli,PrenomCli,Sexe,DateNaiss,Tel FROM CLIENT WHERE Tel=".$_GET['tel']." and PrenomCli LIKE'%".$_GET['prenom']."%'";
            
            }
            else if (!empty($_GET['prenom'])&& !empty($_GET['tel']) && !empty($_GET['nom'])) {
              $reqCons="SELECT NomCli,PrenomCli,Sexe,DateNaiss,Tel FROM CLIENT WHERE Tel=".$_GET['tel']." and NomCli='".$_GET['nom']."'and PrenomCli LIKE'%".$_GET['prenom']."%'";
             
            }
            else{
              if (empty($_GET['tel'])) {
                $_GET['tel']=0;
               
              }
              if (empty($_GET['nom'])) {
                $_GET['nom']=0;
              }
              if (empty($_GET['prenom'])) {
                $_GET['prenom']=0;
              }
              $reqCons="SELECT NomCli,PrenomCli,Sexe,DateNaiss,Tel FROM CLIENT WHERE Tel=".$_GET['tel']." or NomCli='".$_GET['nom']."'or PrenomCli LIKE'%".$_GET['prenom']."%'";
             
            }
  
          $i=0;
      $tab=mysqli_fetch_all(Insertion($con,$reqCons),MYSQLI_ASSOC);
       $chaine1="<table class='table table-striped table-condensed glass'><form action='TraiterSearch.php'><tr><th>Nom </th><th>Prenom</th><th>Sexe</th><th>Age</th><th>Telephone</th><th>Selectionner</th></tr>";
       foreach($tab as $ligne){
        $Nom=$ligne['NomCli'];
        $Prenom=$ligne['PrenomCli'];
        $Sexe=$ligne['Sexe'];
        $Tel=$ligne['Tel'];
        $today=date("Y-m-d");
        $age= date_diff(date_create($ligne['DateNaiss']),date_create($today));
        $i++;
        $id=$Tel."*".$Nom."*".$Prenom;
       $chaine1=$chaine1."<tr><td>$Nom</td><td>$Prenom</td><td>$Sexe</td><td>".$age->format('%y')."</td><td>$Tel</td><td><input type='checkbox' name='add".$i."' value=".$id."></td></tr>";
        }

        $chaine1=$chaine1."<div class='form-send'>
              <button type='submit' class='btn btn-primary' id='hide'>Afficher</button>
            </div></form></table>";
            if (empty($tab)) {
              # code...
              $err="Patient non trouve dans la base";
              header("Location:search.php?result=$err");
            }

?>
        <div >
          <p>Selectionnez la personne dont vous voulez affichez les informations</p>
          <?php
      echo "<div data-effect='slide-right' id='data'>".$chaine1."</div>";
          ?>
        <!--/col-md-4 -->

      </div>
      <!--/row -->
    </div>
    <!--/container -->
  </div>
  <!--/G -->

<!--  ********** CTA SECTION ********** -->
  


  

  
  <!-- / copyrights -->

  <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>  
  <script src="../lib/unveil-effects/unveil-effects.js"></script>  <script src='../js/myJS.js'></script>  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

</body>
</html>
