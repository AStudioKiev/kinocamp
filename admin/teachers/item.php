<?php

namespace app;

require_once('../DBUtils.php');

if(!empty($_GET['id']))
    $teacher = DBUtils::getTeacher($_GET['id']);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Агенство">
    <meta name="keywords" content="">
    <title>Admin-panel</title>

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" href="/img/favicon.png" type="image/png">

    <link href="../admin-styles/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin-styles/css/style.css" rel="stylesheet">

    <script src="../admin-styles/js/jquery.js"></script>
    <script src="../admin-styles/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
</head>

<body>
<div class="main-grid admin-grid">
    <div class="white-blur">
        <div class="outer-wrapper">
            <div class="inner-wrapper">
                <h2 class="header-float-top">Админ панель</h2>
                <div class="form-holder">
                    <form action="index.php?action=<?= isset($teacher) ? "edit" : "add"; ?>" method="post" id="insideForm" class="form" enctype="multipart/form-data">

                        <input type="hidden" name="userID" value="<?= $teacher['ID'] ?>">

                        <div class="select form-group mar-tp-1 mar-bt-2">
                            <select id="subtype_select" name="subtype" class="selectpicker">
                                <?php
                                    if(isset($teacher))
                                        echo '<option value="'.$teacher['type'].'">'.$teacher['type'].'</option>';
                                    else
                                        echo '
                                        <option selected disabled>Тип</option>
                                        <option value="ЗВЁЗДНЫЙ ДЕСАНТ">ЗВЁЗДНЫЙ ДЕСАНТ</option>
                                        <option value="НАША КОМАНДА">НАША КОМАНДА</option>
                                        <option value="ПОПЕЧИТЕЛЬСКИЙ СОВЕТ">ПОПЕЧИТЕЛЬСКИЙ СОВЕТ</option>';
                                ?>
                            </select>
                        </div>

                        <div class="select-wrapper">
                            <div class="select form-group mar-tp-1 mar-bt-2">
                                <label for="name">Порядковый номер</label>
                                <input type="text" name="place" value="<?=$teacher['place']?>" required class="form-control input-field">
                            </div>
                            <div class="select form-group mar-tp-1 mar-bt-2">
                                <label for="name">Имя</label>
                                <input type="text" name="name" value="<?=$teacher['name']?>" required class="form-control input-field">
                            </div>
                            <div class="select form-group mar-tp-1 mar-bt-2">
                                <label for="name_desc">Профессия</label>
                                <input type="text" name="role" value="<?=$teacher['role']?>" class="form-control input-field">
                            </div>
                        </div>

                        <div class="select-wrapper image-upload-form">
                            <div class="select form-group upload-holder">
                                <label for="image">Изображение</label>
                                <div class="upload-fictive"><span>Choose a file</span></div>
                                <!-- 5MB limit -->
                                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                                <input type="file" name="image" class="form-control upload-file">
                                <span class="not-found-label">
                                    <?php echo empty($teacher['image']) ? "File is not found" : $teacher['image']; ?>
                                </span>
                            </div>
                        </div>

                        <div class="select-wrapper mar-bt-1">
                            <label for="description">Описание</label>
                            <textarea id="text" rows="8" name="text" class="textarea-field">
                                <?= $teacher['text'] ?>
                            </textarea>
                        </div>

                        <input type="submit" value="Создать" class="white-btn">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
