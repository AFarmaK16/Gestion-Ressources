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
   
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>

</head>

<body  onload="window.location.hash = 'search'">

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
  <div id="g">
    <div class="container">
      <div class="row mt">
        <div class="col-md-6 centered">
          <!-- <img src="../img/chair.png" heigth="50%" width="50%" class="img-responsive aligncenter" width="320" alt="" data-effect="slide-left"> -->
          <object data="../img/svg/domain_names_re_0uun.svg" width="300" height="300"> </object>
        </div>
        <!--/col-md-6 -->

        <div class="col-md-6" id='search'>
        <?php 
              if(isset($_GET['result'])){
                echo "<div class='alert alert-danger' role='alert'>".$_GET['result']." </div>";
              }
              
           ?>

         <form action="Checksearch.php" id="myform" data-effect="slide-right" method='get' class='glass'>
         <fieldset>
           <legend>Rechercher</legend>
           <div id="searchN" class="search">
            <div class="form-group " >
              Nom<input type="text" class="form-control" name="nom">
            </div>
            <div class="form-group">
              Prenom<input type="text"  class="form-control" name="prenom">
            </div>
            <div class="form-group">
              Numero de telephone <input type="tel"  class="form-control" name="tel">
              <span id="myerror"></span>
          </div>
         </div>
         </fieldset>

       
        <div class="form-send">
              <button id="hide" type="submit" class="btn btn-primary">Rechercher</button>
            </div>
        </div>
          </form>
        <!--/col-md-4 -->

      </div>
      <!--/row -->
    </div>
    <!--/container -->
  </div>
  <!--/G -->
     

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
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
  <script src='../js/myJS.js'></script>
  <script src="../lib/unveil-effects/unveil-effects.js"></script>
  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

</body>
</html>
