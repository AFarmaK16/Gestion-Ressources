

<div id='output'>
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
                                <h4 class='card-title'>Mettre a jour compte dotab</h4>
                              </div>
                                  <div class='card-body'>
                                    <form  method='POST' id='myform' action='deleteC.php'>
                                      <div class='form-group'>
                                          <label class='bmd-label-floating'>Nom:</label>
                                          <input class='form-control' type='text' name='nom' value='donom'>
                                      </div>
                                      <div class='form-group'>
                                          <label class='bmd-label-floating'>Prenom:</label>
                                          <input class='form-control' type='text' name='prenom' value='doprenom'>
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
                                          <input class='form-control' type='text' name='email' value='doemail'>
                                      </div>
                                      <div class='form-send'>
                                      <button type='submit' id='hide' class='btn btn-primary pull-right' onclick='alert('HEY');'>Connexion</button>
                                      </div>
                                    </form>
                                  </div>  
                              </div> 
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              
    <?php          if (isset($_POST['nom'])) {
                 echo "guisnako";
              }
              else{
                  echo"doyna war";
              }
?>