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
												<span>New Motor Policy</span>
										</h3>
									</div>
								</div>
                            </div>
                            <div class="portlet-body flip-scroll">
								<div class="row">
                                    <div class="col-md-12"><h4 class="text-danger">Vehicle Details</h4></div>
									<div class="col-md-6" style="display: block;">
										<div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Make</label>
                                            <select class="form-control">
                                                <option>Nissan</option>
                                            </select>
										</div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Model</label>
                                            <select class="form-control">
                                                <option>Sunny</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Car Type / Specifications / Cylinders</label>
                                            <select class="form-control">
                                                <option>4 Cylinders</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Date of First Registration</label>
                                            <input type="date" class="form-control" id="input-text-1">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Car Value <small>(20% deduction every year on the original purchase price)</small></label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Car Value" value="20000">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"><h4 class="text-danger">Personal Details</h4></div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Full Name</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Email</label>
                                            <input type="email" class="form-control" id="input-text-1" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Mobile</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Mobile">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Date of Birth</label>
                                            <input type="date" class="form-control" id="input-text-1" placeholder="Date of Birth">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">UAE Driving License Issue Date</label>
                                            <input type="date" class="form-control" id="input-text-1" placeholder="Mobile">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"><h4 class="text-danger">Additional Details</h4></div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group">
                                        <label>Made any accident last year?</label>
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
                                        <div class="form-group">
                                        <label>Can you provide proof?</label>
                                        <div class="radio">
                                            <label>
                                            <input type="radio" class="custom-radio"  value="1" checked="checked"> Yes
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                            <input type="radio" class="custom-radio" value="0"> No
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Quotation – all plans, terms and conditions, frequently asked questions</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="" value="550">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Promo Code</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Promo Code" value="10%">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Additional Loading</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Additional Loading">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Promo Code</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Promo Code" value="10%">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">VAT 5%</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="VAT">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"><h4 class="text-danger">Additional Car details</h4></div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Car Registration No</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Car Registration No">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Registration Emirates</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Registration Emirates">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Chassis No</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Chassis No">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Engine No</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Engine No">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Bank Loan</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Bank Loan">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Bank List</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Bank List">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Car Plate</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Car Plate">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Car Series</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Car Series">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Start Date of insurance</label>
                                            <input type="date" class="form-control" id="input-text-1" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"><h4 class="text-danger">Additional Details</h4></div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group">
                                        <label>Gender</label>
                                        <div class="radio">
                                            <label>
                                            <input type="radio" class="custom-radio"  value="Male" checked="checked"> Male
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                            <input type="radio" class="custom-radio" value="Female"> Female
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                            <input type="radio" class="custom-radio" value="Other"> Other
                                            </label>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Registration Emirates</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Registration Emirates">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Traffic No (TC no)</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Traffic No (TC no)">
                                        </div>
                                    </div>
                                    <div class="col-md-12 bg-warning" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Promo Code</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Promo Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"><h4 class="text-danger">Upload Documents</h4></div>
                                    <div class="col-md-3">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; background-image: url('img/mulkiya-front.png');"></div>
                                        <div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="..."></span>
                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; background-image: url('img/mulkiya-back.png');"></div>
                                        <div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="..."></span>
                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; background-image: url('img/dl-front.png');"></div>
                                        <div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="..."></span>
                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; background-image: url('img/dl-back.png');"></div>
                                        <div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="..."></span>
                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; background-image: url('img/other-image.png');"></div>
                                        <div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="..."></span>
                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="display: block;">
										<hr/>
										<div class="form-group ui-draggable-handle text-center" style="position: static;">
											<button class="btn btn-success btn-lg"><i class="fa fa-check-circle"></i> Insert</button>
										</div>
									</div>
								</div>
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
