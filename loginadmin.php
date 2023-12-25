<?php
session_start();
require 'constants/db_config.php'; 

// check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    // connect to the database
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "job_portal";
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

?>

<?php
if (isset($_POST["btn-login"])) {
    $email = $_POST["txt_uname_email"];
    $pass = $_POST["txt_password"];

    $sql = mysqli_query($conn, "SELECT * FROM adminlogin WHERE username='$email' AND  password='$pass'");
    if (mysqli_num_rows($sql)) {
        while ($row = mysqli_fetch_array($sql)) {
            $name = $row["name"];
           
            session_start();
            $_SESSION["name"] = $name;
            
            $_SESSION["email"] = $email;
        }
        header("location:admin.php");
    } else {
        //$error="";
        echo '<script>alert("plz inter valid password");</script>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="signupFrm">
        <form class="form" method="post" id="login-form">
            <h1 class="title">Admin Login</h1>

            <div class="inputContainer">
                <input type="text" name="txt_uname_email" class="input" placeholder="a">
                <label for="" class="label">Email</label>
            </div>

            <div class="inputContainer">
                <input type="text" name="txt_password" class="input" placeholder="a">
                <label for="" class="label">Password</label>
            </div>

            <input type="submit" class="submitBtn" name="btn-login" value="Login">
            </input>

        </form>
    </div>
</body>

</html>


<?php
// display the error message if there is one
if (isset($error)) {
    echo $error;
}
?>