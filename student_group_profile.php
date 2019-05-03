<?
session_start();

if (empty($_SESSION['id_user'])) 
{
    header('Location: login.php');
}

require_once 'php/connection.php';

$group_id = $_GET['id'];


$user_id = $_SESSION['id_user'];

$query_group_info = "SELECT
                        number_group,
                        name_specialization,
                        date_zachislenia,
                        classrooms.number,
                        form_of_study
                    FROM
                        `groups`,
                        specialnost,
                        classrooms
                    WHERE
                        groups.id_specialization = specialnost.id_specialization
                    AND
                        groups.classroom_teacher = classrooms.id_classrooms
                    AND
                        id_group = '$group_id'";
$result_group_info = mysqli_query($link, $query_group_info);
$data_group_info = mysqli_fetch_row($result_group_info);


$group_name = $data_group_info[0];
$group_secialization = $data_group_info[1];
$group_date = $data_group_info[2];
$group_class = $data_group_info[3];
$group_formstudy = $data_group_info[4];

$group_id_secialization = mysqli_fetch_row(mysqli_query($link, "SELECT id_specialization FROM `groups` WHERE id_group = '$group_id'"));

$query_user_info = "SELECT students.name, roles.name FROM students, roles WHERE students.id_role = roles.id_role AND students.id_user = '$user_id'";
$result_user_info = mysqli_query($link, $query_user_info);
$data_user_info = mysqli_fetch_row($result_user_info);
$user_fio = $data_user_info[0];
$user_fio = explode(' ', $user_fio);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> О группе!</title>
    <link rel="stylesheet" href="styles/style_admin.css">
    <link rel="stylesheet" href="styles/contents/style_student-group_profile.css">
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
                    <li> <a href="student_group.php" id="nav-menu_active"> Группы </a> </li>
                    <li> <a href="student_specialty.php"> Специальности </a> </li>
                </ul>
            </div>
            <div id="content">
                <div id="profile">
                    <div class='p-background'>
                        <? echo "<h2 class='b-name'> $group_name </h2>"; ?>
                    </div>
                    <div class='info-background'>
                        <div class="item-info">
                            <p> Номер группы: </p>
                            <? echo "<p> $group_name </p>" ?>
                            <hr>
                            <p> Специальность: </p>
                            <? echo "<p> <a href ='student_speciality_profile.php?id=$group_id_secialization[0]'> $group_secialization </a> </p>"; ?>
                            <hr>
                            <p> Дата зачисления: </p>
                            <? echo "<p> $group_date </p>" ?>
                            <hr>
                            <p> Форма обучения: </p>
                            <? echo "<p> $group_formstudy </p>" ?>
                            <hr>
                            <p> Кабинет класс. руководителя: </p>
                            <? echo "<p> $group_class </p>" ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>