<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include('privateHeader.php')?>
    <div class="container-flex px-4 pt-4">
      <div id="accordion" class="container py-3">
        <div class="card">
          <div class="card-header">
            <a class="collapsed btn text-white" data-bs-toggle="collapse" href="#collapseOne">
              Qué és Selectivicat?
            </a>
          </div>
          <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
            Selectivicat és un projecte que neix arran la realització d'un treball de recerca, l'objectiu d'aquest és desenvolupar un lloc Web en el qual els alumnes puguin tenir tot d'eines perquè el temps d'estudi sigui el més eficient possible. Tot està realitzat per alumnes i per a alumnes.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed btn text-white" data-bs-toggle="collapse" href="#collapseTwo">
            Per què he d'iniciar sessió per a descarregar-me els apunts?
            </a>
          </div>
          <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
            No utilitzem les dades proporcionades per la Web per a cap finalitat més que identificar i controlar la quantitat de gent que accedeix i descàrrega els documents, la finalitat del registre és purament estadístic.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed btn text-white" data-bs-toggle="collapse" href="#collapseThree">
            Per què he d'iniciar sessió per a descarregar-me els apunts?
            </a>
          </div>
          <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Simplement, has de crear-te un compte i has d'iniciar sessió, una vegada has obert la sessió tindràs accés a totes les eines que ofereix Selectivicat.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed btn text-white" data-bs-toggle="collapse" href="#collapseFour">
              Com puc col·laborar amb el projecte?
            </a>
          </div>
          <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
            Tothom hi pot aportar el granet de sorra. Hi ha un espai habilitat per a enviar els teus apunts en cas que vulguis col·laborar amb el projecte. També hi ha el meu contacte a la pàgina principal i agrairia molt que m'enviéssiu propostes de millora i crítiques constructives.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed btn text-white" data-bs-toggle="collapse" href="#collapseFive">
              Com envio els meus apunts?
            </a>
          </div>
          <div id="collapseFive" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
            En la zona privada trobaràs un apartat en el qual pots seleccionar de quina modalitat són els teus apunts. En el comentari podeu ficar aclariments sobre els apunts o el vostre nom/Instagram perquè pugui referenciar-vos quan els apunts es publiquin.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed btn text-white" data-bs-toggle="collapse" href="#collapseSix">
              Com és que has fet el TdR sobre això?
            </a>
          </div>
          <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              La veritat és que no sóc un apassionat de la informàtica però vaig veure la proposta i m'hi vaig tirar de cap.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed btn text-white" data-bs-toggle="collapse" href="#collapseSeven">
              Tens pensat seguir amb el projecte a llarg termini?
            </a>
          </div>
          <div id="collapseSeven" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Si la proposta agrada i té suport de la gent segurament m'anima a continuar amb aquest projecte més enllà de l'entrega del Treball de Recerca.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed btn text-white" data-bs-toggle="collapse" href="#collapseEight">
              Et puc recomanar un altre nom i un altre logotip per a la Web?
            </a>
          </div>
          <div id="collapseEight" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
            SI! Qualsevol proposta és benvinguda sobretot de cara a l'estil i la presentació de la Web, normalment estic bastant atent a xarxes socials així que si teniu una proposta no dubteu a contactar amb mi.
            </div>
          </div>
        </div>
      </div>
    </div>
    
</body>

<style>
  div{
    color: #fff;
  }

  .body{
    background: #66b3ff
  }
  .collapsed{
    background: none;
    border: none;
    box-shadow: none;
  }
  .aside{
    padding-right: 12px;
    padding-bottom: 12px;
  }

  .card {
    background: #6666ff
  }

  .jumbotron {
    background: #6666ff;
    border-radius: 7px;
  }
</style>
</html>