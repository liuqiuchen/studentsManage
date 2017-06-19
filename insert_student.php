<?php
require_once("common/conn.php");
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2017/6/19
 * Time: 11:00
 */

// 接收页面变量
$student_name = $_POST['student_name'];
$student_sex = $_POST['student_sex'];
$student_age = $_POST['student_age'];
$class_id = $_POST['class_id'];

if(!empty($student_age) && !empty($class_id))
{
    $sql = "INSERT INTO students (student_name, student_sex, student_age, class_id) VALUES ('$student_name', '$student_sex', $student_age, $class_id);";
}
else if(!empty($student_age) && empty($class_id))
{
    $sql = "INSERT INTO students (student_name, student_sex, student_age) VALUES ('$student_name', '$student_sex', $student_age);";
}
else if(empty($student_age) && !empty($class_id))
{
    $sql = "INSERT INTO students (student_name, student_sex, class_id) VALUES ('$student_name', '$student_sex', $class_id);";
}
else
{
    $sql = "INSERT INTO students (student_name, student_sex) VALUES ('$student_name', '$student_sex');";
}

//echo $sql;

// 插入数据库模块
if(mysql_query($sql, $conn))
{
    echo "添加成功";
}
else
{
    echo "添加失败: error".mysql_error();
}