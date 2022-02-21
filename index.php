<?php
$insert=false;
if(isset ($_POST['name'])){
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if(!$con){
die("con".mysqli_connect_error());}
$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];
$sql="INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
VALUES ('$name','$age', '$gender', '$email', '$phone', '$desc',current_timestamp());";

if($con->query($sql)== true)
{
    $insert=true;
}
else{
    echo"ERROR:$sql <br> $conn->error";
}
$con->close();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>manali trip</title>
</head>
<body>
    <img src="https://explore-share.imgix.net/wp-content/uploads/2017/06/pexels-photo-792167.jpeg" alt="background pic" class="bg">
    <div class="container">
        <h1>TRIP TO MANALI</h1>
        <p>Enter your detail and submit the form to confirm </p>
        <?php
        if($insert==true){
        echo"<p class='submitMsg'>Thanks for Submitting the form.We are happy to see you joining us for the Manali trip</p>";
        }
        ?>
       <form action="index.php" method="post">
                <input type="text" name="name" id="name" placeholder="Enter your name" >
                <input type="" name="age" id="age" placeholder="Enter your Age" >
                <input type="text" name="gender" id="gender" placeholder="Enter your gender" >
                <input type="email" name="email" id="email" placeholder="Enter your email" >
                <input type="phone" name="phone" id="phone" placeholder="Enter your phone number" >
                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter extra information"></textarea>
                <button class="btn" >Submit</button>
        </form>
        </div>
</body>
</html>
