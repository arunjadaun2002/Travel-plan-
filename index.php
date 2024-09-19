<?php

$insert=false;

if(isset($_POST['name'])){


$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);

if(!$con){
    die("connection to this database failed due to  ".mysqli_connect_error());
}
//echo "connection build successfully ";
$name = isset($_POST['name']) ? $_POST['name'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$reg = isset($_POST['reg']) ? $_POST['reg'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$adhar = isset($_POST['adhar']) ? $_POST['adhar'] : '';
$desc = isset($_POST['descac']) ? $_POST['descac'] : ''; // Change from 'desc' to 'descac'


$sql="INSERT INTO `travel`.`trip` (`NAME`, `AGE`, `REG`, `PHONE`, `ADHAR`, `QUERY`, `DATE`) VALUES ('$name', '$age', '$reg', '$phone', '$adhar', '$desc', current_timestamp());";

//echo $sql;

if($con->query($sql)==true){
 //   echo "successfully inserted";
     $inserst=true;

}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();




}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Plan Details</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofadi+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
      <img class="bg" src="bg.png" alt="trip plan">
    <div class="container">
        <h1>Welcome to Travel form of Lovely Professional University </h1>
        <p>Submit All The  Fields Given in the form</p>

        <?php

        if($insert==true){
            echo "<p class='sumbitmsg'>Thanks for Submitting the Form See you On To The Trip </p>";
        }

        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name"placeholder="Enter your name">
            <input type="text" name="age" id="age"placeholder="Enter your age">


            <input type="phone" name="reg" id="reg"placeholder="Enter your Registration number">
            <input type="phone" name="phone" id="phone"placeholder="Enter your phone number">
            <input type="phone" name="adhar" id="adhar" placeholder="Enter your Adhar number">

            <textarea name="descac" id="desc" cols="5" rows="10" placeholder="Any Query Ask?"></textarea>
             
            <button class="reset">Reset</button>
            <button class="btn">Submit</button>
           


        </form>
    </div>
    <script src="app.js"></script>
    
</body>
</html>