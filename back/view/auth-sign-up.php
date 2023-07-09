
<?php
include "../classes/Etudiant.php";
include "../classes/ClassE.php";
$e = new Etudiant();

if(isset($_POST['add_etudiant'])){
	
    $e->addEtudiant($_POST);
}


//Liste des class
$c = new ClassE();
$listeC = $c->listClass();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Projet PHP</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
    <meta name="keywords" content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes">
    <!-- Favicon icon -->
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>

<body class="fix-menu">
       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="signup-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material" method="post" action="">
                            <div class="text-center">
                                <img src="../assets/images/logo.png" alt="logo.png">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up. It is fast and easy.</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nom"  name="nom" placeholder="nom">
                                    <span class="md-line"></span>
                                </div>
                             <div class="input-group">
                                 
								<label style="color:black">Genre:</label>

								<div>
								  <input type="radio" id="huey" name="genre" value="mr"
										 checked>
								  <label>Mr</label>
								</div>


								<div>
								  <input type="radio" id="louie" name="genre" value="mme">
								  <label>Mme</label>
								</div>


								   
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrer prénom">
                                    <span class="md-line"></span>
                                </div>
								   <div class="input-group">
                                 	<label>date de naissance :</label><input type="date"  id="dateN" name="dateN">
                                    <span class="md-line"></span>
                                </div>

                                <div class="input-group">
                                    <input type="text" class="form-control" id="cin" name="cin" placeholder="Entrer cin" >
                                    <span class="md-line"></span>
                                </div>
                         
								  <div class="input-group">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Entrer eamil" >
                                    <span class="md-line"></span>
                                </div>
                                 
								       <div class="form-group row">
                                    
                                    <div class="col-sm-12">
							
										     <select name="class"  class="form-control">
											  <option value="**">Select Your Class</option>
											<?php
											while($class = $listeC->fetch()){
												?>
												<option value="<?php echo $class['id']?>"><?php echo $class['class']?></option>
											<?php } ?>
										</select>
                                    </div>
                                </div>
								  <div class="input-group">
                                    <input type="text" class="form-control" id="pw" name="pw" placeholder="Entrer mot de passe" >
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" name="add_etudiant" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now.</button>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>
                                       
                                    </div>
                                   
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
   
    <!-- Required Jquery -->
    <script type="text/javascript" src="../assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="../assets/js/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="../assets/js/modernizr/css-scrollbars.js"></script>
    <script type="text/javascript" src="../assets/js/common-pages.js"></script>
</body>

</html>
