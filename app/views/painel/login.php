<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="<?= APP_PATH; ?>/style/style.css"/>
  <title>Site</title>
</head>
<body>
<header>
    <div class="container">
        <div class="logoC"><a href="<?= PATH; ?>"><i class="large material-icons">terrain</i></a></div>
    </div><!--container-->
    <div class="clear"></div>
</header>

<section class="login">
    <div class="container">
        <div class="cont-form">
            <h2>Sign in</h2>
            <form method="POST">
                <label>Name</label>
                    <input type="text" name="name">
                <label>Senha</label>
                    <input type="text" name="password">
                <input type="submit" name="action" value="Sign In">
            </form>
        </div><!--cont-form-->
    </div><!--container-->
</section><!--login-->
</body>
</html>