<?php

namespace app;

require_once('../DBUtils.php');

if(empty($_GET['action']))
    $teachers = DBUtils::getAllTeachers();
else
{
    if($_GET['action'] == 'add')
    {
        DBUtils::addTeacher($_POST['name'], $_POST['role'], $_POST['text'], $_FILES['image']);
        header('Location: http://kinocamp.loc/admin/teachers/');
        exit();
    }
    elseif($_GET['action'] == 'edit')
    {
        DBUtils::editTeacher($_POST['userID'], $_POST['name'], $_POST['role'], $_POST['text'], $_FILES['image']);
        header('Location: http://kinocamp.loc/admin/teachers/');
        exit();
    }
    elseif($_GET['action'] == 'delete')
    {
        DBUtils::deleteTeacher($_GET['data_id']);
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Агенство">
    <meta name="keywords" content="">
    <title>Admin panel</title>

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" href="/img/favicon.png" type="image/png">

    <link href="../admin-styles/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin-styles/css/style.css" rel="stylesheet">

    <script src="../admin-styles/js/jquery.js"></script>
    <script src="../admin-styles/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="main-grid admin-grid">
      <div class="white-blur">
          <div class="outer-wrapper">
              <div class="inner-wrapper">
                <h2 class="header-float-top">Админ панель</h2>

                <div class="admin-holder table-responsive">
                    <table class="table admin-table">
                        <a href="../index.php">
                            <button id="mainBtn" name="add-new-btn" class="add-new-btn">Главная</button>
                        </a>
                        <a href="item.php">
                            <button id="addNewBtn" name="add-new-btn" class="add-new-btn">Добавить</button>
                        </a>
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Изображение</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Профессия</th>
                            <th scope="col">Описание</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($teachers as $teacher)
                            {
                                echo "<tr>\n";
                                echo "<td>" . $teacher['ID'] . "</td>\n";
                                echo "<td>" . $teacher['image'] . "</td>\n";
                                echo "<td>" . $teacher['name'] . "</td>\n";
                                echo "<td>" . $teacher['role'] . "</td>\n";
                                echo "<td>" . $teacher['text'] . "</td>\n";
                                echo "<td class='admin-item green-item edit-item'>
                                        <a href='item.php?id=".$teacher['ID']."'>Редактировать</a>
                                      </td>\n";
                                echo "<td class='admin-item red-item delete-item' data-toggle='modal' data-target='#myModal' data-id='".$teacher['ID']."'>Удалить</td>\n";
                                echo "</tr>\n\n";
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
              </div>
          </div>
      </div>
  </div>

</body>

<script>
    $('.delete-item').on( "click", function() {
        var data = {
            data_id: $(this).attr('data-id'),
            action: 'delete'
        };

        var url = "http://kinocamp.loc/admin/teachers/";

        sendGET(data, url);
    });

    function sendGET(data, url)
    {
        $.ajax({
            url: url,
            type: 'GET',
            data: data,
            error: function (result) {
                console.log('err: ', result);
            },
            success: function (result) {
                    var el = 'td[data-id=' + data['data_id'] + ']';
                    $(el).parent().remove();
                    console.log(result);
            }
        });
    }
</script>

</html>
