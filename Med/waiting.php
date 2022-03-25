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
  <title>Minimallanding - Bootstrap Landing Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/logo.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="../lib/unveil-effects/animations.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
   </head>

<body onload="window.location.hash = 'toshow'">
  <div id="navigation" class="navbar navbar-fixed-top">
    <div class="contain">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="glyphicon glyphicon-th-list"></i>
        </button>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
        <li  ><a href="../index.html" class="smoothscroll">Home</a></li>
          <li><a href="search.php" class="smoothscroll">Rechercher </a></li>
          <li class='active'><a href="waiting.php" class="smoothscroll">Consulter </a></li>
          <li><a href="changePassMed.php" class="smoothscroll">Changer de mot de passe </a></li>
          <li><a href= "../Deconnexion/MedDisconnect.php" class="smoothscroll">Se deconnecter</a></li>
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

  <div id="h">
    <div class="container">
      <div class="row centered">
      
        
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
    <div class="container" id='toshow'>
      <div class="row mt">
     
              <?php 
              if (isset($_GET['success'])) {
               echo "<div class='alert alert-success' role='alert'>".$_GET['success']."</div>";
              }
              if(isset($_GET['erreur'])){
                echo "<div class='alert alert-danger' role='alert'>".$_GET['erreur']."</div>";
              }
           ?>
       
        <div class="col-md-6 centered">
        </div>
        <!--/col-md-6 -->
        <?php
        require_once "../Connexion.php";


          function Insertion($con,$req)
          {
              return mysqli_query($con,$req);

          }



    $reqCons="SELECT DISTINCT Nom,Prenom,Numero FROM Attente order by id asc";
      $tab=mysqli_fetch_all(Insertion($con,$reqCons),MYSQLI_ASSOC);
       $chaine1="<table class='table table-striped table-condensed'><form action='new.php'><tr><th>Nom </th><th>Prenom</th><th>Telephone</th><th>Consulter</th></tr>";
        $i=0;
       foreach($tab as $ligne){
        $Nom=$ligne['Nom'];
        $Prenom=$ligne['Prenom'];
        $Telephone=$ligne['Numero'];
        $i++;
        $info=$Telephone."*".$Nom."*".$Prenom;
       $chaine1=$chaine1."<tr><td>$Nom</td><td>$Prenom</td><td>$Telephone</td><td><input type='checkbox' name='add".$i."' value=".$info."></td></tr>";
        }

        $chaine1=$chaine1."<div class='form-send'>
              <button type='submit' id='hide'>Consulter</button>
            </div></form></table>";    
        $nbResult=Insertion($con,"SELECT * FROM STATISTIQUES");
        $nbTab=mysqli_fetch_all($nbResult,MYSQLI_ASSOC);
        // $nbCons=$nbTab[0]['StatJour'];
?>
        
        <div class="row right">
           
           <div class="col-md-8"></div>
           
          <div class="col-md-4" >
            <p>Statistique du jour</p>
            <p style="border: border-spacing: 0;
  box-shadow: 0 2px 15px tan;
  border-radius: 12px 12px 0 0;"><?php  echo count($nbTab); ?></p>
            <a href="../initialize.php?w"><button id='hide' >Reinitialiser</button></a>
          </div>
        </div>
        <div>
          <p>Nombre de personne sur la Liste</p>
          <div class="col-md-3" style="border: border-spacing: 0;
  box-shadow: 0 2px 15px tan;
  border-radius: 12px 12px 0 0;">
            <p style="color:tan;"><?php  echo count($tab); ?></p>
          </div>
          <br><br><br>
             <span style="font-family: sans-serif;
             background-color: lightgray;">
          <?php 
              if (isset($_GET['reponse'])) {
               echo $_GET['reponse'];
              }
           ?>

        </span>
        <h1>LISTE D'ATTENTE ACTUELLE</h1>
          <?php
      echo "<div data-effect='slide-right' class='glass'>".$chaine1."</div>";
          ?>
        <!--/col-md-4 -->

      </div>
      <!--/row -->
    </div>
    <!--/container -->
  </div>
  <!--/G -->

<!--  ********** CTA SECTION ********** -->
  


 
<div id="copyrights">
    <div class="container">
     
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/minimallanding-bootstrap-landing-template/
          Licensing information: https://templatemag.com/license/
        -->
         
      </div>
    </div>
  </div>
  
  <!-- / copyrights -->

  <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>  
  <script src="../lib/unveil-effects/unveil-effects.js"></script>  <script src='../js/myJS.js'></script>  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

</body>
</html>
