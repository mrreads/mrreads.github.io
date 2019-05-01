<?
session_start();

if (empty($_SESSION['id_user'])) 
{
    header('Location: index.php');
}

require_once 'php/connection.php';

$user_id = $_SESSION['id_user'];
$query_user_info = "SELECT fio, name_role FROM students, roles WHERE students.id_role = roles.id_role AND id_student = '$user_id'";
$result_user_info = mysqli_query($link, $query_user_info);
$data_user_info = mysqli_fetch_row($result_user_info);
$user_fio = $data_user_info[0];
$user_fio = explode(' ', $user_fio);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> О специальности!</title>
    <link rel="stylesheet" href="styles/style_admin.css">
    <link rel="stylesheet" href="styles/contents/style_student-speciality_profile.css">
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
                    <? echo" <p class='sb-name'> $user_fio[1] $user_fio[0] </p>"; ?>
                    <? echo"<p class='sb-role'> $data_user_info[1] </p>"; ?>
                </div>
                <div class="sb-menu">
                    <ul>
                        <li> <a href="administration.php"> Администрация </a> </li>
                        <li> <a href="subject.php"> Предметы </a> </li>
                        <li> <a href="student_you.php" id="sb-menu_active"> Студент </a> </li>
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
                    <li> <a href="student_you.php"> Вы </a> </li>
                    <li> <a href="student_group.php"> Группы </a> </li>
                    <li> <a href="student_specialty.php" id="nav-menu_active"> Специальности </a> </li>
                </ul>
            </div>
            <div id="content">
                <div id="profile">
                    <div class='p-background'>
                        <h2 class="b-name"> Название специальности </h2>
                    </div>
                    <div class='info-background'>
                        <div class="item-info">
                            <p> Наименование: </p>
                            <p> [название специальности] </p>
                            <hr>
                            <p> Код специальности: </p>
                            <p> [код специальности] </p>
                            <hr>
                            <p> Срок обучения: </p>
                            <p> [срок обучения] </p>
                            <hr>
                            <p> Форма обучния: </p>
                            <p> [форма обучения] </p>
                            <hr>
                            <p> План обучения: </p>
                            <p> <a href="#"> [план занятий] </a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
