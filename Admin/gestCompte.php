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
<style type="text/css">
.ed:hover {
  color: purple;
}
 #output{
    
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(0);
  transition: 200ms ease-in-out;
  border: 1px solid black;
  border-radius: 10px;
  z-index: 10;
  padding: 0;
  background-color:#212529;
  width: 500px;
  max-width: 80%;
    }
    #output.active {
  transform: translate(-50%, -50%) scale(1);
}
</style>
<script type="text/javascript">

function closeFunction(){
  // document.getElementById('output').classList.remove('active');
  
    }
  //**********************UPDATE COMPTE
  function Update(tab) {
      //  $.ajax({
      //             type:'POST',
      //             url:'updateC.php',
      //             data:{
      //               name:tab,
      //             },
      //             success:function(data){
      //               $('#output').html(data);
      //               $('#output').style.display = "block";
      //               // alert('there');
      //             }
      //           }); 
       // alert(tab);
       var tabArray=tab.split("*");
      //  alert(tabArray);
       document.getElementById('nom').value=tabArray[0];
       document.getElementById('prenom').value=tabArray[1];
       document.getElementById('email').value=tabArray[2];
       document.getElementById('myLogin').value=tabArray[3];
       document.getElementById('table').value=tabArray[4];
       document.getElementById('firstId').value=tabArray[3];

      const output= document.getElementById('output');
      // output.style.visibility="visible";
      output.classList.add('active');
      //  document.getElementById('output').style.height="100";
      //  document.getElementById('output').style.width="100";
      //  document.getElementById('output').style.position= "absolute";



  }
  //**********************DELETE COMPTE 
  function Del(tab) {
     $.ajax({
                type:'POST',
                url:'deleteC.php',
                data:{
                  name:tab,
                },
                success:function(data){
                  $('#output').html(data);
                  $('#output').style.display = "block";
                  // alert('there');
                }
              }); 
  }
</script>

</head>
<body class="dark-edition">
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple active" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard-dark" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard-dark/docs/2.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard/tree/dark-edition" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>

<?php
    function AfficherForm(){
?>
    <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="../index.php">
        <img src="../assets/img/logoESP.jpg"  class=" logo-tim">
        </a><br><h4 style='color:white;'>Gestion Ressources DGI</h4></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">person</i>
<?php  
              include '../Connexion.php';      
              $reqq="Select * from Admin where  idAdmin='".$_SESSION['login']."'";
              $tab=mysqli_fetch_all(mysqli_query($con,$reqq),MYSQLI_ASSOC);
              foreach ($tab as $ligne){
                $nom=$ligne['idAdmin'];
             }
            echo "<p>$nom</p>";
?>
            </a>
          </li>
          <li class="nav-item   ">
            <a class="nav-link" href="#">
              <i class="material-icons">dashboard</i>
              <p>Acceuil</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="./addCompte.php">
              <i class="material-icons">content_paste</i>
              <p>Creer Compte</p>
            </a>
          </li> 
          <li class="nav-item  active">
            <a class="nav-link" href="gestCompte.php">
              <i class="material-icons">library_books</i>
              <p>Comptes</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../Deconnexion/AdminDisconnect.php">
              <i class="material-icons"></i>
              <p>Se deconnecter</p>
            </a>
          </li>
         
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li> -->
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)"></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <!-- <i class="material-icons">dashboard</i> -->
                  <!-- <p class="d-lg-none d-md-block">
                    Stats
                  </p> -->
                </a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
                  <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                  <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                </div>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
<?php

          function AffichCompte($table,$pre){
                    include '../Connexion.php';
                    // include "../function.php";

            $reqCons="SELECT  * FROM $table order by email ";
            $tab=mysqli_fetch_all(mysqli_query($con,$reqCons),MYSQLI_ASSOC);
            $chaine="<div class='card-body table-responsive'>
              <table class='table table-condensed table-hover' style='margin-top: 50px;'>
                <form name='form'><tr><thead class='text-warning'><th>Nom</th><th>Prenom</th><th>Login</th><th>Email</th><th>---</th></thead></tr>";
                $i=0;
             foreach($tab as $ligne){
              $nom=$ligne['Nom'.$pre];
              $prenom=$ligne['Prenom'.$pre];
              $login=$ligne['id'.$pre];
              $email=$ligne['email'];
              $del='Del("'.$table.'*'.$login.'")';
              $send=$nom."*".$prenom."*".$email."*".$login."*".$table;
              $update='Update("'.$send.'")';
              $i++;
              $chaine=$chaine."<tr><td>$nom</td><td>$prenom</td><td>$login</td><td>$email</td>
                      <td>
                      <i class='material-icons ed' onclick='$update' style=' cursor: pointer;' id='c$i'>edit</i>
                      <i class='material-icons ed'onclick='$del' style=' cursor: pointer;' id='c$i'>delete</i>
                      </td></tr>";
             }
            //  ******AFFICHE EDT**************
             $chaine=$chaine."</table></div>";
             return $chaine;
          }


// AFFICHAGE DETAILS COMPTES
      
              echo "
                      <div class='card'>
                            <div class='card-header card-header-primary'>
                              <h4 class='card-title'>Comptes Professeurs</h4>
                            </div>".
                           AffichCompte('Professeur','Prof')."
                      </div>
                      <div class='card' style='margin-top: 100px;'>
                            <div class='card-header card-header-tabs card-header-warning '>
                              <h4 class='card-title'>Comptes Etudiants</h4>
                            </div>".
                            AffichCompte('Etudiant','Et')."
                      </div>
                      <div class='card' style='margin-top: 100px;'>
                            <div class='card-header card-header-tabs card-header-success '>
                              <h4 class='card-title'>Comptes Surveillants</h4>
                            </div>".
                            AffichCompte('Surveillant','Su')."
                      </div>
                  ";
                echo"<br><br><br>";

                echo"<div id='output'>
                <p class='card-category' id='retour'></p>
                <div id='card'>
                      <div class='content '>
                      <div class='container-fluid' id='mycontent'>
                        <div class='row'>
                          <div class='col-md-10'>
                            <div>
                              <div class='float-end mt-8'>
                                <button class='btn btn-link text-dark p-0 fixed-plugin-close-button '>
                                  <i class='fa fa-close' id='close' onclick='closeFunction();'  style='color:red'></i>
                                </button> 
                              </div>
                            </div>
                            <div class='card'>
                              <div class='card-header card-header-primary'>
                                <h4 class='card-title'>Mettre a jour compte</h4>
                              </div>
                                  <div class='card-body'>
                                    <form  method='POST' id='myform' action='deleteC.php'>
                                      <div class='form-group'>
                                          <label class='bmd-label-floating'>Nom:</label>
                                          <input class='form-control' type='text' name='nom' id='nom' >
                                      </div>
                                      <div class='form-group'>
                                          <label class='bmd-label-floating'>Prenom:</label>
                                          <input class='form-control' type='text' name='prenom'  id='prenom'>
                                          <input  type='hidden' name='table'  id='table' >
                                          <input  type='hidden' name='firstId'  id='firstId' >
                                      </div>
                                      <div class='form-group'>
                                          <label class='bmd-label-floating'>Login:</label>
                                          <input class='form-control' type='text' name='login'  id='myLogin' value='doid'>
                                      <span id='error'></span>
                                      </div>
                                      <div class='form-group'>
                                          <label class='bmd-label-floating'>Password:</label>
                                          <input class='form-control rounded-right ' type='password ' name='mdp'>
                                      </div>
                                       <div class='form-group'>
                                          <label class='bmd-label-floating'>Email:</label>
                                          <input class='form-control' type='text' name='email' id='email' >
                                      </div>
                                      <div class='form-send'>
                                      <button type='submit' id='hide' class='btn btn-primary pull-right'>Connexion</button>
                                      </div>
                                    </form>
                                  </div>  
                              </div> 
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>";
       
?>

<?php }
 if(!isset($_SESSION['login']))
 {
  header("Location:index.php");
 }
 else
 {
   Afficherform();
 }
?>

  
<!-- **********************LOGIN FORM******************** -->

  </body>
</html>




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
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <!-- <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script> -->
  <?php

function Insertion($con,$req)
{
    if (mysqli_query($con,$req)) {
      $success= "Modification effectuee avec succes ";?>
      <script>
        alert('leep diam');
        // output.classList.add('active');
        // output.value="leep diam";
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
  
  function TreatUpdate(){
    include "../Connexion.php";
    // $recuperer= explode("*", $_POST['name']);
    //    $tab=$recuperer[0];
    //    $id=$recuperer[1];

    $nom=$_REQUEST['nom'];
    $prenom=$_REQUEST['prenom'];    
    $login=$_REQUEST['login'];
    $mdp=$_REQUEST['mdp'];
    $email=$_REQUEST['email'];
    $table=$_REQUEST['table'];
    $firstId=$_REQUEST['firstId'];
    if ($table=="Professeur") {
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
    // $req="UPDATE $table SET 
    // nom'".$pre."=$nom,
    // prenom$pre=$prenom,
    // $idC=$login,
    // email=$email,
    // password=sha1('".$mdp."')
    //   Where $idC=$login
    // ";
    $req="UPDATE $table SET 
   id$pre='".$login."',
   nom$pre='".$nom."',
   prenom$pre='".$prenom."',
   password=sha1('".$mdp."'),
    email='".$email."'
      Where $idC='".$firstId."'
    ";
    Insertion($con,$req);
  }

    if (isset($_REQUEST['nom'])) {
      TreatUpdate();
    }
    // else{
    //   print_r($_REQUEST['nom']);
    // }
  ?>

</body>

</html>