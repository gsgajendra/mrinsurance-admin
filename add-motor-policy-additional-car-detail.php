<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Motor Policy | Admin</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <!-- global css -->
    <link href="css/app.css" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
	<link href="vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/pages/tables.css" rel="stylesheet" type="text/css" />
	 <link href="css/pages/formelements.css" rel="stylesheet" />
    <!-- end of page level css-->
</head>

<body class="skin-josh">
	<?php include_once('include/header.html'); ?>
	 <div class="wrapper row-offcanvas row-offcanvas-left">
        <?php include_once('include/side-bar.html'); ?>
		<!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>Motor Policy</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                        </a>
                    </li>
                    <li class="active">Motor Policy</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box primary">
                            <div class="portlet-title">
                                <div class="row Nopadding">
									<div class="col-md-12">
										<h3 class="caption NoMar">
												<span>Additional Car Details</span>
										</h3>
									</div>
								</div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                <form action="add-motor-policy-additional-detail.php" method="post">
                                <div class="row">
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Car Registration No</label>
                                            <input type="text" class="form-control" placeholder="Car Registration No">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Registration Emirates</label>
                                            <select name="registrationEmirate" id="" class="form-control">
                                                <option value="">UAE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Chassis No</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Chasis no">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Engine No</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Engine no">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Car Color</label>
                                            <select name="carColor" id="" class="form-control">
                                                <option value="">White</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group">
                                            <label>Bank Loan</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="custom-radio"  value="1" > Yes
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="custom-radio" value="0" checked="checked"> No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Bank List</label>
                                            <select name="bankList" id="" class="form-control">
                                                <option value="">Bank Name</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Car Plate</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Car Plate">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Car Series</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Car series">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Start Date of insurance</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Start Date of insurance">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6" style="display: block;">
										<div class="form-group ui-draggable-handle text-center" style="position: static;">
											<a href="add-motor-policy-quotes.php" class="btn btn-warning btn-lg"><i class="fa fa-arrow-left"></i> Back</a>
										</div>
									</div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle text-center" style="position: static;">
                                            <button class="btn btn-success btn-lg">Next <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
								</div>
                                </form>
							</div>
                        </div>
                        <!-- END SAMPLE TABLE PORTLET-->
                    </div>
                </div>
            </section>
            <!-- content -->
        </aside>
        <!-- right-side -->
    </div>
    <!-- ./wrapper -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
    <script src="js/app.js" type="text/javascript"></script>
    <!-- end of global js -->
	<script type="text/javascript" src="vendors/jasny-bootstrap/js/jasny-bootstrap.js"></script>
	<script src="vendors/autogrow/autogrow.min.js" type="text/javascript"></script>
	<script src="vendors/bootstrap-maxlength/js/bootstrap-maxlength.js" type="text/javascript"></script>
    <script src="vendors/card/lib/js/jquery.card.js" type="text/javascript"></script>
    <script src="js/pages/formelements.js" type="text/javascript"></script>
</body>

</html>
