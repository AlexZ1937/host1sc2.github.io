<!DOCTYPE html>
<html lang="ru-RU" class="no-js no-svg">
    <head>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <form action="enter.php" method="post">

        <div style="margin-left: 40%; margin-top: 10%; width: 300px; height: 50%;">
            <?php
            if(isset($_GET['out']))
            {
                echo '<h4>Вы успешно вышли из учетной записи!</h4>';
            }
            ?>
            <h3>Ваше имя или почта: </h3><input style="width: 300px;" name="name" type="text"><br>
            <h3>Ваше пароль: </h3><input style="width: 300px;" name="password" type="password"><br><br>

            <button style="margin-left: 100px;" name="butn" value="registr" type="submit">Войти</button><br><br>

            <?php

            if(isset($_POST['name'])) {
                if ($_POST['butn'] && $_POST['butn'] == "main") {
                    header("Location: http://zakharov2.zzz.com.ua/");
                } else {
                    if ($_POST['password'] && $_POST['name']) {

                        $uname = $_POST['name'];
                        $upass = $_POST['password'];
                        $connection = mysqli_connect('localhost', 'cany1937', 'qweasdQWE1');
                        $select_db = mysqli_select_db($connection, 'cany1937');

                        $query = "SELECT *FROM User";
                        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                        $count = mysqli_fetch_all($result);
                        $ish = 0;
                        foreach ($count as $i) {
                            if ($uname == $i[1] || $uname == $i[3]) {

                                if ($upass == $i[2]) {
                                    $uname = $i[1];
                                    $ish = 1;
                                } else {
                                    echo $upass . '=' . $i[2] . '<br>';
                                    var_dump($i);
                                    var_dump($i[2]);
                                    var_dump($upass);
                                    $ish = 2;
                                }

                            }
                        }
                        if ($ish == 1) {
                            echo '<p class="logError">Добро пожаловать ' . $uname.'!</p>';
                            setcookie("userregisterd",$uname);
                            header("Location: http://zakharov2.zzz.com.ua/");
                        } else if ($ish == 2) {
                            echo '<p class="logError">Неверное имя пользователя или пароль</p>';
                        } else {
                            echo '<p class="logError">Пользователь не найден</p>';
                        }
                    } else {
                        echo '<p class="logError">Заполните все поля!</p>';
                    }

                }


            }

            ?>

            <button style="margin-left: 20px; name="butn" value="main" type="submit">Вернуться на главную</button>

        </div>

        </form>
    </body>
</html>
