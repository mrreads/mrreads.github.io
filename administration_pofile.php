<?
session_start();

if (empty($_SESSION['id_user'])) 
{
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> О администрации!</title>
    <link rel="stylesheet" href="styles/style_admin.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald|PT+Sans+Narrow|Roboto&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="styles/style_adaptability.css">
    <link rel="stylesheet" href="styles/contents/style_profile.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <div id="main-wrapper">
        <div id="wrapper-one">
            <div id="side-bar">
                <div class="hm-logo">
                    <h2> <a href="index.php"> ЩЕЛКОВСКИЙ <br> КОЛЛЕДЖ </a> </h2>
                </div>
                <div class="sb-profile">
                    <img src="images/avatar.jpg">
                    <p class="sb-name"> Имя Фамилия </p>
                    <p class="sb-role"> Студент </p>
                </div>
                <div class="sb-menu">
                    <ul>
                        <li> <a href="administration.php" id="sb-menu_active"> Администрация </a> </li>
                        <li> <a href="subject.php"> Предметы </a> </li>
                        <li> <a href="student_you.php"> Студент </a> </li>
                        <li> <a href="schedule.php"> Расписание </a> </li>
                        <li> <a href="metodichka.php"> Методичка </a> </li>
                        <li> <a href="vneurochka.php"> Внеурочка </a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="wrapper-two">
            <div id="header-menu">
                <div class="hm-menu">
                    <ul>
                        <li> <a href="index.php"> Главная </a> </li>
                        <li> <a href="student_you.php" id="hm-menu_active"> Личный кабинет</a> </li>
                    </ul>
                </div>
                <div class="hm-login">
                    <a href="php/logout.php"> Выйти </a>
                </div>
            </div>
            <div id="content">
                <div id="profile">
                    <img src="https://konata.namikoi.com/characters/5f245464-91c4-4597-b7a2-f4e5397740fa/b88e507d-9053-44b4-8198-aa1961eca6c0.jpg">
                    <div class='p-background'>
                        <h2 class="b-name"> Имя Фамилия </h2>
                        <p class="b-info"> Администрация </p>
                    </div>
                    <div class='info-background'>
                        <div class="user-info">
                            <p> Имя администрации: </p>
                            <p> [фио] </p>
                            <hr>
                            <p> Отделение: </p>
                            <p> [отделение] </p>
                            <hr>
                            <p> Должность: </p>
                            <p> [должность] </p>
                            <hr>
                            <p> Дни работы: </p>
                            <p> [список дней] </p>
                        </div>
                        <div class="profile-info">
                            <p> Почта администрации: </p>
                            <p> [почта администрации] </p>
                            <hr>
                            <p> Номер: </p>
                            <p> [номер администрации </p>
                            <hr>
                            <p> Социальные сети: </p>
                            <p> <a href="#"> [ссылка] </a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>