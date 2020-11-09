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
                                    <div class="col-md-12"><h4 class="text-danger">Car Details</h4></div>
									<div class="col-md-6" style="display: block;">
										<div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Car Make</label>
                                            <select class="form-control">
                                                <option>Car make</option>
                                            </select>
										</div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Car Type</label>
                                            <select class="form-control">
                                                <option>Car type</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Car Model</label>
                                            <select class="form-control">
                                                <option>Car model</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group">
                                            <label>Is your car brand New?</label>
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
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Year of Manufacture</label>
                                            <select name="yearOfManufacture" id="" class="form-control">
                                                <option value="">2020</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">When did you last file a claim?</label>
                                            <select name="lastFileClaim" id="" class="form-control">
                                                <option value="">2019</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">What's the value of your car?</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="What's the value of your car?">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">UAE License Held for?</label>
                                            <select name="uaeLicenseHeld" id="" class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">When did you first register your car?</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="When did you first register your car?">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Are you an existing AWNIC customer?</label>
                                            <div class="form-group">
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
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-dr]aggable-handle" style="position: static;"><label for="input-text-1">Has your previous policy expired?</label>
                                            <div class="form-group">
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
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"><h4 class="text-danger">Driver Info</h4></div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">First Name</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Last Name</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Email</label>
                                            <input type="email" class="form-control" id="input-text-1" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Date of Birth * (18 yrs to 65yrs)</label>
                                            <input type="date" class="form-control" id="input-text-1" placeholder="Date of Birth">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Mobile * (+971- 9 digits starting from 5)</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Mobile">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Nationality *</label>
                                            <select name="nationality" id="" class="form-control">
                                                <option value="">Indian</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="text-danger">Quote will come with all options</h4>
                                    </div>
                                    <div class="col-md-6"><h5 class="text-success">TPL</h5></div>
                                    <div class="col-md-6"><h5 class="text-success">Comprehensive</h5></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"><h4 class="text-danger">Additional Car Details</h4></div>
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
                                            <select name="registrationEmirate" id="" class="form-control">
                                                <option value="">UAE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Traffic No (TC no)</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Traffic No (TC no)">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Driving license emirates</label>
                                            <select name="dlEmirate" id="" class="form-control">
                                                <option value="">UAE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Driving license number</label>
                                            <select name="dlNumber" id="" class="form-control">
                                                <option value="">UK425</option>
                                            </select>
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
