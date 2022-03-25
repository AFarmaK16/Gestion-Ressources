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

<body onload="window.location.hash = 'myform'">
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
          <h4>DEPARTEMENT GENIE INFORMATIQUE <i class="glyphicon glyphicon-heart"></i></h4>
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
 

  <!--/G -->




  <?php
        function Insertion($con,$req)
          {
            
              return mysqli_query($con,$req);
          }
          
        function ChangePass($login)
        {

          include '../Connexion.php';
          // $reqIns="INSERT INTO Medecin(email,Password) values ('".$login."',sha1('".$password."'))";
          // Insertion($con,$reqIns,"inserttttttt");
          $req="Select * from medecin where  email ='".$login."'";
          $tab=mysqli_fetch_all(Insertion($con,$req),MYSQLI_ASSOC);
          if (!empty($tab))
          {
               doChange($login);
               
          }
          else{
            $erreur="Login  incorrect";
             header("Location:ChangePassMed.php?erreur=$erreur");
          }

        }

    function doChange($login){
          

     ?>
     
      <div id="navigation" class="navbar navbar-fixed-top">
    <div class="contain">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="glyphicon glyphicon-th-list"></i>
        </button>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="../index.html" class="smoothscroll">Home</a></li>
          <li><a href="search.php" class="smoothscroll">Rechercher </a></li>
          <li><a href="waiting.php" class="smoothscroll">Consulter </a></li>
          <li class="active"><a href="changePassMed.php" class="smoothscroll">Changer de mot de passe </a></li>
          <li><a href= "../Deconnexion/MedDisconnect.php" class="smoothscroll">Se deconnecter</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

    <div id="contact">
      <div class="container" id="g">
        <div class="row">
          <div class="col-md-8 col-md-offset-2" style='color:black;'>
          <?php
          if(isset($_GET['erreur'])){
            echo "<div class='alert alert-danger' role='alert'> ".$_GET['erreur']."</div>";
          }
          if(isset($_GET['change'])){
            echo "<div class='alert alert-danger' role='alert'>".$_GET['change']."</div>";
          }
          ?>
            <h2 class="centered">Changer le mot de passe de <?php echo $_SESSION['login']; ?></h2>
           
            <form  method="POST" id="myform" action="MedChange.php">
            <div class='alert alert-info' role='alert' id='mdpStatus'></div>
              <div class="form-group">
                Ancien mot passe:<input type="password" name="lastmdp" class="form-control rounded-right" >
                <div class="validate"></div>
            </div>
                <div class="form-group">
                Nouveau mot de passe:<input type="password" id="saisie" name="newmdp" class="form-control rounded-right" >
                <div class="validate"></div>
            </div>
            <div class="form-group">
                Confirmer mot de passe:<input type="password" id="confirm" class="form-control rounded-right" >
                <div class="validate"></div>
            </div>
            <div class="form-send">
              <button type="submit" id='hide'>Confirmer</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
        var myform = document.getElementById('myform');
        myform.addEventListener('submit',function (e) {
         var saisie =document.getElementById('saisie');
         var confirm =document.getElementById('confirm');
         var mdpStatus  =document.getElementById('mdpStatus');
         if(saisie.value.trim()!=confirm.value.trim()){
          mdpStatus.innerHTML ="Les nouveaux mot de passe ne sont pas identiques.Veuillez verifier votre saisie";
          mdpStatus.style.color="red";
          e.preventDefault();
        }

        });

        </script>





<?php }

      $login=$_SESSION['login'];
       ChangePass($login);
?>

  <!--  ********** CTA SECTION ********** -->
  
  <!--/CTA -->
  
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
  <script src="../lib/jquery/jquery.min.js"></script>  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>  <script src='../js/myJS.js'></script>  <script src="../lib/unveil-effects/unveil-effects.js"></script>
  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>


</body>
</html>
