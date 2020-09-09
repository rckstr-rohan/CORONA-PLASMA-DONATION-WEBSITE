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

if(isset($_POST['nsubmit']))
{

$firstname=$_POST['first_name'];
$lasstname=$_POST['last_name'];
$email=$_POST['email'];
$area_code=$_POST['area_code'];
$phone=$_POST['phone'];
$blood=$_POST['blood'];
$no_of_days=$_POST['no_of_days'];




$userselect="select * from donor where firstname='$firstname'";
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


    
    $insert="INSERT INTO donor (firstname, lastname, email, areacode, phone, bloodgr, recoveringday) VALUES ('$firstname', '$lastname', '$email', '$area_code', '$phone', '$blood', '$no_of_days')";

$insertquery=mysqli_query($conn, $insert);
if($insertquery)
{
    echo "registration successfuly";
}
else
{
    echo "Registration failed";
    echo "$firstname";
}
}



mysqli_close($conn);
?>