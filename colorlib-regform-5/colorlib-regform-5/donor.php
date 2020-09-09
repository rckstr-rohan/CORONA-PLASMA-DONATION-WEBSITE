<?php
session_start();
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>UNITE</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">DONOR Registation Form</h2>
                </div>
                <div class="card-body">
                    <form  method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="area_code">
                                            <label class="label--desc">Area Code</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="phone">
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                           <div class="form-row">
                            <div class="name">State</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="state">
                                </div>
                            </div>
                        </div>
                     
                        <div class="form-row">
                            <div class="name">City</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="city">
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="form-row">
                            <div class="name">Blood Group</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="blood">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">no. of days after recovering covid-19</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="no_of_days">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="nsubmit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->






<?php



$servername = "localhost";
$username = "id10219500_first";
$password = "LODANIYATI@DREAM";
$dbname = "id10219500_registation";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo 'con sucessful';
}



if(isset($_POST['nsubmit']))
{

$firstname=$_POST['first_name'];
$lasstname=$_POST['last_name'];
$email=$_POST['email'];
$area_code=$_POST['area_code'];
$phone=$_POST['phone'];
$state=$_POST['state'];
$city=$_POST['city'];
$blood=$_POST['blood'];
$no_of_days=$_POST['no_of_days'];




$userselect="select * from donor where enail='$email' or phone='$phone'";
$uquery=mysqli_query($conn, $userselect);
$ucount=mysqli_num_rows($uquery);
if($ucount>0)
{
    ?>
    <script>
    alert ("this username already exist");
    </script>
    <?php
}
else


    
    $insert="INSERT INTO donor(firstname, lestname, enail, areacode, phone,state, city, bloodgr, recoveringday) VALUES ('$firstname', '$lasstname', '$email', '$area_code', '$phone', '$state', '$city', '$blood', '$no_of_days')";

$insertquery=mysqli_query($conn, $insert);
if($insertquery)
{
        ?>
    <script>
    alert ("Registration Sucessfully");
    </script>
    <?php
      $_SESSION['firstname']=$firstname;
$_SESSION['blood']=$blood;
    
}
else
{
    echo "Registration failed";
}
}




?>

