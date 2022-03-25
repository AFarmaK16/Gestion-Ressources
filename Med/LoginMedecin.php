<?php
session_start();
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
  <!-- <link href="../img/logo.png" rel="icon"> -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="../lib/unveil-effects/animations.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
     <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    // AUTOTYPED TEXT
function autoType(elementClass, typingSpeed){
  var thhis = $(elementClass);
  thhis.css({
    "position": "relative",
    "display": "inline-block"
  });
  thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
  thhis = thhis.find(".text-js");
  var text = thhis.text().trim().split('');
  var amntOfChars = text.length;
  var newString = "";
  thhis.text("|");
  setTimeout(function(){
    thhis.css("opacity",1);
    thhis.prev().removeAttr("style");
    thhis.text("");
    for(var i = 0; i < amntOfChars; i++){
      (function(i,char){
        setTimeout(function() {        
          newString += char;
          thhis.text(newString);
        },i*typingSpeed);
      })(i+1,text[i]);
    }
  },1500);
}

$(document).ready(function(){
  // Now to start autoTyping just call the autoType function with the 
  // class of outer div
  // The second paramter is the speed between each letter is typed.   
  autoType(".type-js",200);
});
// *********POINTAGE**************

function CheckedOn(id) {
      $.ajax({
        type:'POST',
        url:'CoursToP.php',
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

</script>
<style>
   #output, #output * {
      visibility:visible;
    }

</style>
</head>

<body onload="window.location.hash = 'contact'">
  
 <!--  ********** HEADER SECTION ********** -->
 

<div id="h" class="slide story">
  <div class="container">
    
      <div class="row centered" >     
      </div>
    
    <!--/row -->
  </div>
  <!-- /container -->
</div>

  
<div>
 <div id='back'>
    <a href="#null" onclick="javascript:history.back();">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>
    </a>
    </div>
  <div id='up'>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
        <path fill-rule="evernod" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
      </svg>
  </div>
  
</div>
  <!--  ********** WHITE SECTION ********** -->
  <div id="w">
    <div class="container">
      <div class="row centered">
        <div class="col-md-8 col-md-offset-2">
        <a href="../index.html">  <h4>DEPARTEMENT GENIE INFORMATIQUE </h4></a>
          <br/>
          <i class="glyphicon glyphicon-chevron-down"></i>
        </div>
        <!--col-md-8 -->
      </div>
      <!--/row -->
     
      <br><br><br>
      
    </div>
    <!--/container -->
  </div>
  <!--/w -->

  <!--  ********** GREEN SECTION ********** -->
 
<?php
    function form(){?>
    <div id="contact">
      <div class="container" id="g">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <?php 
              if(isset($_GET['dec'])){
                echo "<div class='alert alert-success' role='alert'>".$_GET['dec']."</div>";
              } 
              if(isset($_GET['erreur'])){
                echo "<div class='alert alert-danger' role='alert'>".$_GET['erreur']." </div>";
              }
              if(isset($_GET['change'])){
                echo "<div class='alert alert-success' role='alert'>".$_GET['change']." </div>";
              }
              if (isset($_GET['err'])) {
                echo "<div class='alert alert-danger' role='alert'>Vous devez d'abord vous connecte </div>";
              }
              
           ?>

          <div class='glass'>
         <h1> <object data="../img/svg/password_re_hxwm.svg" width="75" height="75" > </object></h1>
            <!-- <h1> <img src="../img/who.jpg" heigth='75px' width='75px' rel='icon'></h1> -->
            <h2 class="centered">Login Form</h2>
           
          
            <form  method="POST" id="myform">

              <div class="form-group">
               Login: <input type="text" name="login" class="form-control" id="myLog" placeholder="Your Login">
                <span id="myerror"></span><br>
              </div>
              <div class="form-group">
                Password:<input type="password" name="mdp" class="form-control rounded-right"  id="mdp" placeholder="Your password"> 
                <span id="mdperror"></span><br>              
            </div>
            <div class="form-send">
              <button type="submit" id='hide'>Connexion</button>
            </div>
          </form>
          </div>
          <ul class='bg-bubbles'>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
        var myform = document.getElementById('myform');
        myform.addEventListener('submit',function (e) {
         var myLog =document.getElementById('myLog');
         var myerror  =document.getElementById('myerror');
         var myMdp =document.getElementById('mdp');
         var mdperror  =document.getElementById('mdperror');
         if(myLog.value.trim()==""){
          myerror.innerHTML ="*Champs login obligatoire";
          myerror.style.color="red";
          e.preventDefault();
        }
        if(myMdp.value.trim()==""){
          mdperror.innerHTML ="*Champs login obligatoire";
          mdperror.style.color="red";
          e.preventDefault();
        }

        });

        </script>

  <!--/G -->

  <!--  ********** CTA SECTION ********** -->
  
  <!--/CTA -->



  <?php
        }
         function Insertion($con,$req)
          {
            
              return mysqli_query($con,$req);
          }
          
        function VerifierIdentite($login,$password)
        {
          include '../Connexion.php';
           
          $req="Select * from Professeur where  idProf ='".$login."' and Password= sha1('".$password."')";
          $tab=mysqli_fetch_all(Insertion($con,$req),MYSQLI_ASSOC);
          if (!empty($tab))
          {
            $_SESSION['login']=$login;
               AfficherForm();
               
          }
          else{
            $erreur="Login ou Password incorrect";
             header("Location:LoginMedecin.php?erreur=$erreur");
          }

        }







    function AfficherForm(){ ?>
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
          <!-- <li><a href="search.php" class="smoothscroll">Rechercher </a></li>
          <li><a href="waiting.php" class="smoothscroll">Consulter </a></li>
          <li><a href="changePassMed.php" class="smoothscroll">Changer de mot de passe </a></li> -->
          <li><a href= "../Deconnexion/MedDisconnect.php"
class="smoothscroll">Se deconnecter</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
  <p><strong><?php  include '../Connexion.php';
          
          $reqq="Select * from Professeur where  idProf='".$_SESSION['login']."'";
          $tab=mysqli_fetch_all(mysqli_query($con,$reqq),MYSQLI_ASSOC);
          foreach ($tab as $ligne){
            $nom=$ligne['NomProf'];
            $prenom=$ligne['PrenomProf'];
          }
          echo "$prenom $nom";
          ?></strong></p>
<div id="g">


    <div class="container">
      <div class="row">
        <!-- <div class="col-md-6 col-md-offset-2"> -->

        <!--/col-md-4 -->
        <div class="col-md-4 centered">
        <object data="../img/svg/hello_re_3evm.svg" width="300" height="300" > </object>

        </div>
        <div class="col-md-8 centered">
          <?php
           // AFFICHER EDT
        include '../Connexion.php';

        $reqCons="SELECT  * FROM EDT,cours where id_Prof='".$_SESSION['login']."' and EDT.id_Cours=cours.idCours order by jour";
          $tab=mysqli_fetch_all(Insertion($con,$reqCons),MYSQLI_ASSOC);
          $nbVis=count($tab);
          $chaine="<table class='table table-condensed' style='margin-top: 50px;'><form name='form'><tr style='color:black;background:white;'><th>Jour</th><th>Cours</th><th>Salle</th><th>Classe</th><th>HeureDebut</th><th>HeureFin</th></tr>";
           foreach($tab as $ligne){
            $salle=$ligne['salle'];
            $classe=$ligne['classe'];
            $HeureDebt=$ligne['HeureDebut'];
            $HeureFin=$ligne['HeureFin'];
            $Jour=$ligne['JOUR'];
            $cours=$ligne['libelle'];
            // $info=$Telephone."*".$Nom."*".$Prenom."*".$idrv;
            $chaine=$chaine."<tr><td>$Jour</td><td>$cours</td><td>$salle</td><td>$classe</td><td>$HeureDebt</td><td>$HeureFin</td></tr>";
           }
          //  ******AFF EDT**************
           $chaine=$chaine."</table>";
           echo $chaine;

          $dateActuelle=date('Y-m-d');
          $dateJ=date('l');
          $reqJ="SELECT  * FROM EDT,cours where id_Prof='".$_SESSION['login']."' and EDT.id_Cours=cours.idCours";

          $t=mysqli_fetch_all(Insertion($con,$reqJ),MYSQLI_ASSOC);
          // print_r($t);
          // $nbVis=count($tab);
          // $chaine="<table class='table table-condensed' style='margin-top: 50px;'><form name='form'><tr style='color:black;background:white;'><th>Jour</th><th>Cours</th><th>Salle</th><th>Classe</th><th>HeureDebut</th><th>HeureFin</th><th>Pointer</th></tr>";



          // *********COURS DU JOUR*********** 
          $i=0;
          $courJ="<table class='table table-condensed' style='margin-top: 50px;'><tr style='color:black;background:white;'><th>Jour</th><th>Cours</th><th>Salle</th><th>Classe</th><th>HeureDebut</th><th>HeureFin</th><th>Pointer</th></tr>";   
          foreach($t as $ligne){
            $dat=$ligne['JOUR'];
            // echo $dat;
            if ($dat==date('l'))
            {
              $salle=$ligne['salle'];
            $classe=$ligne['classe'];
            $HeureDebt=$ligne['HeureDebut'];
            $HeureFin=$ligne['HeureFin'];
            $Jour=$ligne['JOUR'];
            $cours=$ligne['libelle'];
              $i++;
              $id=$classe."*".$Jour."*".$cours;
              $a='CheckedOn("'.$classe.'*'.$Jour.'*'.$cours.'");';
              $courJ=$courJ."<tr><td>$Jour</td><td>$cours</td><td>$salle</td><td>$classe</td><td>$HeureDebt</td><td>$HeureFin</td><td><input  id='toprint' type='checkbox' name='add".$i."' value=".$id." onchange='
              $a'></td></tr>";
            }
            // break;
            }
            $courJ=$courJ."</table>";
              echo "<br><br>";
            echo "<h4>Cours du jour</h4>";
            echo $courJ;
            // $info=$Telephone."*".$Nom."*".$Prenom."*".$idrv;
           
        
        
        
          ?>

<div class='container'>
        
        <table>
          <tbody id="output" > 
           
          </tbody>
         
        </table>
        
        </div>
           <!--  <div class='row'>
              <div class="col-md-4">
                <div></div>
              </div>
              <div class="col-md-8">
                
              </div>
            </div> -->

        </div>
        <!--/col-md-6 -->
      </div>
      <!--/row -->
    </div>
    <!--/container -->
  </div>
  <!--/R -->






<?php }
    if(!isset($_POST['login'])){
      form();
    }
    else{
      $login=$_POST['login'];
      $mdp=$_POST['mdp'];
       VerifierIdentite($login,$mdp);
      // AfficherForm();
    }
?>

  
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
  <script src="../lib/unveil-effects/unveil-effects.js"></script>
   <script src='../js/myJS.js'></script>  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>


</body>
</html>
