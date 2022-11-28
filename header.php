<?php 

session_start();

$Sessio = $_SESSION['Emailinici'];

if($Sessio == null || $Sessio==""){
    header("location: login.html");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="body">
    <div class="hello container-fluid p-0">
        <div class="d-flex flex-row-reverse">
            <div class="px-5 mx-4 my-2">
                <button type="button" class="sisi btn" data-bs-toggle="popover" tabindex="0" data-bs-trigger="focus" title="<p class='holi'>Opcions</p>" data-bs-placement="bottom" data-bs-html="true" data-bs-content="<a href='cerrarSession.php' class='hola'><h6>Tancar la sessió</h6></a><a href=info.php' class='hola'><h6>Informació de l'usuari</h6></a>">
                    <img src="img/userimg.png" alt="User image" width="50" height="50">
                </button>
            </div>
            <div class="mb-3">
                <div class="container p-1 mt-3">
                    <button type="button" class="btn mx-2 text-white" data-bs-toggle="popover" data-bs-trigger="focus" title="<p class='holi'>Modalitat</p>" data-bs-placement="bottom" data-bs-html="true" data-bs-content="<a href='cerrarSession.php' class='hola'><h6>Científic</h6></a><a href='cerrarSession.php' class='hola'><h6>Social</h6></a><a href='cerrarSession.php' class='hola'><h6>Humanístic</h6></a><a href='cerrarSession.php' class='hola'><h6>Tecnològic</h6></a><a href='cerrarSession.php' class='hola'><h6>Artístic</h6></a>">
                        Apunts
                    </button>
                </div>
            </div>
            <div class="mb-3 mx-3">
                <div class="container p-1 mt-3">
                    <a tabindex="0" type="button" class="btn mx-3 text-white" data-bs-toggle="popover" data-bs-trigger="focus" title="<p class='holi'>Recursos</p>" data-bs-placement="bottom" data-bs-html="true" data-bs-content="<a href='cerrarSession.php' class='hola'><h6>Examens selectivitat</h6></a><a href='cerrarSession.php' class='hola'><h6>Calcular nota de tall</h6></a><a href='cerrarSession.php' class='hola'><h6>Dates importants</h6></a>">
                        Altres recursos
                    </a>
                </div>
            </div>
            <div class="mb-2 mx-2">
                <div class="container p-1 mt-3">
                    <a href = "faqs.php" type="button" class="btn text-white">
                        FAQs
                    </a>
                </div>
            </div>
        </div>
    </div>
    

    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>

    <style>
        .hola{
            color: grey;
            text-decoration:none;
            text-align:center;
        }

        .hello{
            background: #2d293a
        }

        .holi{
            color: black;
            text-decoration:none;
            text-align:center;
        }

        .btn{
        }
    </style>
</body>
</html>
