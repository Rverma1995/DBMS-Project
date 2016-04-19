<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard | PDMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Pharmacy Database Management System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa  fa-plus-circle fa-fw"></i> Insert<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="i_drug.php">Drug</a>
                                </li>
                                <li>
                                    <a href="i_drug_manufacturer.php">Drug Manufacturer</a>
                                </li>
                                <li>
                                    <a href="i_employee.php">Employee</a>
                                </li>
                                <li>
                                    <a href="i_pharmacy.php">Pharmacy</a>
                                </li>
                                <li>
                                    <a href="i_patient.php">Patient</a>
                                </li>
                                <li>
                                    <a href="i_doctor.php">Doctor</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Records<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="r_drug.php">Drug</a>
                                </li>
                                <li>
                                    <a href="r_drug_manufacturer.php">Drug Manufacturer</a>
                                </li>
                                <li>
                                    <a href="r_employee.php">Employee</a>
                                </li>
                                <li>
                                    <a href="r_pharmacy.php">Pharmacy</a>
                                </li>
                                <li>
                                    <a href="r_patient.php">Patient</a>
                                </li>
                                <li>
                                    <a href="r_doctor.php">Doctor</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-hospital-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $mysqlserver="localhost";
                                            $mysqlusername="admin2";
                                            $mysqlpassword="admin2";
                                            $link=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

                                            $dbname = 'dbms_pharmacy';
                                            mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

                                            $cdquery="SELECT count(pharmacy_id) AS count_pharmacy_id FROM pharmacy";
                                            $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

                                            while ($cdrow=mysql_fetch_array($cdresult)) {
                                            $cdTitle=$cdrow["count_pharmacy_id"];
                                                echo "<div class=\"huge\">$cdTitle</div>";
                                            }

                                            mysql_close($link);
                                        ?>
                                        <div>Pharmacies</div>
                                    </div>
                                </div>
                            </div>
                            <a href="r_pharmacy.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View/Update Records</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $mysqlserver="localhost";
                                            $mysqlusername="admin2";
                                            $mysqlpassword="admin2";
                                            $link=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

                                            $dbname = 'dbms_pharmacy';
                                            mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

                                            $cdquery="SELECT count(employee_id) AS count_employee_id FROM employee";
                                            $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

                                            while ($cdrow=mysql_fetch_array($cdresult)) {
                                            $cdTitle=$cdrow["count_employee_id"];
                                                echo "<div class=\"huge\">$cdTitle</div>";
                                            }

                                            mysql_close($link);
                                        ?>
                                        <div>Employees</div>
                                    </div>
                                </div>
                            </div>
                            <a href="r_employee.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View/Update Records</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-medkit fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $mysqlserver="localhost";
                                            $mysqlusername="admin2";
                                            $mysqlpassword="admin2";
                                            $link=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

                                            $dbname = 'dbms_pharmacy';
                                            mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

                                            $cdquery="SELECT count(drug_id) AS count_drug_id FROM drug";
                                            $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

                                            while ($cdrow=mysql_fetch_array($cdresult)) {
                                            $cdTitle=$cdrow["count_drug_id"];
                                                echo "<div class=\"huge\">$cdTitle</div>";
                                            }

                                            mysql_close($link);
                                        ?>
                                        <div>Drugs</div>
                                    </div>
                                </div>
                            </div>
                            <a href="r_drug.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View/Update Records</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $mysqlserver="localhost";
                                            $mysqlusername="admin2";
                                            $mysqlpassword="admin2";
                                            $link=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

                                            $dbname = 'dbms_pharmacy';
                                            mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

                                            $cdquery="SELECT count(patient_id) AS count_patient_id FROM patient";
                                            $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

                                            while ($cdrow=mysql_fetch_array($cdresult)) {
                                            $cdTitle=$cdrow["count_patient_id"];
                                                echo "<div class=\"huge\">$cdTitle</div>";
                                            }

                                            mysql_close($link);
                                        ?>
                                        <div>Patients</div>
                                    </div>
                                </div>
                            </div>
                            <a href="r_patient.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View/Update Records</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <script type="text/javascript">
    window.setTimeout(function() {
        $("#fade").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 2000);
    </script>

</body>

</html>
