<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Excess | Admin</title>
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
                <h1>Excess</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                        </a>
                    </li>
                    <li class="active">Excess</li>
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
												<span>Add Excess</span>
										</h3>
									</div>
								</div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                <div class="row">
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Category</label>
                                            <select class="form-control">
                                                <option>Category 1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Price</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Price">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Excess Amount</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Excess amount">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display: block;">
                                        <div class="form-group ui-draggable-handle" style="position: static;"><label for="input-text-1">Premia Code</label>
                                            <input type="text" class="form-control" id="input-text-1" placeholder="Premia code">
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
