<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('privateHeader.php')?>
<div class="container-flex px-3 pt-2">
    <div class="jumbotron text-white m-3 p-3 ">
        <h1 class="mx-5">Apunts</h1>
        <?php
        if (isset($_POST['submittecno'])) {
            include('apunts/tecnoapunts.html');
        }

        if (isset($_POST['submitcientific'])) {
            include('apunts/cientificapunts.html');
        }

        if (isset($_POST['submitsocial'])) {
            include('apunts/socialapunts.html');
        }

        if (isset($_POST['submithumanistic'])) {
            include('apunts/humanisticapunts.html');
        }

        if (isset($_POST['submitartistic'])) {
            include('apunts/artisticapunts.html');
        }

        if (isset($_POST['submitllengues'])) {
            include('apunts/llenguesapunts.html');
        }

        if (isset($_POST['submithistoria'])) {
            include('apunts/historiaapunts.html');
        }
    ?>
    </div>
</div>
<style>
.jumbotron {
    background: #6666ff;
    border-radius: 7px;
}

.body{
    background: #66b3ff;
}
</style>


</body>
</html>