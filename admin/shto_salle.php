<?php include('session.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>PRIME CINEMA - SHTO SALLE</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.jpg" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    
     <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	 
	 <!-- Bootstrap Material Datetime Picker Css -->
    <link href="plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>
<?php include('dbcon.php'); ?>
<body class="theme-red">
    <!-- Page Loader -->
<?php include('top.php'); ?>
    
<?php include('menu.php'); ?>

    <section class="content">
        <div class="container-fluid">


            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Shtoni nje Salle
                            </h2>
                        </div>
                        <div class="body">
                            <form method="POST" enctype= "multipart/form-data">
                                
								
								
								
								
								<label for="email_address">Zgjidhni Kinemane</label>
                               <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control show-tick" placeholder="Kienema Imperial" name="kinema_emer"  required>
									
					
								 </div>
                                </div>
								
								<label for="password">Emri i Salles</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="text" class="form-control" placeholder="Emri:" name="salle_emer" required >
                                    </div>
                                </div>
								
									
								<label for="password">Numri i Vendeve</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" id="text" class="form-control" placeholder="NR:" name="salle_vende" required >
                                    </div>
                                </div>
								
								
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" id="file" class="form-control" name="image">
                                    </div>
                                </div>

                                <input type="submit" name="submit" class="btn btn-primary m-t-15 waves-effect" value="Save">
     					<?php	if(isset($_POST['submit'])){
     					$kinema_emer=$_POST['kinema_emer'];
     					$salle_emer=$_POST['salle_emer'];
						$salle_vende=$_POST['salle_vende'];
     					$filename=$_FILES['image']['name'];
     					$filetype=$_FILES['image']['type'];
     					$filetmp=$_FILES['image']['tmp_name'];
                            move_uploaded_file($filetmp,"images/salla/$filename");
                            
                            mysql_query("insert into salla(kinema_emer,salle_emer,salle_vende,salle_image) values ('$kinema_emer','$salle_emer','$salle_vende','$filename')");
                            
                            ?> <script>
	 window.location='shto_salle.php';
	 </script><?php
                            }
                            ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
</section>


    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>
	  <!-- Autosize Plugin Js -->
    <script src="plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="plugins/momentjs/moment.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
	<script src="js/pages/forms/basic-form-elements.js"></script>
	
	   <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>