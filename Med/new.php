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

<script>
  // HIDE OR SHOW


$(document).ready(function() {
          $(".toggle-btn").click(function() {
              $(".info").toggle(2000, function() {
                });
            });
        });

</script>
<body>

   <div id="navigation" class="navbar navbar-fixed-top row centered">
    <div class="contain">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="glyphicon glyphicon-th-list"></i>
        </button>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
        <li ><a href="../index.html" class="smoothscroll">Home</a></li>
          <li><a href="search.php" class="smoothscroll">Rechercher </a></li>
          <li class="active"><a href="waiting.php" class="smoothscroll">Consulter </a></li>
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
>

  <!--  ********** WHITE SECTION ********** -->
  <div id="w">
    <div class="container">
      <div class="row centered">
        <div class="col-md-8 col-md-offset-2">
          <h4> DEPARTEMENT GENIE INFORMATIQUE <i class="glyphicon glyphicon-heart"></i></h4>
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
    <?php
  function Antecedents($nom,$prenom,$Numero){
    include "../Connexion.php";
    $searchName= $prenom." ".$nom;
    $sql = "SELECT C.IdMedecin ,C.AccDroite,C.AccGauche,C.BioDroite,C.BioGauche,C.FondDroite,C.FondGauche,C.LunDroite,C.LunGauche,C.DernierRV,C2.* FROM consultation1 C natural join consultation2 C2  WHERE C.IdCli=C2.IdCli and C2.IdCli=".$Numero." and prenom='".$searchName."' ";
        
    $tab1=mysqli_fetch_all(mysqli_query($con,$sql),MYSQLI_ASSOC);
    $chaine="<div ><table class='table table-striped table-bordered table-hover table-responsive glass' >
                <tr>
            <th>Date</th>
            <th>Id Medecin</th><th colspan='2'>Accuite Visuelle</th><th colspan='2'>Pression Intraoculaire</th><th colspan='2'>Mouvement occulaires/Vue couleur</th><th colspan='2'>Lunettes </th><th colspan='2'>Examen Biomicroscopique </th><th colspan='2'>Examen  du fond d'oeil</th><th>Commentaires </th><th>Posologie </th>
        </tr>
        <tr>
            <th></th>
            <th></th><th>Droite</th><th>Gauche</th><th>Droite</th><th>Gauche</th><th>Droite</th><th>Gauche</th><th>Droite</th><th>Gauche</th><th>Droite</th><th>Gauche</th><th>Droite</th><th>Gauche</th>
            <th></th>
            <th></th>
        </tr>";
        if(empty($tab1)){
          echo "<span>Pas de consultations anterieures</span>";
        }
        else{
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
              $chaine=$chaine."<tr><td>$DernierRV</td><td>$IdMedecin</td><td>$AccDroite/10</td><td>$AccGauche/10</td><td>$PressDroite</td><td>$PressGauche</td><td>$Droite_Mouv/$Droite_Vue</td><td>$Gauche_Mouv/$Gauche_Vue</td><td>$LunDroite</td><td>$LunGauche</td><td>$BioDroite</td><td>$BioGauche</td><td>$FondDroite</td><td>$FondGauche</td><td>$Commentaires</td><td>$Posologie</td></tr>";

          }
        }
    $chaine=$chaine."</table></div>";
    echo $chaine;
  }

    function form(){
      $limit=count($_REQUEST);
      for ($i=1; $i <= $limit; $i++) {
          $id="add".$i;

          if (isset($_REQUEST[$id])) {
            $recuperer= explode("*", $_REQUEST[$id]);
          $Numero=$recuperer[0];
          $Nom=$recuperer[1];
          $Prenom=$recuperer[2];
           
          echo "<div class='row centered'><div class='col-md-8'><h1>Fiche de $Prenom $Nom </h1></div></div>";
            break;
          }
          else{
            $limit++;
          }
        }
  ?>
 <p>Precedentes Consultations
 <button type='button' class='toggle-btn' id='hide'>Afficher/Masquer</button></p>
  <div class="info"><?php Antecedents($Nom,$Prenom,$Numero);?></div>
  <div id="g">
    <div class="container">
      <div class="row mt">
        <div class="col-md-4">
           <!-- <img src="../img/chair.png" class="img-responsive aligncenter" width="320" alt="" data-effect="slide-left"> -->
           <object data="../img/svg/publish_article_re_3x8h.svg" width="300" height="300" > </object>

          </div>
        <!--/col-md-6 -->


        <div class="col-md-8" >
         
          <br><br><br>
           <h3 data-effect="slide-right">CONSULTATION</h3>

      <form method="POST" id="myform" class='glass'> 
       
                <fieldset>
                    <legend>Accuite Visuelle</legend>
                  <table>
                    <div class="form-group">
                        Droite <input class="form-control" type="text" name="Accd" placeholder="/10">
                        <span id="error"></span>
                    </div>
                      <div class="form-group">
                        Gauche <input class="form-control" type="text" name="AccG" placeholder="/10">
                      </div>
                  </table>
                </fieldset>
                <fieldset>
                    <legend>Pression intraocculaire</legend>
                    <table>
                      <div class="form-group">
                        Droite <input class="form-control" type="text" name="PressD" placeholder="mmHg">
                      </div>
                      <div class="form-group">
                        Gauche <input class="form-control" type="text" name="PressG" placeholder="mmHg">
                      </div>
                    </table>
                </fieldset>
                <fieldset>
                    <legend>Mouvements occulaires/Vue couleur</legend>
                    <table>
                      <div class="form-group">
                        Mouvements occulaires Droite <input class="form-control" type="text" name="MouvD">
                      </div>
                      <div class="form-group">
                        Mouvements occulaires Gauche <input class="form-control" type="text" name="MouvG">
                      </div>
                    <div class="form-group">
                        Vue couleur Droite <input class="form-control" type="text" name="VueD">
                    </div>
                      <div class="form-group">
                        Vue couleur Gauche <input class="form-control" type="text" name="VueG" >
                      </div>
                    </table>
                </fieldset>
                <fieldset>
                  <legend>Lunettes</legend>
                  <table>
                    <div class="form-group">
                      Droite  <input class="form-control" type="text" name="LD">
                    </div>
                    <div class="form-group">
                      Gauche <input class="form-control" type="text" name="LG">
                    </div>
                  </table>
                </fieldset>
                <fieldset>
                  <legend>Examen Biomicroscopique</legend>
                <table>

                      Droite <input class="form-control" type="text" name="BioD">
                  </div>
                  <div class="form-group">
                    Gauche <input class="form-control" type="text" name="Bio">
                  </div>
                </table>
                </fieldset>
                <fieldset>
                  <legend>Examen du fond d'oeil</legend>
                  <table>
                    <div class="form-group">
                      Droite <input class="form-control" type="text" name="FD">
                    </div>
                    <div class="form-group">
                      Gauche <input class="form-control" type="text" name="FG">
                    </div>
                  </table>
                </fieldset>
                <fieldset>
                  <legend>Commentaires</legend>
                  <table>
                    <div class="form-group">
                      <textArea name="Comm" placeholder="Entrer du texte" rows="4" cols="50" class="form-control"></textArea>
                    </div>
                  </table>
                </fieldset>
                <fieldset>
                  <legend>Posologie</legend>
                  <table>
                    <div class="form-group">
                      <textarea name="pos" placeholder="Entrer du texte" rows="4" cols="50" class="form-control"></textarea>
                    </div>
                  </table>
                </fieldset>
                <input id="hide" class="form-control" type="submit" value="Enregistrer">
          </form>
        </table>


        </div>
        <!--/col-md-4 -->

      </div>
      <!--/row -->
    </div>
    <!--/container -->
  </div>
        <script type="text/javascript">
       var myform = document.getElementById('myform');
       myform.addEventListener('submit',function (e) {
          // alert("hello");
      var numRegex = /^[0-9]+$/;
      var veri = document.getElementById('Accd');
      var myerror =document.getElementById('error');
      if(veri.value.trim()=="Vous devez remplir tous les champs"){
         myerror.innerHTML ="*";
         myerror.style.color="red";
         e.preventDefault();
       }
       else if(numRegex.test(veri.value)==false){
        myerror.innerHTML ="Vous devez remplir tous les champs";
         myerror.style.color="red";
         e.preventDefault();
       }
       });



     </script>
        <?php
      }

        function Insertion($con,$req)
        {
            if (mysqli_query($con,$req)) {
              $success="Insertion reussie ";
              header("Location:waiting.php?success=$success");

            }
            else {
              $erreur="<img src='./erreur.jpg' heigth='50px' width='50px'>Erreur lors de l'insertion.Veuillez verifiez votre saisie";
              header("Location:waiting.php?erreur=$erreur");


            }
        }


    function AddInfo(){
      require "../Connexion.php";
      $idMed=$_SESSION['login'];
      $AccuiteD=$_POST['Accd'];
      $AccuiteG=$_POST['AccG'];
      $PressionG=$_POST['PressG'];
      $PressionD=$_POST['PressD'];
      $MouvD=$_POST['MouvD'];
      $MouvG=$_POST['MouvG'];
      $VueD=$_POST['VueD'];
      $VueG=$_POST['VueG'];
      $LunetteD=$_POST['LD'];
      $LunetteG=$_POST['LG'];
      $BioD=$_POST['BioD'];
      $BioG=$_POST['Bio'];
      $FondD=$_POST['FD'];
      $FondG=$_POST['FG'];
      $Comm=$_POST['Comm'];
      $Posologie=$_POST['pos'];
      $dateActuelle=date('Y-m-d');

          //Insertion des donnees
      $limit=count($_REQUEST);
        for ($i=1; $i <= $limit; $i++) {
          $id="add".$i;

          if (isset($_REQUEST[$id])) {
            $recuperer= explode("*", $_REQUEST[$id]);
            $Numero=$recuperer[0];
            $Nom=$recuperer[1];
            $Prenom=$recuperer[2]." ".$Nom;
            $p=$recuperer[2];
            $reqCons1="INSERT INTO consultation1 values('".$Numero."','".$idMed."','".$AccuiteD."','".$AccuiteG."','".$BioD."','".$BioG."','".$FondD."','".$FondG."','".$LunetteD."','".$LunetteG."','".$dateActuelle."','".$Prenom."')";
            $reqCons2="INSERT INTO consultation2 values('".$Numero."','".$idMed."','".$MouvD."','".$MouvG."','".$VueD."','".$VueG."','".$PressionD."','".$PressionG."','".$dateActuelle."','".$Comm."','".$Posologie."','".$Prenom."')";

            $StatExist="UPDATE statistiques set StatJour = StatJour+1 where DateDuJour='".$dateActuelle."'";
            $reqAttente="DELETE FROM attente WHERE nom='".$Nom."' and prenom ='".$p."' and numero ='".$Numero."'";

            $StatCheck="Select * from statistiques where DateDuJour='".$dateActuelle."'";
            $StatNotExist="INSERT INTO statistiques values(1,'".$dateActuelle."')";
            $result=mysqli_query($con,$StatCheck);
            
            $tab=mysqli_fetch_all($result,MYSQLI_ASSOC);
            if (empty($tab))
            {
                 Insertion($con,$StatNotExist);
            }
            else{
                Insertion($con,$StatExist);
            }
            Insertion($con,$reqCons1); 
            Insertion($con,$reqCons2);  
            Insertion($con,$reqAttente); 

              break;
          }

          else{
            $limit++;
          }
        }
      }
        
    


     if(!isset($_POST['Accd'])){
      form();
    }
    else{
      AddInfo();
    }
  ?>
  <!--/G -->

  <!--  ********** CTA SECTION ********** -->
  
  <!--/CTA -->



  <!--  ********** CTA SECTION ********** -->

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
