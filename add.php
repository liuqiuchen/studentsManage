<?php require_once "common/conn.php" ?>

<html>
<head>
    <meta charset="utf-8">
    <title>添加学生</title>
</head>

<body>
<h3>添加学生</h3>
<form name="add_student" method="post" action="insert_student.php">
    学生姓名：<input type="text" name="student_name" value=""><br><br>
    学生性别：<input type="text" name="student_sex" value=""><br><br>
    学生年龄：<input type="text" name="student_age" value=""><br><br>
    学生班级：<input type="text" name="class_id" value=""><br><br>
    <input type="submit" value="提交">
</form>
</body>
</html>
