<?php
// Declarem variables de connexió
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db';
 // Establim la connexió i la comprovem
$con = new mysqli($host,$user,$pass,$db);
if(!$con){
    echo 'to mal';
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
        echo 'Ja tens una compta creada';
    } else {
        $insertvalue = "INSERT INTO `userss` (`Username`, `Email`, `Password`) VALUES ('$username','$email','$pass')";
        $retryvalue = mysqli_query($con, $insertvalue);
        
        if (!$resultado) {
            die('Error: ' . mysqli_error());
        }
 
        echo 'Acabes de crear la compta';
    }
}


// Funció eliminar dades
if (isset($_POST['delsubmit'])) {
    $stmt = "DELETE FROM `users` WHERE (`Username`, `Email`, `Password`) = ('$username','$email','$pass')";
    $insert = mysqli_query($con, $stmt);

    if (!$insert) {
        echo 'problema en eliminació de dades' ;
    }
    else{
        echo 'dades eliminades de la base de dades' ;
    }
}
?>