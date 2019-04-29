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
    <title> Поиск учителя!</title>
    <link rel="stylesheet" href="styles/style_admin.css">
    <link rel="stylesheet" href="styles/contents/style_subject_teachery.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald|PT+Sans+Narrow|Roboto&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="styles/style_adaptability.css">
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
                        <li> <a href="administration.php"> Администрация </a> </li>
                        <li> <a href="subject.php" id="sb-menu_active"> Предметы </a> </li>
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
            <div id="nav-menu">
                <ul>
                    <li> <a href="subject.php"> Предметы </a> </li>
                    <li> <a href="subject_teacher.php" id="nav-menu_active"> Преподаватели </a> </li>
                </ul>
            </div>
            <div id="content">
                <div class="items">
                    <form>
                        <input id="enter" type="text" placeholder="Введите код группы или специальность.">
                        <input id="search" type="submit" value="ПОИСК">
                    </form>
                    <p class=p-button> <a href="subject_teacher_profile.php"> Преподавател </a> </p>
                    <hr>
                    <p class=p-button> <a href="subject_teacher_profile.php"> Преподавател </a> </p>
                    <hr>
                    <p class=p-button> <a href="subject_teacher_profile.php"> Преподавател </a> </p>
                    <hr>
                    <p class=p-button> <a href="subject_teacher_profile.php"> Преподавател </a> </p>
                    <hr>
                    <p class=p-button> <a href="subject_teacher_profile.php"> Преподавател </a> </p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</body>

</html>