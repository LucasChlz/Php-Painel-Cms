<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="<?= APP_PATH; ?>/style/style.css"/>
  <title><?= $infoWeb['title_header']; ?></title>
</head>
<body>
<header>
    <div class="container">
        <div class="logo"><i class="large material-icons"><?= $infoWeb['header_icon']; ?></i></div>
    <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
    </ul>
    </div><!--container-->
    <div class="clear"></div>
</header>
<section id="about" class="container-about">
    <div class="background">
        <div class="bg-color">
            <div class="container">
                <div class="txt">
                    <p><?= $infoWeb['text']; ?></p>
                </div><!--txt-->
            </div><!--container-->
        </div><!--bg-color-->
    </div><!--background-->
</section><!--container-about-->

<section id="services" class="container-service">
    <h2><?= $infoWeb['title_box']; ?></h2>
    <div class="container flex">
        <div class="box-service">
            <div class="icon"><i class="large material-icons"><?= $infoWeb['box1_icon']; ?></i></div>
            <p><?= $infoWeb['box1_text']; ?></p>
        </div><!--box-service-->

        <div class="box-service">
            <div class="icon"><i class="large material-icons"><?= $infoWeb['box2_icon']; ?></i></div>
            <p><?= $infoWeb['box2_text']; ?></p>
        </div><!--box-service-->

        <div class="box-service">
            <div class="icon"><i class="large material-icons"><?= $infoWeb['box3_icon']; ?></i></div>
            <p><?= $infoWeb['box3_text']; ?></p>
        </div><!--box-service-->

    </div><!--container-->
</section><!--container--service-->

<footer>
    <div class="container">
        <div class="footer">
            <h2>FOOTER</h2>
        </div><!--footer-->
    </div><!--container-->
</footer>
</body>
</html>