<?php

namespace app;

use mysqli;

class DBUtils
{
    private static function getConnection() //:\mysqli
    {
        $mysqli = new mysqli('localhost', 'root', '517', 'kinocamp');

        if ($mysqli->connect_errno)
            return "Не удалось подключиться к MySQL: " . $mysqli->connect_error;

        if(!$mysqli->set_charset("utf8"))
            return "Не удалось установить кодировку utf8: " . $mysqli->error;

        return $mysqli;
    }

    public static function getAllTeachers()
    {
        $mysqli = DBUtils::getConnection();

        $query = "SELECT * FROM teachers WHERE 1;";
        $result = $mysqli->query($query);

        if($result->num_rows == 0)
        {
            $mysqli->close();
            return null;
        }

        while($row = $result->fetch_assoc())
            $teachers[] = $row;

        $mysqli->close();

        return $teachers;
    }

    public static function getTeacher($ID)
    {
        $mysqli = DBUtils::getConnection();

        $query = "SELECT * FROM teachers WHERE ID=$ID;";
        $result = $mysqli->query($query);

        $row = $result->fetch_assoc();
        $teacher = $row;

        $mysqli->close();

        return $teacher;
    }

    public static function addTeacher($name, $role, $text, $image)
    {
        $mysqli = DBUtils::getConnection();

        if(getimagesize($image["tmp_name"]) !== false)
        {
            $uploaddir = '/home/host1221966/xn--80aggjjhniw4j.xn--p1ai/htdocs/www/teacher-images/';
            $uploadfile = $uploaddir . basename($image['name']);
            move_uploaded_file($image['tmp_name'], $uploadfile);

            $query = "INSERT INTO `teachers` (`name`, `role`, `text`, `image`) VALUES ('$name', '$role', '$text', '$uploadfile');";
        }
        else
            $query = "INSERT INTO Posts (`name`, `role`, `text`) VALUES ($name, $role, $text);";

        $mysqli->query($query);
        $mysqli->close();

        return true;
    }

    public static function editTeacher($userID, $name, $role, $text, $image)
    {
        $mysqli = DBUtils::getConnection();

        if(getimagesize($image["tmp_name"]) !== false)
        {
            $uploaddir = '/home/host1221966/xn--80aggjjhniw4j.xn--p1ai/htdocs/www/teacher-images/';
            $uploadfile = $uploaddir . basename($image['name']);
            move_uploaded_file($image['tmp_name'], $uploadfile);
            $query = "UPDATE `teachers` SET `name`='$name', `role`='$role', `text`='$text', `image`='$uploadfile' WHERE `ID`= $userID;";
        }
        else
            $query = "UPDATE `teachers` SET `name`='$name', `role`='$role', `text`='$text' WHERE `ID`= $userID;";

        $mysqli->query($query);
        $mysqli->close();

        return true;
    }

    public static function deleteTeacher($ID)
    {
        $mysqli = DBUtils::getConnection();

        $query = "DELETE FROM `teachers` WHERE `ID` = $ID";
        $result = $mysqli->query($query);
        $mysqli->close();

        return true;
    }

}
