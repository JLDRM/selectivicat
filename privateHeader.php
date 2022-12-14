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
    <div class="container-fluid hello">
        <div class="row">
            <div class="col">
                <button class="hello py-4 " onclick="location.href='private.php'">
                    <img src="img/selectivicat_blanc.png" alt="logo" height="55" class="img" >
                </button>
            </div>
            <div class=" hello col-5 mr-5 my-1">
                <div class="row px-4 ml-3">
                    <a tabindex="0" type="button" class="btn text-white my-4 mx-3 pt-2 col" data-bs-toggle="popover" data-bs-trigger="focus" title="<p class='holi'>Recursos</p>" data-bs-placement="bottom" data-bs-html="true" data-bs-content="<a href='https://examenselectivitat.cat/' class='hola'><h6>Examens selectivitat</h6></a><a href='cerrarSession.php' class='hola'><h6>Calcular nota de tall</h6></a><a href='https://calendar.google.com/calendar/u/0?cid=c2VsZWN0aXZpY2F0MUBnbWFpbC5jb20' class='hola'><h6>Dates importants</h6></a>">
                        Altres
                    </a>
                    <a href = "project.php" type="button" class="btn text-white mx-3 my-4 pt-2 col">
                        Projecte
                    </a>
                    <button type="button" class="btn col-md-auto mx-2 my-3" data-bs-toggle="popover" tabindex="0" data-bs-trigger="focus" title="<p class='holi'>Opcions</p>" data-bs-placement="bottom" data-bs-html="true" data-bs-content="<a href='stopSession.php' class='hola'><h6>Tancar la sessió</h6></a><a href=info.php' class='hola'><h6>Informació de l'usuari</h6></a>">
                        <img src="img/userimg.png" alt="User image" width="50" height="50">
                    </button>
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
        .img{

        }

        .hola{
            color: grey;
            text-decoration:none;
            text-align:center;
        }
        .btn {
            background: #336699;
            border-color: #336699;
            color: #fff;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19)
        }

        .hello{
            background: #202060;
            border:none
        }

        .holi{
            color: black;
            text-decoration:none;
            text-align:center;
        }
    </style>
</body>
</html>
