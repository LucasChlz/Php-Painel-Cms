<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="<?= APP_PATH; ?>/style/style.css"/>
  <title>Painel</title>
</head>
<body>
<header>
    <div class="container">
        <div class="logoC"><a href="<?= PATH; ?>"><i class="large material-icons">terrain</i></a></div>
        <div class="loggout"><a href="<?= PATH_PAINEL; ?>?loggout"><i class="large material-icons"></i>Loggout</a></div>
    </div><!--container-->
    <div class="clear"></div>
</header>
<section class="cms">
    <div class="container cm">
        <form method="POST">
            <label>Title Header:</label>
                <input type="text" name="header" value="<?= $info['title_header']; ?>">
            <label for="">Header Icon</label>
                <input type="text" name="icon" value="<?= $info['header_icon']; ?>">
            <label for="">Text</label>
                <textarea name="text"><?= $info['text']; ?></textarea>
            <label for="">Ttitle Box</label>
                <input type="text" name="title-box" value="<?= $info['title_box']; ?>">
            <label for="">Box 1 Icon</label>
                <input type="text" name="box1-icon" value="<?= $info['box1_icon']; ?>">
            <label for="">Box 1 Text</label>
                <input type="text" name="box1-text" value="<?= $info['box1_text']; ?>">
            <label for="">Box 2 Icon</label>
                <input type="text" name="box2-icon" value="<?= $info['box2_icon']; ?>">
            <label for="">Box 2 Text</label>
                <input type="text" name="box2-text" value="<?= $info['box2_text']; ?>">
            <label for="">Box 3 Icon</label>
                <input type="text" name="box3-icon" value="<?= $info['box3_icon']; ?>">
            <label for="">Box 3 Text</label>
                <input type="text" name="box3-text" value="<?= $info['box3_text']; ?>">
            <input type="submit" name="action" value="Send">
        </form>
    </div><!--container-->
</section><!--cms-->
</body>
</html>