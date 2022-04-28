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
  <style>
     #output{
    width: 500px;
    /* position: absolute; */
    background:gray;
    border-radius: 10px;
     /* position: relative; */
    /*top: 50%;
    left: 50%;
    bottom: 50%;
    right: 50%;*/
    /* transform: translate(-50%, -50%); */
    /* z-index: 9999; */
    /* padding-left: 10px; */
    /* text-align: center; */
      visibility:visible;
      color:white;
      margin-top:auto;
      margin-left:auto;
      margin-right:auto;
      margin-bottom:auto;
    }
  </style>

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

<!-- **********************LOGIN FORM******************** -->
<?php
    function form(){
?>
    <div id="contact">
      <div class="container" id="g">
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
          <div>
          
         <h1> <object data="../img/svg/password_re_hxwm.svg" width="75" height="75" > </object></h1>
         <div  style="margin-top:20%; margin-left: 10%;">
                         <div class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-8">
                    <div class="logo" style='text-align:center'><a href="../index.php">
        <img src="../assets/img/logoESP.jpg"  class=" logo-tim">
        </a><br><h4 style='color:white;'></h4></div>
<!--card  -->
                      <div class="card">
                            <div class="card-header card-header-primary">
                                  <h4 class="card-title">Login Form</h4>
                                  <p class="card-category"></p>
                                </div>
                              <div class='card-body'>
                                <form  method="POST" id="myform">
                                  <div class="form-group">
                                  <label class="bmd-label-floating">Login:</label>
                                   <input type="text" name="login" class="form-control" id="myLog">
                                    <span id="myerror"></span><br>
                                  </div>
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Password:</label>
                                    <input type="password" name="mdp" class="form-control rounded-right"  id="mdp"> 
                                    <span id="mdperror"></span><br>              
                                  </div>
                                  <div class="form-send">
                                  <button type="submit" id='hide' class="btn btn-primary pull-right">Connexion</button>
                                  </div>
                                </form>   
                              </div> 
                          </div>
<!-- end card -->
                    </div>
                  </div>
                </div>
              </div>
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



<?php }
                function VerifierIdentite($login,$password)
                {
                  include '../Connexion.php';
                  require_once "../function.php";
                   
                  $req="Select * from Professeur where  idProf ='".$login."' and Password= sha1('".$password."')";
                  $tab=mysqli_fetch_all(Insertion($con,$req),MYSQLI_ASSOC);
                  if (!empty($tab))
                  {
                    $_SESSION['login']=$login;
                       AfficherForm();                      
                  }
                  else{
                    $erreur="Login ou Password incorrect";
                     header("Location:index.php?erreur=$erreur");
                  }
                }
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
              $reqq="Select * from Professeur where  idProf='".$_SESSION['login']."'";
              $tab=mysqli_fetch_all(mysqli_query($con,$reqq),MYSQLI_ASSOC);
              foreach ($tab as $ligne){
                $nom=$ligne['NomProf'];
               $prenom=$ligne['PrenomProf'];
             }
            echo "<p>$prenom $nom</p>";
?>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="./index.html">
              <i class="material-icons">dashboard</i>
              <p>Acceuil</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="./tables.html">
              <i class="material-icons">content_paste</i>
              <p>task</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../Deconnexion/MedDisconnect.php">
              <i class="material-icons">library_books</i>
              <p>Se deconnecter</p>
            </a>
          </li>
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
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
              <!-- <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Accountg
                  </p>
                </a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
<div id="g">


    <div class="container">
     
        <object data="../img/svg/hello_re_3evm.svg" width="300" height="300" > </object>
<?php
           // AFFICHER EDT
        include '../Connexion.php';

        $chaine="<div class='card-body table-responsive'>
        <table class='table table-condensed table-hover' style='margin-top: 50px;'>
          <form name='form'><tr><thead class='text-warning'><th>Jour</th><th>Cours</th><th>Salle</th><th>Classe</th><th>HeureDebut</th><th>HeureFin</th><th>Avancement</th></thead></tr>";
       
        $tabJ=['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
        for ($i=0; $i < 6; $i++) { 
        $reqCons="SELECT  * FROM EDT,cours where id_Prof='".$_SESSION['login']."' and EDT.id_Cours=cours.idCours and jour='".$tabJ[$i]."' order by jour";
          $tab=mysqli_fetch_all(Insertion($con,$reqCons),MYSQLI_ASSOC);
          $nbVis=count($tab);
          $linecollapsed=count($tab);
          if (count($tab)==0) {
            $linecollapsed=1;
          }
          $chaine=$chaine."<tr><th rowspan='".$linecollapsed."'>$tabJ[$i]</th>";
              foreach($tab as $ligne){
            $salle=$ligne['salle'];
            $classe=$ligne['classe'];
            $HeureDebt=$ligne['HeureDebut'];
            $HeureFin=$ligne['HeureFin'];
            $Jour=$ligne['JOUR'];
            $cours=$ligne['libelle'];
            $nbPointage=$ligne['nbPointage'];
            $creneau=$ligne['creneau'];
            $chaine=$chaine."<td>$cours</td><td>$salle</td><td>$classe</td><td>$HeureDebt</td><td>$HeureFin</td>
                    <td>
                    <div class='d-flex align-items-center justify-content-center'>
                          <div>
                            <div class='progress'>
                              <div class='progress-bar bg-gradient-info' role='progressbar' aria-valuenow='$nbPointage' aria-valuemin='0' aria-valuemax='$creneau' style='width: $nbPointage%;'></div>
                            </div>
                          </div>
                          <span class='me-2 text-xs font-weight-bold'>$nbPointage%</span>
                        </div>
                    </td></tr>";
           }
          }
          //  ******AFFICHE EDT**************
           $chaine=$chaine."</table></div>";



          $dateActuelle=date('Y-m-d');
          $dateJ=date('l');
          $reqJ="SELECT  * FROM EDT,cours where id_Prof='".$_SESSION['login']."' and EDT.id_Cours=cours.idCours";

          $t=mysqli_fetch_all(Insertion($con,$reqJ),MYSQLI_ASSOC);
            //  ******AFFICHE EDT**************

          // *********COURS DU JOUR*********** 
          $i=0;
          $courJ="<div class='card-body table-responsive'>
          <table class='table table-condensed table-hover' >
            <tr style='color:black;background:white;'><thead class='text-warning'><th>Jour</th><th>Cours</th><th>Salle</th><th>Classe</th><th>HeureDebut</th><th>HeureFin</th><th>Pointer</th></thead></tr>";   
          foreach($t as $ligne){
            $dat=$ligne['JOUR'];
            if ($dat==date('l'))
            {
              $idEdt=$ligne['idEDT'];
              $salle=$ligne['salle'];
              $classe=$ligne['classe'];
              $HeureDebt=$ligne['HeureDebut'];
              $HeureFin=$ligne['HeureFin'];
              $Jour=$ligne['JOUR'];
              $cours=$ligne['libelle'];
              $nbPointage=$ligne['nbPointage'];
              $pToday=$ligne['PointAuj'];
              $x="<i class='fa fa-close' style='color:red'></i>";
              if($pToday){
                $x="<i class='fa fa-check' style='color:green'></i>";
              }
              $i++;
              $id=$classe."*".$Jour."*".$cours;
              $a='CheckedOn("'.$idEdt.'*'.$Jour.'*'.$cours.'*'.$HeureDebt.'*'.'point'.$i.'","'.$pToday.'");';
              $courJ=$courJ."<tr onclick='
              $a'><td>$Jour</td><td>$cours</td><td>$salle</td><td>$classe</td><td>$HeureDebt</td><td>$HeureFin</td><td id='point$i'>$x</td></tr>";
            }
            }
            $courJ=$courJ."</table></div>";
    
// *********COURS DU JOUR***********            
        
              echo "
                      <br>
                      <br>
                      <div class='card'>
                            <div class='card-header card-header-primary'>
                              <h4 class='card-title'>Emploie du temps</h4>
                            </div>
                            $chaine
                      </div>
                      <div id='output'>

                      </div>
                      <div class='card' style='margin-top: 100px;'>
                            <div class='card-header card-header-tabs card-header-warning '>
                              <h4 class='card-title'>Cours du jour</h4>
                            </div>
                            $courJ
                      </div>
                  ";
        
?>

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
  <script>
    // *********POINTAGE**************
  function CheckedOn(id,done) {
    //****************DISABLE CLICK IF ALREADY DONE */
        if(done==1){
         // alert('here');
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
// *********POINTAGE**************
  </script>
</body>

</html>