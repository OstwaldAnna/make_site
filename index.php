<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <title>О нас</title>
</head>
<body>

<?php
  include("./elements/header.php");
?>

<div class="container text-center">
  <div class="col">
    <p class="fs-4">Мэйкап визаж</p>
    <img width="200" height="192"src="/resources/images/1.jpg" alt="logo">
    <p class="fs-4">Наш девиз: наши мастера подарят вам самые необычные макияжи</p>
  </div>
  <div class="row mt-3">
    <div class="col">
      <p class="fs-2 fw-bold">Наши новинки</p>
    </div>
  </div>
</div>

<?php
  include("./elements/carousel.php");
?>

<?php
  include("./elements/footer.php");
?>

<script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>