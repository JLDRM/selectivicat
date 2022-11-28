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
    <?php include('header.php')?>
    <div class="container-flex p-5">
      <div>
        <h1 class="display-6">FAQs</h1>
      </div>
      <div id="accordion" class="container p-3">

        <div class="card">
          <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
              Collapsible Group Item #1
            </a>
          </div>
          <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
            <div class="card-body">
              Lorem ipsum..
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
              Collapsible Group Item #2
            </a>
          </div>
          <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Lorem ipsum..
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
              Collapsible Group Item #3
            </a>
          </div>
          <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Lorem ipsum..
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseFour">
              Collapsible Group Item #4
            </a>
          </div>
          <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Lorem ipsum..
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseFive">
              Collapsible Group Item #5
            </a>
          </div>
          <div id="collapseFive" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Lorem ipsum..
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseSix">
              Collapsible Group Item #6
            </a>
          </div>
          <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Lorem ipsum..
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseSeven">
              Collapsible Group Item #7
            </a>
          </div>
          <div id="collapseSeven" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Lorem ipsum..
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseEight">
              Collapsible Group Item #8
            </a>
          </div>
          <div id="collapseEight" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Lorem ipsum..
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseNine">
              Collapsible Group Item #9
            </a>
          </div>
          <div id="collapseNine" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Lorem ipsum..
            </div>
          </div>
        </div>
      </div>
    </div>
    
</body>
</html>