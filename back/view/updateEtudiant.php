
<?php
include "../classes/Etudiant.php";
$e = new Etudiant();

//Get Etudiant par ID
$etudiant = $e->getEtudiantById($_GET['id'])->fetch();

//update
if(isset($_POST['edit_etudiant'])){
	 echo "<script type='text/javascript'>alert('edit_etudiant');</script>";
    $e->updateEtudiant($_POST);
    header("location:etudiant.php");
} 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Projet PHP </title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
    <meta name="keywords" content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.mCustomScrollbar.css">
  </head>
  <body>
    <body>
      <!-- Pre-loader start -->
      <div class="theme-loader">
        <div class="loader-track">
          <div class="loader-bar"></div>
        </div>
      </div>
      <!-- Pre-loader end -->
      <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
          <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
              <div class="navbar-logo">
                <a class="mobile-menu" id="mobile-collapse" href="#!">
                  <i class="ti-menu"></i>
                </a>
                <div class="mobile-search">
                  <div class="header-search">
                    <div class="main-search morphsearch-search">
                      <div class="input-group">
                        <span class="input-group-addon search-close">
                          <i class="ti-close"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Enter Keyword">
                        <span class="input-group-addon search-btn">
                          <i class="ti-search"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <a href="index.html">
                  <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                </a>
                <a class="mobile-options">
                  <i class="ti-more"></i>
                </a>
              </div>
              <div class="navbar-container container-fluid">
                <ul class="nav-left">
                  <li>
                    <div class="sidebar_toggle">
                      <a href="javascript:void(0)">
                        <i class="ti-menu"></i>
                      </a>
                    </div>
                  </li>
                  <li class="header-search">
                    <div class="main-search morphsearch-search">
                      <div class="input-group">
                        <span class="input-group-addon search-close">
                          <i class="ti-close"></i>
                        </span>
                        <input type="text" class="form-control">
                        <span class="input-group-addon search-btn">
                          <i class="ti-search"></i>
                        </span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <a href="#!" onclick="javascript:toggleFullScreen()">
                      <i class="ti-fullscreen"></i>
                    </a>
                  </li>
                </ul>
                <ul class="nav-right">
                  <li class="user-profile header-notification">
                    <a href="#!">
                      <img src="../assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                      <span>John Doe</span>
                      <i class="ti-angle-down"></i>
                    </a>
                    <ul class="show-notification profile-notification">
                      <li>
                        <a href="#!">
                          <i class="ti-settings"></i> Settings </a>
                      </li>
                      <li>
                        <a href="user-profile.html">
                          <i class="ti-user"></i> Profile </a>
                      </li>
                      <li>
                        <a href="auth-lock-screen.html">
                          <i class="ti-lock"></i> Lock Screen </a>
                      </li>
                      <li>
                        <a href="auth-normal-sign-in.html">
                          <i class="ti-layout-sidebar-left"></i> Logout </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
              <nav class="pcoded-navbar">
                <div class="sidebar_toggle">
                  <a href="#">
                    <i class="icon-close icons"></i>
                  </a>
                </div>
                <div class="pcoded-inner-navbar main-menu">
                  <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                  <ul class="pcoded-item pcoded-left-item">
                    <li class="">
                      <a href="espaceAdmin.php">
                        <span class="pcoded-micon">
                          <i class="ti-home"></i>
                          <b>D</b>
                        </span>
                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                        <span class="pcoded-mcaret"></span>
                      </a>
                    </li>
                    <li>
                      <a href="enseignant.php">
                        <span class="pcoded-micon">
                          <i class="ti-home"></i>
                          <b>D</b>
                        </span>
                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Gestion des Enseignant </span>
                        <span class="pcoded-mcaret"></span>
                      </a>
                    </li>
                    <li class="active">
                      <a href="etudiant.php">
                        <span class="pcoded-micon">
                          <i class="ti-home"></i>
                          <b>D</b>
                        </span>
                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Gestion des etudiants </span>
                        <span class="pcoded-mcaret"></span>
                      </a>
                    </li>
                    <li class="">
                      <a href="departements.php">
                        <span class="pcoded-micon">
                          <i class="ti-home"></i>
                          <b>D</b>
                        </span>
                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Gestion des Departements</span>
                        <span class="pcoded-mcaret"></span>
                      </a>
                    </li>
                    <li class="">
                      <a href="matieres.php">
                        <span class="pcoded-micon">
                          <i class="ti-home"></i>
                          <b>D</b>
                        </span>
                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Gestion des matières</span>
                        <span class="pcoded-mcaret"></span>
                      </a>
                    </li>
                    <li class="">
                      <a href="contact.php">
                        <span class="pcoded-micon">
                          <i class="ti-home"></i>
                          <b>D</b>
                        </span>
                        <span class="pcoded-mtext" data-i18n="nav.dash.main">contact</span>
                        <span class="pcoded-mcaret"></span>
                      </a>
                    </li>
                  </ul>
                </div>
              </nav>
              <div class="pcoded-content">
                <div class="pcoded-inner-content">
                  <div class="main-body">
                    <div class="page-wrapper">
                      <div class="page-body">
                        <div class="row">
                          <h3>Modification de l'étudiant(e) : <?php echo $etudiant['genre'] ?> <?php echo $etudiant['nom'] ?> <?php echo $etudiant['prenom'] ?> </h3>
                          <br />
                          <!-- statustic and process end -->
                          <div class="col-sm-12">
                            <form method="post">
                              <input type="hidden" name="id" value="
																														<?php echo $etudiant['id'] ?>">
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nom</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nom" value="
																																	<?php echo $etudiant['nom'] ?>" name="nom">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Prénom</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nom" value="
																																		<?php echo $etudiant['prenom'] ?>" name="prenom">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nom" value="
																																			<?php echo $etudiant['email'] ?>" name="email">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">date de naissance</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nom" value="
																																				<?php echo $etudiant['dateN'] ?>" name="dateN" disabled>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Class</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nom" value="
																																					<?php echo $etudiant['id_class'] ?>" name="class" placeholder="Entrer class">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">CIN</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nom" value="
																																						<?php echo $etudiant['cin'] ?>" name="cin" disabled>
                                </div>
                              </div>
                              <button class="btn btn-primary btn-sm btn-round" type="submit" name="edit_etudiant">Update</button>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div id="styleSelector"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Required Jquery -->
        <script type="text/javascript" src="../assets/js/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../assets/js/popper.js/popper.min.js"></script>
        <script type="text/javascript" src="../assets/js/bootstrap/js/bootstrap.min.js"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="../assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
        <!-- modernizr js -->
        <script type="text/javascript" src="../assets/js/modernizr/modernizr.js"></script>
        <!-- am chart -->
        <script src="../assets/pages/widget/amchart/amcharts.min.js"></script>
        <script src="../assets/pages/widget/amchart/serial.min.js"></script>
        <!-- Chart js -->
        <script type="text/javascript" src="../assets/js/chart.js/Chart.js"></script>
        <!-- Todo js -->
        <script type="text/javascript " src="../assets/pages/todo/todo.js "></script>
        <!-- Custom js -->
        <script type="text/javascript" src="../assets/pages/dashboard/custom-dashboard.min.js"></script>
        <script type="text/javascript" src="../assets/js/script.js"></script>
        <script type="text/javascript " src="../assets/js/SmoothScroll.js"></script>
        <script src="../assets/js/pcoded.min.js"></script>
        <script src="../assets/js/vartical-demo.js"></script>
        <script src="../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    </body>
</html>