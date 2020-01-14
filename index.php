<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="author" content="sergey.sepol@gmail.com">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Вход в личный кабинет</title>
  <link rel="stylesheet" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
</head>

<body>

  <div class="container">

    <?php if($_COOKIE['user'] == '' ): ?>

    <div class="frame">
      <div class="nav">
        <ul class="links">
          <li class="signin-active"><a class="btn">Вход </a></li>
          <li class="signup-inactive"><a class="btn">Регистрация </a></li>
        </ul>
      </div>
      <div ng-app ng-init="checked = false">
        <form class="form-signin" action="validation-form/auth.php" method="POST" name="form">
          <label for="username">Логин</label>
          <input class="form-styling" type="text" id="login" name="login" placeholder="" />
          <label for="password">Пароль</label>
          <input class="form-styling" type="password" id="pass" name="pass" placeholder="" />
          <button class="btn-animate btn-signin" type="submit">Войти</button>
        </form>

        <form class="form-signup" action="validation-form/check.php" method="post" name="form">
          <label for="name">Имя</label>
          <input class="form-styling" type="text" id="name" name="name" placeholder="" />
          <label for="login">Логин</label>
          <input class="form-styling" type="text" id="login" name="login" placeholder="" />
          <label for="password">Пароль</label>
          <input class="form-styling" type="password" id="pass" name="pass" placeholder="" />
          <button class="btn-signup">Зарегистрироваться</button>
        </form>
      </div>
    </div>
  </div>

  <?php else: ?>

  <div class="auth">
    <?=$_COOKIE['user'];?>, вы успешно авторизовались.
    Нажмите, чтобы <a href="exit.php">выйти</a>.
  </div>

  <?php endif; ?>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index.js"></script>

</body>

</html>