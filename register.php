<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー登録画面</title>
</head>
<body>
  <form action="register_act.php" method="POST">
    <fieldset>
      <legend>リストユーザ登録画面</legend>
      <div>
        usename:<input type="text" name="username">
      </div>
      <div>
        password:<input type="text" name="password">
      </div>
      <div>
        <button>Register</button>
      </div>
      <a href="login.php">or login</a>
    </fieldset>
  </form>
</body>
</html>