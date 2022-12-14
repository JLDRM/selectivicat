<?php
// Declarem variables de connexió
$host = 'remotemysql.com';
$user = 'jX1XcN7rHJ';
$pass = 'heD060vRVV';
$db = 'jX1XcN7rHJ';
 
// Establim la connexió i la comprovem
$con = new mysqli($host,$user,$pass,$db);
if(!$con){
    echo "No s'ha pogut connectar a la base de dades";
}
// Declarem variables que venen del form
$username = $_POST['Username'] ;
$email = $_POST['Email'] ;
$pass = $_POST['Password'] ;

// Funció insertar dades
if (isset($_POST['submit'])) {
    $sql= "SELECT * FROM userss WHERE Email = '$email'";
    $resultado = mysqli_query($con,$sql);
 
    if (mysqli_num_rows($resultado)>0)   {
        include("login.html");
        echo "<div class='alert alert-danger'><strong>Error!</strong> Ja tens una compta creada.</div>";
    } else {
        $insertvalue = "INSERT INTO `userss` (`Username`, `Email`, `Password`) VALUES ('$username','$email','$pass')";
        $retryvalue = mysqli_query($con, $insertvalue);
        
        if (!$resultado) {
            die('Error: ' . mysqli_error());
        }

        include("login.html");
        echo "<div class='alert alert-success'> S'ha creat la compta!</div>";
    }
}
?>

<style>
    .alert{
        margin-left: 8.2%;
        margin-right: 8.2%;
    }
</style>
