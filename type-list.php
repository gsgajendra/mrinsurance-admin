<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Type List | Admin</title>
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
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css" />
    <link href="css/pages/tables.css" rel="stylesheet" type="text/css" />
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
                <h1>Type List</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                        </a>
                    </li>
                    <li class="active">Type List</li>
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
									<div class="col-md-6">
										<h3 class="caption NoMar">
												<span>Type List</span>
										</h3>
									</div>
									<div class="col-md-6">
										<a href="add-type.php" class="btn btn-sm btn-success pull-right">Add New</a>
									</div>
								</div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                <table class="table table-bordered table-striped table-condensed flip-content">
                                    <thead class="flip-content">
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Type</th>
                                            <th>Value</th>
											<th>Premia Code</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Car type</td>
                                            <td>Saloon</td>
											<td>ABC123</td>
                                            <td>
											<a href="#" class="label label-success"><i class="fa fa-trash"></i> View</a>
                                            <a href="#" class="label label-info"><i class="fa fa-trash"></i> Edit</a>
                                            <a href="#" class="label label-danger"><i class="fa fa-trash"></i> Delete</a>
											</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Cylinder</td>
                                            <td>4 Cylinder</td>
											<td>ABC123</td>
                                            <td>
											<a href="#" class="label label-success"><i class="fa fa-trash"></i> View</a>
                                            <a href="#" class="label label-info"><i class="fa fa-trash"></i> Edit</a>
                                            <a href="#" class="label label-danger"><i class="fa fa-trash"></i> Delete</a>
											</td>
                                        </tr><tr>
                                            <td>3</td>
                                            <td>Make</td>
                                            <td>Toyota</td>
											<td>ABC123</td>
                                            <td>
											<a href="#" class="label label-success"><i class="fa fa-trash"></i> View</a>
                                            <a href="#" class="label label-info"><i class="fa fa-trash"></i> Edit</a>
                                            <a href="#" class="label label-danger"><i class="fa fa-trash"></i> Delete</a>
											</td>
                                        </tr><tr>
                                            <td>4</td>
                                            <td>Bank</td>
                                            <td>FAB</td>
											<td>ABC123</td>
                                            <td>
											<a href="#" class="label label-success"><i class="fa fa-trash"></i> View</a>
                                            <a href="#" class="label label-info"><i class="fa fa-trash"></i> Edit</a>
                                            <a href="#" class="label label-danger"><i class="fa fa-trash"></i> Delete</a>
											</td>
                                        </tr><tr>
                                            <td>5</td>
                                            <td>Motor Product Category</td>
                                            <td>TPL</td>
											<td>ABC123</td>
                                            <td>
											<a href="#" class="label label-success"><i class="fa fa-trash"></i> View</a>
                                            <a href="#" class="label label-info"><i class="fa fa-trash"></i> Edit</a>
                                            <a href="#" class="label label-danger"><i class="fa fa-trash"></i> Delete</a>
											</td>
                                        </tr><tr>
                                            <td>6</td>
                                            <td>Gender</td>
                                            <td>Male</td>
											<td>ABC123</td>
                                            <td>
											<a href="#" class="label label-success"><i class="fa fa-trash"></i> View</a>
                                            <a href="#" class="label label-info"><i class="fa fa-trash"></i> Edit</a>
                                            <a href="#" class="label label-danger"><i class="fa fa-trash"></i> Delete</a>
											</td>
                                        </tr>
                                    </tbody>
                                </table>
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
    <script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="vendors/datatables/js/dataTables.responsive.js"></script>
    <script src="js/pages/table-responsive.js"></script>
</body>

</html>
