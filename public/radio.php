<!DOCTYPE html>

<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radio.php</title>
</head>

<body>
    <h4>0J01034 山﨑由翔</h4>
    <p>ラジオボタン</p>
    <?php
    echo  '<p>あなたの好きな果物は、'  . $_POST['fruit']  . 'ですね。</p>';
    ?>
    <a href='radio.html'>戻る</a>
</body>

</html>