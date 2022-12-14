<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<header><?php include('privateHeader.php')?></header>

<?php include('sendMail.php')?>
<body class="bod">
    <div class="container-fluid p-0">
        <div class="d-flex my-2">
            <div class="flex-grow-1 my-3 px-3">
                <div class="jumbotron p-5">
                    <h1 class="display-4 text-white">Selectivicat</h1>
                    <p class="lead text-white"><strong>Selecciona la matèria o modalitat i accediràs als apunts i als arxius relacionats disponibles. </strong></p>
                    <hr class="">
                    <p class="lead text-white">Matèries comunes </p>
                    <form action="apunts.php" method="post">
                        <div class="d-flex">
                            <div class="col mx-3">
                                <button type="submit" id='submitllengues' name="submitllengues" class="btn w-100">Català</button>
                            </div>
                            <div class="col mx-3">
                                <button type="submit" id='submitllengues' name="submitllengues" class="btn w-100">Castellà</button>
                            </div>
                            <div class="col mx-3">
                                <p class="lead ">
                                    <button type="submit" id='submitllengues' name="submitllengues" class="btn w-100">Llengua estrangera</button>
                                </p>
                            </div>
                            <div class="col mx-3">
                                <p class="lead ">
                                    <button type="submit" id='submithistoria' name="submithistoria" class="btn w-100">Història</button>
                                </p>
                            </div>
                        </div>
                    </form>
                    <hr class="p-0">
                    <p class="lead text-white">Matèries específiques </p>
                    <form action="apunts.php" method="post">
                        <div class="d-flex">
                            <div class="col mx-2">
                                <button type="submit" id='submitcientific' name="submitcientific" class="btn w-100">Científic</button>
                            </div>
                            <div class="col mx-2">
                                <button type="submit" id='submittecno' name="submittecno" class="btn w-100">Tecnològic</button>
                            </div>
                            <div class="col mx-2">
                                <p class="lead ">
                                    <button type="submit" id='submithumanistic' name="submithumanistic" class="btn w-100">Humanístic</button>
                                </p>
                            </div>
                            <div class="col mx-2">
                                <p class="lead ">
                                    <button type="submit" id='submitsocial' name="submitsocial" class="btn w-100">Social</button>
                                </p>
                            </div>
                            <div class="col mx-2">
                                <p class="lead ">
                                    <button type="submit" id='submitartistic' name="submitartistic" class="btn w-100">Artístic</button>
                                </p>
                            </div>
                        </div>
                    </form>
                    <hr class="my-2">
                </div>
            </div>
            <div class="my-3 mx-2">
                <aside class="aside">
                    <iframe style="border-radius:7px" src="https://open.spotify.com/embed/album/6wOJyevNYXevqTZCn6Xk5T?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading=""></iframe>
                </aside>
                <aside class="aside">
                <iframe style="border-radius:7px" src="https://calendar.google.com/calendar/embed?height=385&wkst=2&bgcolor=%23ffffff&ctz=Atlantic%2FCanary&showNav=1&showDate=0&showPrint=0&showTabs=0&showCalendars=0&showTz=0&hl=ca&src=c2VsZWN0aXZpY2F0MUBnbWFpbC5jb20&color=%23039BE5" style="border-width:0" width="350" height="385" frameborder="0" scrolling="no"></iframe></aside>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="px-3 mb-4">
            <div class="container-fluid caca px-3 m-0">
                <p class="lead px-5 pt-5 text-white"><strong>Col·labora amb el projecte enviant els teus apunts</strong></p>
                <hr class="m-2 mx-5">
                <p class="small px-5 text-white"><a href="project.php" style="color: white">Clica</a> si tens dubtes per enviar els arxius</p>
                <div class="form-group px-4">
                    <?php if (empty($msg)) { ?>
                    <form class="px-4 py-1 text-white" method="post" action="private.php" enctype="multipart/form-data">
                        <label for="sel1">Selecciona a quina modalitat corresponen els apunts</label>
                        <select class="form-control" required name="option" id="sel1">
                            <option value="" selected disabled hidden></option>
                            <option>Comuna</option>
                            <option>Científic</option>
                            <option>Tecnològic</option>
                            <option>Social</option>
                            <option>Humanístic</option>
                            <option>Artístic</option>
                        </select>
                        <label for="comment" class="mt-4">Comentari:</label>
                            <textarea class="form-control" required rows="1" name="textarea" id="comment"></textarea>
                        <div class="pt-3">
                            <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
                            Selecciona un o més fitxers:
                            <button class="btn">
                                <input name="userfile[]" type="file" accept="application/pdf" required multiple="multiple">
                            </button>
                            <div class="d-flex flex-row-reverse">
                                <input class="btn col-sm-1"type="submit" value="Enviar">
                            </div>
                        </div>
                    </form>
                    <?php } else { ?>
                        <form class="px-4 py-1 text-white" method="post" action="private.php" enctype="multipart/form-data">
                            <label for="sel1">Selecciona a quina modalitat corresponen els apunts</label>
                            <select class="form-control" required name="option" id="sel1">
                                <option>Científic</option>
                                <option>Tecnològic</option>
                                <option>Social</option>
                                <option>Humanístic</option>
                                <option>Artístic</option>
                            </select>
                            <div class="pt-3">
                                <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
                                Selecciona un o mes fitxers:
                                <input name="userfile[]" type="file" accept="application/pdf" required multiple="multiple">
                                <div class="d-flex flex-row-reverse">
                                    <input class="btn col-sm-1" type="submit" value="Enviar">
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
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
</body>
<style>
    .body{
        background: #66b3ff
    }

    .aside{
        padding-right: 12px;
        padding-bottom: 12px;
    }

    .btn {
        background: #336699;
        border-color: #336699;
        color: #fff;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19)
    }

    .caca {
        border-radius: 7px;
        background: #6666ff
    }

    .jumbotron {
        background: #6666ff;
        border-radius: 7px;
    }
</style>
</html>