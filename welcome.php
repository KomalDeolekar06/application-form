<?php
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "recknot_apply";

    $con = mysqli_connect($server, $username, $password, $dbname);
    if (!$con) {
        die("Connection to this database failed : " . mysqli_connect_error());
    }
    //echo "Connected successfully to database.";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $college = $_POST['college'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $laptop = $_POST['laptop'];
    $internet = $_POST['internet'];
    $avialable = $_POST['avialable'];
    $reason = $_POST['reason'];
    $id_card = $_POST['id_card'];
    $cv = $_POST['cv'];


    $sql = "INSERT INTO `apply`(`Name`, `Email`, `Phone`, `Gender`, `Age`, `College`, `Course`, `Completion_year`, `Laptop`, `Internet`, `Availability`, `Reason`, `ID_card`, `CV`, `Date`) VALUES ('$name','$email','$phone','$gender','$age','$college','$course','$year','$laptop','$internet','$avialable','$reason','$id_card','$cv',current_timestamp());";

    if ($con->query($sql) == true) {
        //echo "Successfully inserted :";
        $insert = true;
    } else {
        echo "Error : $sql <br> $con->error ";
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
    <title>Welcome page</title>
    <link rel="stylesheet" href="block.css">
</head>
<body>

  
    <div class="block"> 
    <?php 
    if($insert==true){
    echo"    
       <h1>Recknot Solutions Private Limited</h1>
       <h5>Dear Candidate,<br>Your response has been recoreded.<br></h5>
       <h3>You will receive the offer letter shortly.</h3>
       <h2>Thanks for applying , looking forward to communicate with you...</h2>";
    }
    ?>
    </div>
   
</body>
</html>