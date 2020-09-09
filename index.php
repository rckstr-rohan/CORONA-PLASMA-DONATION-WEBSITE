<?php
session_start();
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
?>




<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
<meta charset="UFT-8">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        


<meta name="viewport" content="width=device-width initial-scale=1.0">
<title>UNITE</title>


<style>

</style>



</head>
<body>
    
        
<nav class="navbar navbar-expand-md bg-dark navbar-dark">

 
  <a class="navbar-brand font-weight-bold" href="">UNITE</a>

 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">

 
    <span class="navbar-toggler-icon"></span>
 
 
  </button>

 
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
 
 
    <ul class="navbar-nav text-center ml-auto">
 
 
      <li class="nav-item">

 
        <a class="nav-link text-light" href="#">Blood Donation</a>

 
      </li>
 
 
      <li class="nav-item">
 
 
        <a class="nav-link text-light" href="#">You can HELP Us</a>
 
 
      </li>
 
 
      <li class="nav-item">

        <a class="nav-link text-light" href="#">NEWS & EVENTS</a>

 
      </li>  
    </ul>
  </div>  
</nav>
    

<marquee scrollamount='10' ><h3>Helping hands are better then praying lips</h3></marquee>    
<?php
echo $_SESSION['firstname'];
?>


<div class='row'>
      <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
        <div class='card'>
            <div class='card-body' style="height:500px;">
            
            
            <h3>Information About Reciver</h3>
            
            
            
            <!--display-->


    
<?php
$selectquery="select * from reciver";
$displayquery=mysqli_query($conn, $selectquery);

while($result=mysqli_fetch_array($displayquery))
{

?>

 <table class="table table-hover table-responsive">
   <tbody>
      <tr>
        <td>First Name: <?php echo $result["firstname"]; ?></td>
        <td>Last Name: <?php echo $result["lestname"]; ?></td>
        <td>Email: <?php echo $result["enail"]; ?></td>
        <td>Areacode: <?php echo $result["areacode"]; ?></td>
        <td>Phone: <?php echo $result["phone"]; ?></td>
        <td>Blood Group: <?php echo $result["bloodgr"]; ?></td>
        <td>Age: <?php echo $result["age"]; ?></td>
      </tr>
     
    </tbody>
  </table>
<?php

}


?>

            
</div>
</div>
            
            
            
        
        
    </div>
    
    <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
        <div class='card'>
            <div class='card-body'style="height:500px;" ><h3 >Search donor</h3> 
            <form method='POST'>
            <input type=text name='searcha' class="form-control" placeholder='search here...'>
            <button class='btn btn-primary' name='search'>Blood gd</button>
            <button class='btn btn-primary' name='recovery'>Recovering</button>
            <button class='btn btn-primary' name='state'>State</button>
            <button class='btn btn-primary' name='city'>City</button>
            </form>
            

<!--blood gd-->           
<?php
if(isset($_POST["search"]))
{
 $input=$_POST['searcha'];
$res=mysqli_query($conn, "select * from donor where bloodgr='$input'");
while($row=mysqli_fetch_array($res))
{
?>
  <table class="table table-hover table-responsive">
   <tbody>
      <tr>
        <td>First Name: <?php echo $row["firstname"]; ?></td>
        <td>Last Name: <?php echo $row["lestname"]; ?></td>
        <td>Email: <?php echo $row["enail"]; ?></td>
        <td>Areacode: <?php echo $row["areacode"]; ?></td>
        <td>Phone: <?php echo $row["phone"]; ?></td>
        <td>Blood Group: <?php echo $row["bloodgr"]; ?></td>
        <td>Recovering Day: <?php echo $row["recoveringday"]; ?></td>
      </tr>
     
    </tbody>
  </table>
<?php
}
}
?>
       
 
<!--blood gd-->           
<?php
if(isset($_POST["recovery"]))
{
 $input=$_POST['searcha'];
$res=mysqli_query($conn, "select * from donor where recoveringday='$input'");
while($row=mysqli_fetch_array($res))
{
?>
  <table class="table table-hover table-responsive">
   <tbody>
      <tr>
        <td>First Name: <?php echo $row["firstname"]; ?></td>
        <td>Last Name: <?php echo $row["lestname"]; ?></td>
        <td>Email: <?php echo $row["enail"]; ?></td>
        <td>Areacode: <?php echo $row["areacode"]; ?></td>
        <td>Phone: <?php echo $row["phone"]; ?></td>
        <td>Blood Group: <?php echo $row["bloodgr"]; ?></td>
        <td>Recovering Day: <?php echo $row["recoveringday"]; ?></td>
      </tr>
     
    </tbody>
  </table>
<?php
}
}
?>
         
         
 
<!--state-->           
<?php
if(isset($_POST["state"]))
{
 $input=$_POST['searcha'];
$res=mysqli_query($conn, "select * from donor where state='$input'");
while($row=mysqli_fetch_array($res))
{
?>
  <table class="table table-hover table-responsive">
   <tbody>
      <tr>
        <td>First Name: <?php echo $row["firstname"]; ?></td>
        <td>Last Name: <?php echo $row["lestname"]; ?></td>
        <td>Email: <?php echo $row["enail"]; ?></td>
        <td>Areacode: <?php echo $row["areacode"]; ?></td>
        <td>Phone: <?php echo $row["phone"]; ?></td>
        <td>Blood Group: <?php echo $row["bloodgr"]; ?></td>
        <td>Recovering Day: <?php echo $row["recoveringday"]; ?></td>
      </tr>
     
    </tbody>
  </table>
<?php
}
}
?>
       
       
 
<!--city-->           
<?php
if(isset($_POST["city"]))
{
 $input=$_POST['searcha'];
$res=mysqli_query($conn, "select * from donor where city='$input'");
while($row=mysqli_fetch_array($res))
{
?>
  <table class="table table-hover table-responsive">
   <tbody>
      <tr>
        <td>First Name: <?php echo $row["firstname"]; ?></td>
        <td>Last Name: <?php echo $row["lestname"]; ?></td>
        <td>Email: <?php echo $row["enail"]; ?></td>
        <td>Areacode: <?php echo $row["areacode"]; ?></td>
        <td>Phone: <?php echo $row["phone"]; ?></td>
        <td>Blood Group: <?php echo $row["bloodgr"]; ?></td>
        <td>Recovering Day: <?php echo $row["recoveringday"]; ?></td>
      </tr>
     
    </tbody>
  </table>
<?php
}
}
?>
                      
       
       
            
            
            </div>
        </div>
    </div>
</div>  
 
 
   
<div class='row'>
    <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
        <div class='card'>
            <div class='card-body'>
                <h4>Blood donor</h4>
                <a type="button" class="btn btn-primary" href='https://bazzarshop.000webhostapp.com/ROHAN/colorlib-regform-5/colorlib-regform-5/donor.php'>Reg. Now </a>
            </div>
            <div class='card-body'>
                 <h4>Blood request</h4>
                <a href='https://bazzarshop.000webhostapp.com/ROHAN/colorlib-regform-5/colorlib-regform-5/receiver.php' type="button" class="btn btn-primary">Reg. Now</a>
            </div>            
        </div>
    </div>
    

</div>   
  
  



    
</body>
</html>
