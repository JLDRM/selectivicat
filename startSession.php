
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

// Funció iniciar sessio
if (isset($_POST['submitinici'])) {

    $error=true;
    // declarem les dades que venen del formulari pel mètode POST
    $iniciusername = $_POST['Usernameinici'] ;
    $iniciemail = $_POST['Emailinici'] ;
    $inicipass = $_POST['Passwordinici'] ;


    $sql= "SELECT * FROM userss WHERE Email = '$iniciemail' AND Password = '$inicipass'";
    $resultado = mysqli_query($con,$sql);
 
    if (mysqli_num_rows($resultado)>0){
        //Confirmación mensaje Ok 
        session_start();

        $_SESSION['Emailinici'] = $iniciemail;

        header("location: private.php");
    } else {
        include("login.html");
        if($error){
            echo "<div class='alert alert-danger'><strong>Error!</strong> Usuari o contrasenya incorrectes.</div>";
        }
    }
}
?>

<style>
    .alert{
        margin-left: 8.2%;
        margin-right: 8.2%;
    }
</style>
