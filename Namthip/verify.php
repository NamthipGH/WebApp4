<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $login= $_POST['login'];
    $pwd= $_POST['pwd'];

    ?>
    <h1 style="text-align: center;">Webboard KakKak</h1>
    <hr>
    <div style="text-align: center;">
        เข้าสู่ระบบด้วย<br>
        Login = <?php echo $login;?><br>
        Password = <?php echo $pwd;?><br>
    </div>
</body>
</html>