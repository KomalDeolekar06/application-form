<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>application page for internship</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg1.jpg" alt="internship_bg">
    <div class="container">
        <h1><b>Recknot Solutions Private Limited</b></h1>
    </div>
    <div class="application">
        <h3>Application form for the internship and training program.</h3><br>
        <form action="welcome.php" method="post">
            <p>Full Name : </p><input  type="text" name="name" id="name" placeholder="Enter your name" required>
            <p>Email : </p><input type="email" name="email" id="email" placeholder="Enter your email" required>
            <p>Phone No. : </p><input type="phone" name="phone" id="phone" placeholder="Enter your Phone no." required>
            <p>Gender : </p><input type="text" name="gender" id="gender" placeholder="Enter your gender" required>
            <p>Age : </p><input type="number" name="age" id="age" placeholder="Enter your age" required>
            <p>Name of your college : </p><input type="text" name="college" id="college" placeholder="Enter your college name" required>
            <p>Course(Detail of degree) : </p><input type="text" name="course" id="course" placeholder="Enter your Degree and Field , Ex.Diploma in Computer Engineering " required>
            <p>Year of completion : </p><input type="number" name="year" id="year" placeholder="Enter your year of completion" required>
            <p>Do you have your own laptop?</p><br>
            <input type="radio" name="laptop" id="laptop" value="yes" required>Yes
            <input type="radio" name="laptop" id="laptop" value="no" required>No<br>
            <p>Do you have broadband internet connection?</p><br>
            <input type="radio" name="internet" id="internet"value="yes" required>Yes
            <input type="radio" name="internet" id="internet"value="no" required>No<br>
            <p>Are you available for 5 months?</p><br>
            <input type="radio" name="avialable" id="avialable"value="yes" required>Yes
            <input type="radio" name="avialable" id="avialable"value="no" required>No<br>
            <p>Reason for interest in this internship : </p><textarea name="reason"></textarea>
            <p>Copy of college ID : </p><input type="file" name="id_card" class="file" required>
            <p>Upload your CV : </p><input type="file" name="cv" class="file" required>
            <button class="btn">Apply</button>
        </form>
            
        
    </div>
    
</body>
</html>