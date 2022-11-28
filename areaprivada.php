<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php include('header.php')?>
<?php include('enviarapunts.php')?>
<body class="bod">
    <div class="container-fluid p-0">
        <div class="d-flex my-2">
            <div class="flex-grow-1 my-3 px-3">
                <div class="jumbotron p-5">
                    <h1 class="display-4">Selectivicat</h1>
                    <p class="lead"><strong>Selecciona la matèria o modalitat i accediràs als apunts i els arxius relacionats disponibles. </strong></p>
                    <hr class="">
                    <p class="lead">Materies comunes </p>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p class="lead px-3">
                                    <a class="btn px-5" href="#" role="button">Català</a>
                                </p>
                            </div>
                            <div class="col">
                                <p class="lead px-3">
                                    <a class="btn px-5" href="#" role="button">Castellà</a>
                                </p>
                            </div>
                            <div class="col">
                                <p class="lead px-3">
                                    <a class="btn " href="#" role="button">Llengua extrangera</a>
                                </p>
                            </div>
                            <div class="col">
                                <p class="lead px-3">
                                    <a class="btn px-5" href="#" role="button">Història</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr class="p-0">
                    <p class="lead">Materies específiques </p>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p class="lead px-2">
                                    <a class="btn px-4" href="#" role="button">Científic</a>
                                </p>
                            </div>
                            <div class="col">
                                <p class="lead px-2">
                                    <a class="btn px-4" href="#" role="button">Tecnològic</a>
                                </p>
                            </div>
                            <div class="col">
                                <p class="lead px-4">
                                    <a class="btn px-4" href="#" role="button">Humanístic</a>
                                </p>
                            </div>
                            <div class="col">
                                <p class="lead px-4">
                                    <a class="btn px-4" href="#" role="button">Social</a>
                                </p>
                            </div>
                            <div class="col">
                                <p class="lead px-2">
                                    <a class="btn px-4" href="#" role="button">Artístic</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr class="my-2">
                </div>
            </div>
            <div class="my-3 mx-2">
                <aside class="aside">
                    <iframe style="border-radius:7px" src="https://open.spotify.com/embed/playlist/7nMPeXQBOfPKea9BfYE6o4?utm_source=generator&theme=0" width="101%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading=""></iframe>
                </aside>
                <aside class="aside">
                    <iframe style="border-radius:7px" src="https://calendar.google.com/calendar/embed?height=385&wkst=2&bgcolor=%23e0e1ff&ctz=Europe%2FMadrid&showNav=0&showTz=0&showTabs=1&showPrint=0&showCalendars=0&showDate=1&src=Y19iNzlkZDFhOTAzMWMyMzI1ZDA0NDk3NGZkNjU4ZWVjMzFiZmJkMmI2NTJiOWYyOGI0MWFiY2RkZWE2MDQ0NzBkQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=Y19kYjAzOWMxN2I1YjAxOGE5MTY4YzEwYjhjMWVmMDU3ZDFhNGRkOGUwMjI2NjVlOWE4MTNlN2RiMWNlYmVmZTZlQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23F09300&color=%233F51B5" style="border-width:0" width="101%" height="385" frameborder="0" scrolling="yes"></iframe>
                </aside>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="px-3 mb-4">
            <div class="container-fluid caca px-3 m-0">
                <p class="lead px-5 pt-5"><strong>Colabora amb el projecte enviant els teus apunts</strong></p>
                <hr class="m-2 mx-5">
                <p class="small px-5"><a href="url">Clica</a> si tens dubtes per enviar els arxius</p>
                <div class="form-group px-4">
                    <?php if (empty($msg)) { ?>
                    <form class="px-4 py-1" method="post" action="areaprivada.php" enctype="multipart/form-data">
                        <label for="comment">Comentari:</label>
                        <textarea class="form-control" required rows="4" name="textarea" id="comment"></textarea>
                        <div class="pt-3">
                            <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
                            Selecciona un o mes fitxers:
                            <input name="userfile[]" type="file" accept="application/pdf" required multiple="multiple">
                            <div class="d-flex flex-row-reverse">
                                <input class="col-sm-1"type="submit" value="Enviar">
                            </div>
                        </div>
                    </form>
                    <?php } else { ?>
                        <form class="px-4 py-1" method="post" action="areaprivada.php" enctype="multipart/form-data">
                            <label for="comment">Comentari:</label>
                            <textarea class="form-control" required rows="3" name="textarea" id="comment"></textarea>
                            <div class="pt-3">
                                <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
                                Selecciona un o mes fitxers:
                                <input name="userfile[]" type="file" accept="application/pdf" required multiple="multiple">
                                <div class="d-flex flex-row-reverse">
                                    <input class="col-sm-1"type="submit" value="Enviar">
                                </div>
                            </div>
                        </form>
                        <div class="alert alert-3 px-4">
                            <?php
                                echo htmlspecialchars($msg);
                            ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        
    </div>
</body>
<style>
    .body{
        background: #536779
    }

    .aside{
        padding-right: 12px;
        padding-bottom: 12px;
    }

    .btn {
        background: #494c50;
        border-color: #494c50;
        color: #fff;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19)
    }

    .caca {
        border-radius: 7px;
        background: #E0E1FF
    }

    .jumbotron {
        background: #E0E1FF;
        border-radius: 7px;
    }
</style>
</html>