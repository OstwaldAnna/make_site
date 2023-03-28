<?php
  session_start();
?>
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
  <div class="row mt-3">
    <div class="col">
      <p class="fs-2 fw-bold">Авторизация</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row mt-3">
    <div class="col">
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Регистрация</h4>
            <form method="post" action="verdon/sign_up.php">
            <div class="row g-3">
                <div class="col-sm-6">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" id="surname" placeholder="Фамилия" name="surname" value="" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" id="password" placeholder="Пароль" name="password" value="" required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
            </div>
                <div class="container mt-3 text-center">
                    <button class="btn btn-primary btn-lg btn-block mt-3" type="submit">Зарегистрироваться</button>

                    <?php
                 if ($_SESSION['message']){
                    echo '<p class="msg">' . $_SESSION['message'] . '<p>';
                 }
                 unset($_SESSION['message']);
                ?>
                </div>
            </form>
        </div>
    </div>
    <div class="col">
        <img width="700" height="692"src="/resources/images/9.jpg" alt="map">
    </div>
  </div>
</div>

<?php
  include("./elements/footer.php");
?>

<script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>