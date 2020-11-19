<!DOCTYPE html>
<html lang="ru-RU" class="no-js no-svg">
<head>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<form action="regestration.php" method="post">
    <div style="margin-left: 40%; margin-top: 5%; width: 300px; height: 50%;">
        <h3>Ваше имя: </h3><input style="width: 300px;" name="name" type="text">
        <h3>Ваша почта: </h3><input style="width: 300px;" name="email" type="text">
        <h3>Ваше пароль: </h3><input style="width: 300px;" name="password" type="password">
        <h3>Повторите пароль: </h3><input style="width: 300px;" name="passwordcheck" type="password"><br>
        <button name="butn" value="registr" type="submit">Зарегестрироваться</button><br><br>

        <?php
        if(isset($_POST['name'])) {
            if ($_POST['butn'] && $_POST['butn'] == "main") {
                header("Location: http://zakharov2.zzz.com.ua/");
            } else {
                if ($_POST['password'] && $_POST['name'] && $_POST['email'] && $_POST['passwordcheck']) {

                    $uname = $_POST['name'];
                    $umail = $_POST['email'];
                    $upass = $_POST['password'];
                    $upasscheck = $_POST['passwordcheck'];
                    $connection = mysqli_connect('localhost', 'cany1937', 'qweasdQWE1');
                    $select_db = mysqli_select_db($connection, 'cany1937');

                    $query = "SELECT *FROM User";
                    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                    $count = mysqli_fetch_all($result);
                    $ish = 0;
                    foreach ($count as $i) {

                        if ($uname == $i[1]) {
                            echo '<p class="logError">Пользователь с таким именем уже существует!</p>';
                            break;
                        } else if ($umail == $i[3]) {
                            echo '<p class="logError">Указаная почта уже зарегестрирована!</p>';
                            break;
                        } else if ($upass != $upasscheck) {
                            echo '<p class="logError">Пароли не совпадают</p>';
                            break;
                        } else {

                            $ish = 1;
                        }
                    }
                    if ($ish == 1) {
                        $query = "INSERT INTO User (`Name`, Password,email) VALUES ('$uname', '$upass', '$umail')";
                        $result = mysqli_query($connection, $query);
                        if ($result) {

                            echo '<p class="logError">Регистрация успешна</p>';
                            header("Location: enter.php");
                        } else {
                            echo '<p class="logError">Ошибка при добавлении пользователя</p>';

                        }
                    }
                } else {
                    echo '<p class="logError">Заполните все поля!</p>';
                }
            }


        }


        ?>
        <button name="butn" value="main" type="submit">Вернуться на главную</button><br>
    </div>

</form>
</body>
</html>
