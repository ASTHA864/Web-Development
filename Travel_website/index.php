<?php
 $insert=false;
if(isset($POST[$name]))
{

$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if(!$con)
{
    die("Connection to this database failed due to".mysqli_connect_error());
}
echo "Successfully connected to database";
$name=$‌‌POST['name'];
$age=$‌‌POST['age'];
$Email=$‌‌POST['Email'];
$phonenumber=$‌POST['phonenumber'];
$Description=$‌‌POST['Description'];


$phone;
$sql= " INSERT INTO `trip`.`trip` (`Name`, `Age`, `Email`, `Phone Number`, `Description`, `Submit`) VALUES ( '$name', '$age', '$email', '$phonenumber', '$Description', current_timestamp());";
// echo $sql;

if($con->query($sql)== true)
{
    // echo "Successfully inserted";
    $insert=true;
}
else
{
    echo "ERROR $sql <br> $con-> error";
}

$con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <link rel="stylesheet" href="index.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sofadi+One&family=Sriracha&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Varela+Round&display=swap');
        </style>
</head>
<body>
    <img class="bg" src="bg2.jpg" alt="Shri Ram Institute of Technology">
    <div class="container">
       <h2>Welcome To Travel Form</h2>
       <p>Enter your details and submit this form to confirm your participation in the trip.</p>
       <?php 
       if($insert==true)
       
       echo"
     <p class='review'>Thanks for Submitting your form.</p>"
       
     ?>
       <form action="Travelsubmition.php" method="post">
     <input type="text" name="name" id="name" placeholder="Enter your name">

     <input type="number" name="age" id="age" placeholder="Enter your age">

     <input type="email" name="mail" id="mail" placeholder="Enter your e-mail">

     <input type="number" name="num" id="num" placeholder="Enter your phone number">
      
   <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter any other information here."></textarea>
 <button class="btn">Submit</button>
 
       </form>
    </div>

   
    <script src="Travelform.js"></script>
</body>
</html>