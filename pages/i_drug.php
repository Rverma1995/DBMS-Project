<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Insert | PDMS</title>

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
                            <a href="#"><i class="fa fa-plus-circle fa-fw"></i> Insert<span class="fa arrow"></span></a>
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
                        <h1 class="page-header">Insert</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>Drug</strong>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <?php
                                            //Form submitted
                                            if(isset($_POST['submit'])) {
                                                $link = mysqli_connect("localhost", "admin2", "admin2", "dbms_pharmacy");

                                                // Check connection
                                                if($link === false){
                                                    $cerror = mysqli_connect_error();
                                                    echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                                            Could not connect to database! $cerror
                                                          </div>";
                                                    die();
                                                }

                                                // Escape user inputs for security
                                                $trade_name = mysqli_real_escape_string($link, $_POST['trade_name']);
                                                $stock = mysqli_real_escape_string($link, $_POST['stock']);
                                                $drug_manufacturer_id = mysqli_real_escape_string($link, $_POST['drug_manufacturer_id']);
                                                $price = mysqli_real_escape_string($link, $_POST['price']);

                                                // attempt insert query execution
                                                $sql = "INSERT INTO drug (trade_name, stock, price) VALUES ('$trade_name', '$stock', '$price')";
                                                if(mysqli_query($link, $sql)){
                                                    $db = mysql_connect("localhost", "admin2", "admin2");
                                                    mysql_select_db("dbms_pharmacy", $db);
                                                    $result = mysql_query("SELECT drug_id FROM drug WHERE trade_name = '$trade_name'");
                                                    $data = mysql_fetch_row($result);

                                                    $drug_id = $data[0];

                                                    $sql = "INSERT INTO _makes (drug_id, drug_manufacturer_id) VALUES ('$drug_id', '$drug_manufacturer_id')";
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

                                        <form role="form" method="post" action="<?=$_SERVER['PHP_SELF']?>">
                                            <div class="form-group">
                                                <label>Enter Name</label>
                                                <input class="form-control" type="text" name="trade_name" required="">
                                                <div class="tooltip-demo">
                                                    <p class="help-block" style="cursor: default;"><a data-toggle="tooltip" data-placement="top" title="" data-original-title="table name" style="color:#737373;">drug</a> → <a data-toggle="tooltip" data-placement="top" title="" data-original-title="column name" style="color:#737373;">trade_name</a></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Enter Stock Amount</label>
                                                <input class="form-control" type="number" name="stock" required="">
                                                <div class="tooltip-demo">
                                                    <p class="help-block" style="cursor: default;"><a data-toggle="tooltip" data-placement="top" title="" data-original-title="table name" style="color:#737373;">drug</a> → <a data-toggle="tooltip" data-placement="top" title="" data-original-title="column name" style="color:#737373;">stock</a></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Select Drug Manufacturer</label>
                                                <select class="form-control" name="drug_manufacturer_id">
                                                    <?php

                                                        $mysqlserver="localhost";
                                                        $mysqlusername="admin2";
                                                        $mysqlpassword="admin2";
                                                        $link=mysql_connect(localhost, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

                                                        $dbname = 'dbms_pharmacy';
                                                        mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

                                                        $cdquery="SELECT name, drug_manufacturer_id FROM drug_manufacturer";
                                                        $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

                                                        while ($cdrow=mysql_fetch_array($cdresult)) {
                                                        $cdTitle=$cdrow["name"];
                                                        $cdReference=$cdrow["drug_manufacturer_id"];
                                                            echo "<option value=\"$cdReference\">
                                                                $cdTitle
                                                            </option>";
                                                        }

                                                    ?>
                                                </select>
                                                <div class="tooltip-demo">
                                                    <p class="help-block" style="cursor: default;"><a data-toggle="tooltip" data-placement="top" title="" data-original-title="table name" style="color:#737373;">_makes</a> → <a data-toggle="tooltip" data-placement="top" title="" data-original-title="column name" style="color:#737373;">drug_manufacturer_id</a> | <a data-toggle="tooltip" data-placement="top" title="" data-original-title="column name" style="color:#737373;">name</a> ← <a data-toggle="tooltip" data-placement="top" title="" data-original-title="table name" style="color:#737373;">drug_manufacturer</a></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Enter Price per unit</label>
                                                <input class="form-control" type="number" name="price" required="">
                                                <div class="tooltip-demo">
                                                    <p class="help-block" style="cursor: default;"><a data-toggle="tooltip" data-placement="top" title="" data-original-title="table name" style="color:#737373;">drug</a> → <a data-toggle="tooltip" data-placement="top" title="" data-original-title="column name" style="color:#737373;">price</a></p>
                                                </div>
                                            </div>
                                            <button type="submit" name="submit" value="Submit" class="btn btn-default pull-right">Insert Record</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
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

    <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })
    </script>

    <script type="text/javascript">
    window.setTimeout(function() {
        $("#fade").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 2000);
    </script>

</body>

</html>
