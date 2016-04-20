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
                <a class="navbar-brand" href="index.php">Pharmacy Database Management System</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!-- <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </li> -->
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
                            <ul class="nav nav-second-level in">
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
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-info">
                            <div class="panel-heading text-center">
                                <strong>New Sale</strong>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <strong>Prescription Details</strong>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <?php
                                                            //Form submitted
                                                            if(isset($_POST['submit'])) {
                                                                $link = mysqli_connect("localhost", "admin2", "admin2", "dbms_pharmacy");

                                                                //Check connection
                                                                if($link === false){
                                                                    $cerror = mysqli_connect_error();
                                                                    echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                                                            Could not connect to database! $cerror
                                                                          </div>";
                                                                    die();
                                                                }

                                                                // Escape user inputs for security
                                                                $patient_id = mysqli_real_escape_string($link, $_POST['patient_id']);
                                                                $doctor_id = mysqli_real_escape_string($link, $_POST['doctor_id']);
                                                                $drug_ID1 = mysqli_real_escape_string($link, $_POST['drug_ID1']);
                                                                $quantity1 = mysqli_real_escape_string($link, $_POST['quantity1']);
                                                                $drug_ID2 = mysqli_real_escape_string($link, $_POST['drug_ID2']);
                                                                $quantity2 = mysqli_real_escape_string($link, $_POST['quantity2']);
                                                                $drug_ID3 = mysqli_real_escape_string($link, $_POST['drug_ID3']);
                                                                $quantity3 = mysqli_real_escape_string($link, $_POST['quantity3']);
                                                                $drug_ID4 = mysqli_real_escape_string($link, $_POST['drug_ID4']);
                                                                $quantity4 = mysqli_real_escape_string($link, $_POST['quantity4']);
                                                                $drug_ID5 = mysqli_real_escape_string($link, $_POST['drug_ID5']);
                                                                $quantity5 = mysqli_real_escape_string($link, $_POST['quantity5']);
                                                                $total_price = mysqli_real_escape_string($link, $_POST['total_price']);
                                                                //echo $patient_id . " " . $doctor_id . " " . $drug_ID1 . " " . $quantity1 . " " . $drug_ID2 . " " . $quantity2 . " " . $drug_ID3 . " " . $quantity3 . " " . $drug_ID4 . " " . $quantity4 . " " . $drug_ID5 . " " . $quantity5 . " " . $total_price;

                                                                //attempt insert query execution
                                                                if($drug_ID5 == -1) {
                                                                    if($drug_ID4 == -1) {
                                                                        if($drug_ID3 == -1) {
                                                                            if($drug_ID2 == -1) {
                                                                                $sql = "INSERT INTO _prescription (patient_id, doctor_id, drug_ID1, quantity1) VALUES ('$patient_id', '$doctor_id', '$drug_ID1', '$quantity1')";
                                                                            } else {
                                                                                $sql = "INSERT INTO _prescription (patient_id, doctor_id, drug_ID1, quantity1, drug_ID2, quantity2) VALUES ('$patient_id', '$doctor_id', '$drug_ID1', '$quantity1', '$drug_ID2', '$quantity2')";
                                                                            }
                                                                        } else {
                                                                            $sql = "INSERT INTO _prescription (patient_id, doctor_id, drug_ID1, quantity1, drug_ID2, quantity2, drug_ID3, quantity3) VALUES ('$patient_id', '$doctor_id', '$drug_ID1', '$quantity1', '$drug_ID2', '$quantity2', '$drug_ID3', '$quantity3')";
                                                                        }
                                                                    } else {
                                                                        $sql = "INSERT INTO _prescription (patient_id, doctor_id, drug_ID1, quantity1, drug_ID2, quantity2, drug_ID3, quantity3, drug_ID4, quantity4) VALUES ('$patient_id', '$doctor_id', '$drug_ID1', '$quantity1', '$drug_ID2', '$quantity2', '$drug_ID3', '$quantity3', '$drug_ID4')";
                                                                    }
                                                                } else {
                                                                    $sql = "INSERT INTO _prescription (patient_id, doctor_id, drug_ID1, quantity1, drug_ID2, quantity2, drug_ID3, quantity3, drug_ID4, quantity4, drug_ID5, quantity5) VALUES ('$patient_id', '$doctor_id', '$drug_ID1', '$quantity1', '$drug_ID2', '$quantity2', '$drug_ID3', '$quantity3', '$drug_ID4', '$quantity4', '$drug_ID5', '$quantity5')";
                                                                }

                                                                if(mysqli_query($link, $sql)){
                                                                    $db = mysql_connect("localhost", "admin2", "admin2");
                                                                    mysql_select_db("dbms_pharmacy", $db);
                                                                    $result = mysql_query("SELECT prescription_id FROM _prescription ORDER BY prescription_id DESC LIMIT 1");
                                                                    $data = mysql_fetch_row($result);

                                                                    $prescription_id = $data[0];

                                                                    $sql = "INSERT INTO _transaction (prescription_id, total_amount) VALUES ('$prescription_id', '$total_price')";
                                                                    if(mysqli_query($link, $sql)){
                                                                        echo "<div class=\"alert alert-success alert-dismissable\" id=\"fade\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                                                                Records Added!
                                                                              </div>";
                                                                    } else {
                                                                        $error = "$sql. " . mysqli_error($link);
                                                                        echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                                                                Could not execute $error.
                                                                              </div>";
                                                                    }
                                                                } else {
                                                                    $error = "$sql. " . mysqli_error($link);
                                                                    echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                                                            Could not execute $error.
                                                                          </div>";
                                                                }

                                                                // close connection
                                                                mysqli_close($link);
                                                            }
                                                        ?>
                                                        <form onsubmit="enable_all();" id="prescription" role="form" method="post" action="<?=$_SERVER['PHP_SELF']?>">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label>Select Patient Name</label>
                                                                        <select class="form-control" name="patient_id" required="">
                                                                            <option disabled selected value style="display:none;"></option>
                                                                            <?php

                                                                                $mysqlserver="localhost";
                                                                                $mysqlusername="admin2";
                                                                                $mysqlpassword="admin2";
                                                                                $link=mysql_connect(localhost, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

                                                                                $dbname = 'dbms_pharmacy';
                                                                                mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

                                                                                $cdquery="SELECT patient_id, first_name, last_name FROM patient";
                                                                                $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

                                                                                while ($cdrow=mysql_fetch_array($cdresult)) {
                                                                                $first_name=$cdrow["first_name"];
                                                                                $last_name=$cdrow["last_name"];
                                                                                $patient_id=$cdrow["patient_id"];
                                                                                    echo "<option value=\"$patient_id\">
                                                                                        $first_name $last_name
                                                                                    </option>";
                                                                                }

                                                                            ?>
                                                                        </select>
                                                                        <p class="help-block text-right"><a href="i_patient.php" style="color:#737373;">Add New Patient</a></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label>Select Doctor Name</label>
                                                                        <select class="form-control" name="doctor_id" required="">
                                                                            <option disabled selected value style="display:none;"></option>
                                                                            <?php

                                                                                $mysqlserver="localhost";
                                                                                $mysqlusername="admin2";
                                                                                $mysqlpassword="admin2";
                                                                                $link=mysql_connect(localhost, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

                                                                                $dbname = 'dbms_pharmacy';
                                                                                mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

                                                                                $cdquery="SELECT doctor_id, first_name, last_name FROM doctor";
                                                                                $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

                                                                                while ($cdrow=mysql_fetch_array($cdresult)) {
                                                                                $first_name=$cdrow["first_name"];
                                                                                $last_name=$cdrow["last_name"];
                                                                                $doctor_id=$cdrow["doctor_id"];
                                                                                    echo "<option value=\"$doctor_id\">
                                                                                        $first_name $last_name
                                                                                    </option>";
                                                                                }

                                                                            ?>
                                                                        </select>
                                                                        <p class="help-block text-right"><a href="i_doctor.php" style="color:#737373;">Add New Doctor</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <div class="form-group">
                                                                        <label>Select Drug</label>
                                                                        <select id="sel_drug_id1" class="form-control" name="drug_ID1" required="" onchange="calRate1();check_disabled();">
                                                                            <option disabled selected value="-1" style="display:none;"></option>
                                                                            <?php

                                                                                $mysqlserver="localhost";
                                                                                $mysqlusername="admin2";
                                                                                $mysqlpassword="admin2";
                                                                                $link=mysql_connect(localhost, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

                                                                                $dbname = 'dbms_pharmacy';
                                                                                mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

                                                                                $cdquery="SELECT drug_id, trade_name FROM drug";
                                                                                $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

                                                                                while ($cdrow=mysql_fetch_array($cdresult)) {
                                                                                $trade_name=$cdrow["trade_name"];
                                                                                $drug_id=$cdrow["drug_id"];
                                                                                    echo "<option value=\"$drug_id\">
                                                                                        $trade_name
                                                                                    </option>";
                                                                                }

                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-1 text-center">
                                                                    <h5 id="rate1" style="margin-top:30px; ">-</h5>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Enter Quantity</label>
                                                                        <input  id="inp_quan1" class="form-control" type="number" name="quantity1" required="" value="0" min="0" oninput="calculateTotal();">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <div class="form-group">
                                                                        <label>Select Drug</label>
                                                                        <select id="sel_drug_id2" class="form-control" name="drug_ID2" required="" onchange="calRate2();check_disabled();">
                                                                            <option selected value="-1"></option>
                                                                            <?php

                                                                                $mysqlserver="localhost";
                                                                                $mysqlusername="admin2";
                                                                                $mysqlpassword="admin2";
                                                                                $link=mysql_connect(localhost, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

                                                                                $dbname = 'dbms_pharmacy';
                                                                                mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

                                                                                $cdquery="SELECT drug_id, trade_name FROM drug";
                                                                                $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

                                                                                while ($cdrow=mysql_fetch_array($cdresult)) {
                                                                                $trade_name=$cdrow["trade_name"];
                                                                                $drug_id=$cdrow["drug_id"];
                                                                                    echo "<option value=\"$drug_id\">
                                                                                        $trade_name
                                                                                    </option>";
                                                                                }

                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-1 text-center">
                                                                    <h5 id="rate2" style="margin-top:30px; ">-</h5>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Enter Quantity</label>
                                                                        <input  id="inp_quan2" class="form-control" type="number" name="quantity2" required="" value="0" min="0" oninput="calculateTotal();">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <div class="form-group">
                                                                        <label>Select Drug</label>
                                                                        <select  id="sel_drug_id3" class="form-control" name="drug_ID3" required="" onchange="calRate3();check_disabled();">
                                                                            <option selected value="-1"></option>
                                                                            <?php

                                                                                $mysqlserver="localhost";
                                                                                $mysqlusername="admin2";
                                                                                $mysqlpassword="admin2";
                                                                                $link=mysql_connect(localhost, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

                                                                                $dbname = 'dbms_pharmacy';
                                                                                mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

                                                                                $cdquery="SELECT drug_id, trade_name FROM drug";
                                                                                $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

                                                                                while ($cdrow=mysql_fetch_array($cdresult)) {
                                                                                $trade_name=$cdrow["trade_name"];
                                                                                $drug_id=$cdrow["drug_id"];
                                                                                    echo "<option value=\"$drug_id\">
                                                                                        $trade_name
                                                                                    </option>";
                                                                                }

                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-1 text-center">
                                                                    <h5 id="rate3" style="margin-top:30px; ">-</h5>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Enter Quantity</label>
                                                                        <input  id="inp_quan3" class="form-control" type="number" name="quantity3" required="" value="0" min="0" oninput="calculateTotal();">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <div class="form-group">
                                                                        <label>Select Drug</label>
                                                                        <select   id="sel_drug_id4" class="form-control" name="drug_ID4" required="" onchange="calRate4();check_disabled();">
                                                                            <option selected value="-1"></option>
                                                                            <?php

                                                                                $mysqlserver="localhost";
                                                                                $mysqlusername="admin2";
                                                                                $mysqlpassword="admin2";
                                                                                $link=mysql_connect(localhost, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

                                                                                $dbname = 'dbms_pharmacy';
                                                                                mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

                                                                                $cdquery="SELECT drug_id, trade_name FROM drug";
                                                                                $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

                                                                                while ($cdrow=mysql_fetch_array($cdresult)) {
                                                                                $trade_name=$cdrow["trade_name"];
                                                                                $drug_id=$cdrow["drug_id"];
                                                                                    echo "<option value=\"$drug_id\">
                                                                                        $trade_name
                                                                                    </option>";
                                                                                }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-1 text-center">
                                                                    <h5 id="rate4" style="margin-top:30px; ">-</h5>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Enter Quantity</label>
                                                                        <input id="inp_quan4" class="form-control" type="number" name="quantity4" required="" value="0" min="0" oninput="calculateTotal();">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <div class="form-group">
                                                                        <label>Select Drug</label>
                                                                        <select id="sel_drug_id5" class="form-control" name="drug_ID5" required="" onchange="calRate5();check_disabled();">
                                                                            <option selected value="-1"></option>
                                                                            <?php

                                                                                $mysqlserver="localhost";
                                                                                $mysqlusername="admin2";
                                                                                $mysqlpassword="admin2";
                                                                                $link=mysql_connect(localhost, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

                                                                                $dbname = 'dbms_pharmacy';
                                                                                mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

                                                                                $cdquery="SELECT drug_id, trade_name FROM drug";
                                                                                $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

                                                                                while ($cdrow=mysql_fetch_array($cdresult)) {
                                                                                $trade_name=$cdrow["trade_name"];
                                                                                $drug_id=$cdrow["drug_id"];
                                                                                    echo "<option value=\"$drug_id\">
                                                                                        $trade_name
                                                                                    </option>";
                                                                                }
                                                                            ?>
                                                                        </select>
                                                                        <p class="help-block text-right"><a href="i_drug.php" style="color:#737373;">Add New Drug</a></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-1 text-center">
                                                                    <h5 id="rate5" style="margin-top:30px; ">-</h5>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                        <label>Enter Quantity</label>
                                                                        <input id="inp_quan5" class="form-control" type="number" name="quantity5" required="" value="0" min="0" oninput="calculateTotal();" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.row (nested) -->
                                                </div>
                                                <!-- /.panel-body -->
                                            </div>
                                            <div class="well well-sm">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h4>Total Price: </h4>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h4 class="text-right" id="total_price">0₹</h4>
                                                        <input type='hidden' id='hiddenTotalPrice' name="total_price" value='' />
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" id="submit_button" name="submit" value="Submit" class="btn btn-default pull-right">Insert Record</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-building-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $mysqlserver="localhost";
                                            $mysqlusername="admin2";
                                            $mysqlpassword="admin2";
                                            $link=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

                                            $dbname = 'dbms_pharmacy';
                                            mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

                                            $cdquery="SELECT count(drug_manufacturer_id) AS count_drug_manufacturer_id FROM drug_manufacturer";
                                            $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

                                            while ($cdrow=mysql_fetch_array($cdresult)) {
                                            $cdTitle=$cdrow["count_drug_manufacturer_id"];
                                                echo "<div class=\"huge\">$cdTitle</div>";
                                            }

                                            mysql_close($link);
                                        ?>
                                        <div>Drug Manufacturers</div>
                                    </div>
                                </div>
                            </div>
                            <a href="r_drug_manufacturer.php">
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
                                        <i class="fa fa-user-md fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                            $mysqlserver="localhost";
                                            $mysqlusername="admin2";
                                            $mysqlpassword="admin2";
                                            $link=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

                                            $dbname = 'dbms_pharmacy';
                                            mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

                                            $cdquery="SELECT count(doctor_id) AS count_doctor_id FROM doctor";
                                            $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

                                            while ($cdrow=mysql_fetch_array($cdresult)) {
                                            $cdTitle=$cdrow["count_doctor_id"];
                                                echo "<div class=\"huge\">$cdTitle</div>";
                                            }

                                            mysql_close($link);
                                        ?>
                                        <div>Doctors</div>
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
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <strong>Sale(s) Past Week</strong>
                            </div>
                            <div class="panel-body">
                                <div id ='chartDiv'></div>
                            </div>
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

    <!-- Zing Charts JavaScript -->
    <script src="../components/zingchart/zingchart.min.js"></script>
    <!-- <script src="../js/morris-data.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <script>
    $(document).ready(function() {
        check_disabled();
    });
    function check_disabled(){
        var theForm = document.forms["prescription"];
        if(theForm.elements["drug_ID4"].value == -1) {
            document.getElementById("sel_drug_id5").disabled = true;
            document.getElementById("inp_quan5").disabled = true;
        } else {
            document.getElementById("sel_drug_id5").disabled = false;
            document.getElementById("inp_quan5").disabled = false;
        }
        if(theForm.elements["drug_ID3"].value == -1) {
            document.getElementById("sel_drug_id4").disabled = true;
            document.getElementById("inp_quan4").disabled = true;
        } else {
            document.getElementById("sel_drug_id4").disabled = false;
            document.getElementById("inp_quan4").disabled = false;
        }
        if(theForm.elements["drug_ID2"].value == -1) {
            document.getElementById("sel_drug_id3").disabled = true;
            document.getElementById("inp_quan3").disabled = true;
        } else {
            document.getElementById("sel_drug_id3").disabled = false;
            document.getElementById("inp_quan3").disabled = false;
        }
        if(theForm.elements["drug_ID1"].value == -1) {
            document.getElementById("sel_drug_id2").disabled = true;
            document.getElementById("inp_quan2").disabled = true;
        } else {
            document.getElementById("sel_drug_id2").disabled = false;
            document.getElementById("inp_quan2").disabled = false;
        }
    }
    function enable_all(){
        document.getElementById("sel_drug_id5").disabled = false;
        document.getElementById("inp_quan5").disabled = false;
        document.getElementById("sel_drug_id4").disabled = false;
        document.getElementById("inp_quan4").disabled = false;
        document.getElementById("sel_drug_id3").disabled = false;
        document.getElementById("inp_quan3").disabled = false;
        document.getElementById("sel_drug_id2").disabled = false;
        document.getElementById("inp_quan2").disabled = false;
    }
    </script>

    <script>
        var temp_price1;
        var temp_price2;
        var temp_price3;
        var temp_price4;
        var temp_price5;

        function getDrug1Price() {
            var theForm = document.forms["prescription"];
            var drug_id_data = theForm.elements["drug_ID1"];
            var quantity_data = theForm.elements["quantity1"];
            var drug_id = drug_id_data.value;
            var quantity = quantity_data.value;
            $.ajax({
                data: 'data=' + drug_id,
                url: '../scripts/price_drug.php',
                method: 'POST',
                success: function(msg) {
                    if(msg != "fail") {
                        temp_price1 = msg;
                    } else {
                        temp_price1 = -1;
                    }
                }
            });
            if(temp_price1 == -1){
                var price = 0;
                var result = price * quantity;
                return result;
            } else {
                var price = temp_price1;
                var result = price * quantity;
                return result;
            }
        }

        function calRate1() {
            var theForm = document.forms["prescription"];
            var drug_id_data = theForm.elements["drug_ID1"];
            var drug_id = drug_id_data.value;
            $.ajax({
                data: 'data=' + drug_id,
                url: '../scripts/price_drug.php',
                method: 'POST',
                success: function(msg) {
                    if(msg != "fail") {
                        var price = msg;
                        document.getElementById("rate1").innerHTML= price + "₹/-";
                    } else {
                        document.getElementById("rate1").innerHTML= "";
                    }
                }
            });
        }

        function getDrug2Price() {
            var theForm = document.forms["prescription"];
            var drug_id_data = theForm.elements["drug_ID2"];
            var quantity_data = theForm.elements["quantity2"];
            var drug_id = drug_id_data.value;
            var quantity = quantity_data.value;
            $.ajax({
                data: 'data=' + drug_id,
                url: '../scripts/price_drug.php',
                method: 'POST',
                success: function(msg) {
                    if(msg != "fail") {
                        temp_price2 = msg;
                    } else {
                        temp_price2 = -1;
                    }
                }
            });
            if(temp_price2 == -1){
                var price = 0;
                var result = price * quantity;
                return result;
            } else {
                var price = temp_price2;
                var result = price * quantity;
                return result;
            }
        }

        function calRate2() {
            var theForm = document.forms["prescription"];
            var drug_id_data = theForm.elements["drug_ID2"];
            var drug_id = drug_id_data.value;
            $.ajax({
                data: 'data=' + drug_id,
                url: '../scripts/price_drug.php',
                method: 'POST',
                success: function(msg) {
                    if(msg != "fail") {
                        var price = msg;
                        document.getElementById("rate2").innerHTML= price + "₹/-";
                    } else {
                        document.getElementById("rate2").innerHTML= " ";
                    }
                }
            });
        }

        function getDrug3Price() {
            var theForm = document.forms["prescription"];
            var drug_id_data = theForm.elements["drug_ID3"];
            var quantity_data = theForm.elements["quantity3"];
            var drug_id = drug_id_data.value;
            var quantity = quantity_data.value;
            $.ajax({
                data: 'data=' + drug_id,
                url: '../scripts/price_drug.php',
                method: 'POST',
                success: function(msg) {
                    if(msg != "fail") {
                        temp_price3 = msg;
                    } else {
                        temp_price3 = -1;
                    }
                }
            });
            if(temp_price3 == -1){
                var price = 0;
                var result = price * quantity;
                return result;
            } else {
                var price = temp_price3;
                var result = price * quantity;
                return result;
            }
        }

        function calRate3() {
            var theForm = document.forms["prescription"];
            var drug_id_data = theForm.elements["drug_ID3"];
            var drug_id = drug_id_data.value;
            $.ajax({
                data: 'data=' + drug_id,
                url: '../scripts/price_drug.php',
                method: 'POST',
                success: function(msg) {
                    if(msg != "fail") {
                        var price = msg;
                        document.getElementById("rate3").innerHTML= price + "₹/-";
                    } else {
                        document.getElementById("rate3").innerHTML= " ";
                    }
                }
            });
        }

        function getDrug4Price() {
            var theForm = document.forms["prescription"];
            var drug_id_data = theForm.elements["drug_ID4"];
            var quantity_data = theForm.elements["quantity4"];
            var drug_id = drug_id_data.value;
            var quantity = quantity_data.value;
            $.ajax({
                data: 'data=' + drug_id,
                url: '../scripts/price_drug.php',
                method: 'POST',
                success: function(msg) {
                    if(msg != "fail") {
                        temp_price4 = msg;
                    } else {
                        temp_price4 = -1;
                    }
                }
            });
            if(temp_price4 == -1){
                var price = 0;
                var result = price * quantity;
                return result;
            } else {
                var price = temp_price4;
                var result = price * quantity;
                return result;
            }
        }

        function calRate4() {
            var theForm = document.forms["prescription"];
            var drug_id_data = theForm.elements["drug_ID4"];
            var drug_id = drug_id_data.value;
            $.ajax({
                data: 'data=' + drug_id,
                url: '../scripts/price_drug.php',
                method: 'POST',
                success: function(msg) {
                    if(msg != "fail") {
                        var price = msg;
                        document.getElementById("rate4").innerHTML= price + "₹/-";
                    } else {
                        document.getElementById("rate4").innerHTML= " ";
                    }
                }
            });
        }

        function getDrug5Price() {
            var theForm = document.forms["prescription"];
            var drug_id_data = theForm.elements["drug_ID5"];
            var quantity_data = theForm.elements["quantity5"];
            var drug_id = drug_id_data.value;
            var quantity = quantity_data.value;
            $.ajax({
                data: 'data=' + drug_id,
                url: '../scripts/price_drug.php',
                method: 'POST',
                success: function(msg) {
                    if(msg != "fail") {
                        temp_price5 = msg;
                    } else {
                        temp_price5 = -1;
                    }
                }
            });
            if(temp_price5 == -1){
                var price = 0;
                var result = price * quantity;
                return result;
            } else {
                var price = temp_price5;
                var result = price * quantity;
                return result;
            }
        }

        function calRate5() {
            var theForm = document.forms["prescription"];
            var drug_id_data = theForm.elements["drug_ID5"];
            var drug_id = drug_id_data.value;
            $.ajax({
                data: 'data=' + drug_id,
                url: '../scripts/price_drug.php',
                method: 'POST',
                success: function(msg) {
                    if(msg != "fail") {
                        var price = msg;
                        document.getElementById("rate5").innerHTML= price + "₹/-";
                    } else {
                        document.getElementById("rate5").innerHTML= " ";
                    }
                }
            });
        }

        function calculateTotal() {
            totalPrice = getDrug1Price() + getDrug2Price() + getDrug3Price() + getDrug4Price() + getDrug5Price();
            document.getElementById('hiddenTotalPrice').value = totalPrice;
            document.getElementById("total_price").innerHTML= totalPrice + "₹";
        }
    </script>

    <script type="text/javascript">
    window.setTimeout(function() {
        $("#fade").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 2000);
    </script>

    <script>

    var myData=[<?php
    $mysqli = new mysqli("localhost", "admin2", "admin2", "dbms_pharmacy");

    /* Check the connection. */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $data=mysqli_query($mysqli,"SELECT  DATE(timestamp) AS f_name, COUNT(transaction_id) AS f_data FROM _transaction GROUP BY DATE(timestamp) ORDER BY f_name DESC LIMIT 7");
    while($info=mysqli_fetch_array($data))
        echo $info['f_data'].','; /* We use the concatenation operator '.' to add comma delimiters after each data value. */
    ?>];
    var myLabels=[<?php
    $mysqli = new mysqli("localhost", "admin2", "admin2", "dbms_pharmacy");

    /* Check the connection. */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $data=mysqli_query($mysqli,"SELECT  DATE(timestamp) AS f_name, COUNT(transaction_id) AS f_data FROM _transaction GROUP BY DATE(timestamp) ORDER BY f_name DESC LIMIT 7");
    while($info=mysqli_fetch_array($data))
        echo '"'.$info['f_name'].'",'; /* The concatenation operator '.' is used here to create string values from our database names. */
    ?>];

    zingchart.render({
        id:"chartDiv",
        width:"100%",
        height:539,
        data:{
            "type": "line",
            "plot":{
            "animation":{
                "effect":"ANIMATION_FADE_IN"
            },
            "aspect":"spline"
            },
            "scale-x":{
                "labels":myLabels
            },
            "series":[
                {
                    "values":myData
                }
            ]
        }
    });
    </script>

</body>

</html>
