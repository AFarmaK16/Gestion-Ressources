<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>  
  <script src="../lib/unveil-effects/unveil-effects.js"></script>
  <script src="../js/main.js"></script>
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard Dark Edition by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link href="../assets/css/progressbar.css" rel="stylesheet" />
  <!-- AJAX/JQUERY -->
  <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../assets/lib/jquery/jquery.min.js"></script>

</head>
<body class="dark-edition">
  <?php
    include "../Connexion.php";


 
            // print_r($result);
             function form(){
               // **********************LOGIN FORM******************** -->
               include "../Connexion.php";
              //  $recuperer= explode("*", $_POST['name']);
              //     $tab=$recuperer[0];
              //     $id=$recuperer[1];
              
                  $tab="Professeur";
                  $id="mine";

// ***************RECUPERER DATAS COMPTES
      if ($tab=="Professeur") {
        $idC='idProf';
        $pre="Prof";
      }
      else if("Etudiant"){
        $idC='idEt';
        $pre="Et";
      }
      else{
        $idC='idSu';
        $pre="Su";
      }

      $req="SELECT * from $tab where $idC='".$id."'";
  $result=mysqli_fetch_all(mysqli_query($con,$req),MYSQLI_ASSOC);
              foreach ($result as $ligne){
                $nom=$ligne['Nom'.$pre];
                $prenom=$ligne['Prenom'.$pre];
                $email=$ligne['email'];
             }



      ?>

      <p class='card-category' id='retour'></p>
          <div style='margin-top:10%;'>
                <div class='content '>
                <div class='container-fluid' id='mycontent'>
                  <div class='row'>
                    <div class='col-md-10'>
                      <div>
                        <div class='float-end mt-8'>
                          <button class='btn btn-link text-dark p-0 fixed-plugin-close-button '>
                            <i class='fa fa-close' id='close'  onclick='alert("did it");' style='color:red'></i>
                          </button> 
                        </div>
                      </div>
                      <div class='card'>
                        <div class='card-header card-header-primary'>
                          <h4 class='card-title'>Mettre a jour compte $tab</h4>
                        </div>
                            <div class='card-body'>
                              <form  method='POST' id='myform'>
                                <div class='form-group'>
                                    <label class='bmd-label-floating'>Nom:</label>
                                    <input class='form-control' type='text' name='nom' value='$nom'>
                                </div>
                                <div class='form-group'>
                                    <label class='bmd-label-floating'>Prenom:</label>
                                    <input class='form-control' type='text' name='prenom' value='$prenom'>
                                </div>
                                <div class='form-group'>
                                    <label class='bmd-label-floating'>Login:</label>
                                    <input class='form-control' type='text' name='login'  id='myLogin' value='$id'>
                                <span id='error'></span>
                                </div>
                                <div class='form-group'>
                                    <label class='bmd-label-floating'>Password:</label>
                                    <input class='form-control rounded-right ' type='password ' name='mdp'>
                                </div>
                                 <div class='form-group'>
                                    <label class='bmd-label-floating'>Email:</label>
                                    <input class='form-control' type='text' name='email' value='$email'>
                                </div>
                                <div class='form-send'>
                                    <button type='submit' id='hide' class='btn btn-primary pull-right'>Modifier</button>
                                </div>
                              </form>
                            </div>  
                        </div> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
// **************end login Form
             }
            ?>
            
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

    
    // ***********END AFFICHERFORM
      include "../Connexion.php";
      // Recuperer datas
      // $recuperer= explode("*", $_POST['name']);
      // $tab=$recuperer[0];
      // $id=$recuperer[1];
// print_r($recuperer);
       function Insertion($con,$req)
        {
            if (mysqli_query($con,$req)) {
              $success= "Utilisateur ajoute dans la base ";?>
              <script>
                alert('leep diam');
                // document.getElementById('retour').innerHTML ="Utilisateur ajoute dans la base";
                // document.getElementById('retour').style.color="blue";
              </script>
              <?php
              // echo "$success <br>";
              //  header("Location:addCompte.php?success=$success");
             }
            else 
            {
              $erreur="Echec de l'insertion veuillez remplir correctement les champs";?>
               <script>
                // document.getElementById('retour').innerHTML ="Echec de l'insertion veuillez remplir correctement les champs";
                // document.getElementById('retour').style.color="red";
                alert('hummm');
              </script>
           <?php 
            // echo "$erreur <br>";
            // header("Location:addCompte.php?erreur=$erreur");
           }
        }
        //***********CREATION COMPTE

         function Update(){
          include "../Connexion.php";
          $recuperer= explode("*", $_POST['name']);
             $tab=$recuperer[0];
             $id=$recuperer[1];



          $nom=$_POST['nom'];
          $prenom=$_POST['prenom'];    
          $login=$_POST['login'];
          $mdp=$_POST['mdp'];
          $email=$_POST['email'];
          $req="UPDATE $tab SET 
          nom$pre=$nom,
          prenom$pre=$prenom,
          id=$login,
          email=$email,
          password=sha1('".$mdp."')
            Where $idC=$id
          ";
          Insertion($con,$req);
        }
       
        //***********CREATION COMPTE



          
// *********COURS DU JOUR***********            
        
            //   echo "
            //           <br>
            //           <br>
            //           <div class='card'>
            //                 <div class='card-header card-header-primary'>
            //                   <h4 class='card-title'>Emploie du temps</h4>
            //                 </div>
            //                 $chaine
            //           </div>
            //           <div id='output'>

            //           </div>
            //           <div class='card' style='margin-top: 100px;'>
            //                 <div class='card-header card-header-tabs card-header-warning '>
            //                   <h4 class='card-title'>Cours du jour</h4>
            //                 </div>
            //                 $courJ
            //           </div>
            //       ";
        
?>

<?php
    //  if(!isset($_SESSION['login']))
    // {
    //  header("Location:index.php");
    // }
    // else
    // {
      // $_GET['nom']='monnom';
      form();
      if (empty($_POST['nom'])) {
        // echo $_POST['nom'];
        // header("Location:deleteC.php?erreur=$erreur");
        echo '<br>HOHOVIDE NAA<br>';
        // Update();
      }
      echo "niou xolaat";
      pri
      // else{
      //   echo 'mom nieuwoul ba legui';
        
        
      // }


    // }
?>

  
<!-- **********************LOGIN FORM******************** -->





  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
  
  <!-- <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script> -->
  <script>
    // *********POINTAGE**************
  function CheckedOn(id,done) {
    //****************DISABLE CLICK IF ALREADY DONE */
        if(done==1){
          alert('here');
          // return;
        }
    //****************DISABLE CLICK IF ALREADY DONE */
        else{
          $.ajax({
                type:'POST',
                url:'CoursToP.php',
                data:{
                  name:id,
                },
                success:function(data){
                  $('#output').html(data);
                  $('#output').style.display = "block";
                  // alert('there');
                }
              }); 
        }   
      }

      function closeFunction(){
        document.getElementById('mycontent').style.display='none';   
    }
// *********POINTAGE**************
  </script>
</body>

</html>