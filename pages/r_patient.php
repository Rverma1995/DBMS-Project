<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Records | PDMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../dist/css/select.dataTables.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

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
                        <h1 class="page-header">Records</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-warning alert-dismissable hidden" id="del_alert_succ"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Record Deleted!
                        </div>
                        <div class="alert alert-danger alert-dismissable hidden" id="del_alert_fail"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Unable to delete Record!
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>Patient(s)</strong>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="example">
                                        <thead>
                                            <tr>
                                                <th><button type="button" class="btn btn-outline btn-danger btn-xs" id="deleteButton">Delete</button></th>
                                                <th>Patient ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Phone No.</th>
                                                <th>Gender</th>
                                                <th>timestamp</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th>patient_id</th>
                                                <th>first_name</th>
                                                <th>last_name</th>
                                                <th>phone_no</th>
                                                <th>gender</th>
                                                <th>timestamp</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>Update Record</strong>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php
                                            //Form submitted
                                            if(isset($_POST['submit'])) {
                                                $link = mysqli_connect("sql6.freemysqlhosting.net:3306", "sql6116110", "z4yM9J2x3Y", "sql6116110");

                                                //Check connection
                                                if($link === false){
                                                    $cerror = mysqli_connect_error();
                                                    echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                                            Could not connect to database! $cerror
                                                          </div>";
                                                }

                                                // Escape user inputs for security
                                                $patient_id = mysqli_real_escape_string($link, $_POST['patient_id']);
                                                $first_name = mysqli_real_escape_string($link, $_POST['first_name']);
                                                $last_name = mysqli_real_escape_string($link, $_POST['last_name']);
                                                $phone_no = mysqli_real_escape_string($link, $_POST['phone_no']);
                                                $gender = mysqli_real_escape_string($link, $_POST['gender']);

                                                //attempt insert query execution
                                                $sql = "UPDATE patient SET first_name = '$first_name', last_name = '$last_name', phone_no = '$phone_no', gender = '$gender' WHERE patient_id = $patient_id";
                                                if(mysqli_query($link, $sql)){
                                                    echo "<div class=\"alert alert-success alert-dismissable\" id=\"fade\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                                            Record Updated!
                                                          </div>";
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
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Select Patient ID</label>
                                                    <select class="form-control" name="patient_id" required="">
                                                        <?php
                                                            $mysqlserver="sql6.freemysqlhosting.net:3306";
                                                            $mysqlusername="sql6116110";
                                                            $mysqlpassword="z4yM9J2x3Y";
                                                            $link=mysql_connect($mysqlserver, $mysqlusername, $mysqlpassword) or die ("Error connecting to mysql server: ".mysql_error());

                                                            $dbname = 'sql6116110';
                                                            mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());

                                                            $cdquery="SELECT patient_id FROM patient";
                                                            $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());

                                                            while ($cdrow=mysql_fetch_array($cdresult)) {
                                                            $cdTitle=$cdrow["patient_id"];
                                                                echo "<option>
                                                                    $cdTitle
                                                                </option>";
                                                            }

                                                            mysql_close($link);
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Enter First Name</label>
                                                    <input class="form-control" type="text" name="first_name" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Enter Last Name</label>
                                                    <input class="form-control" type="text" name="last_name" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Enter Phone No.</label>
                                                    <input class="form-control" type="number" name="phone_no" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Enter Gender</label>
                                                    <select class="form-control" name="gender" required="">
                                                        <option value="M">Male</option>
                                                        <option value="F">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <button type="submit" name="submit" value="Submit" class="btn btn-default pull-right" style="margin-top:25px;">Update Record</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
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

    <!-- DataTables JavaScript -->
    <script src="../components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="../dist/js/dataTables.select.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                "columnDefs": [ {
                    "orderable": false,
                    "searchable": false,
                    "className": 'select-checkbox',
                    "width": "1px",
                    "targets":   0
                }, {
                    "width": "10%",
                    "targets": 1
                } ],
                "select": {
                    "style":    'single',
                    "selector": 'td:first-child'
                },
                "order": [[ 1, 'asc' ]],
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "sAjaxSource": "../scripts/db_patient.php"
            } );
        } );
    </script>

    <script>
    $(document).ready(function() {
        // $('#del_alert_succ').hide();
        // $('#del_alert_fail').hide();
        var table = $('#example').DataTable();

        $('#deleteButton').click( function () {
            var data = table.rows( { selected: true } ).data();
            var patient_id = (data[0][1]);

            console.log(patient_id);
            $.ajax({
                data: 'data=' + patient_id,
                url: '../scripts/del_patient.php',
                method: 'POST',
                success: function(msg) {
                    if(msg == "succ") {
                        table.ajax.reload();
                        $('#del_alert_succ').removeClass('hidden');
                        window.setTimeout(function() {
                            $("#del_alert_succ").fadeTo(500, 0).slideUp(500, function(){
                                $('#del_alert_succ').addClass('hidden');
                            });
                        }, 2000);
                        window.setTimeout(function() {
                            $("#del_alert_succ").fadeTo(500, 100).slideDown(500, function(){
                                $('#del_alert_succ').addClass('hidden');
                            });
                        }, 2000);
                    } else {
                        $('#del_alert_fail').removeClass('hidden');
                        window.setTimeout(function() {
                            $("#del_alert_fail").fadeTo(500, 0).slideUp(500, function(){
                                $('#del_alert_fail').addClass('hidden');
                            });
                        }, 2000);
                        window.setTimeout(function() {
                            $("#del_alert_fail").fadeTo(500, 100).slideDown(500, function(){
                                $('#del_alert_fail').addClass('hidden');
                            });
                        }, 2000);
                    }
                }
            });
        } );
    } );
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
