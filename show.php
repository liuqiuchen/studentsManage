<?php
require_once("common/conn.php");

$sql = "SELECT * FROM students";
$result = mysql_query($sql, $conn);
if($result)
{
    echo "<br>";

    while($row= mysql_fetch_row($result))
    {
        echo "ID: ". $row[0] . " | 姓名：". $row[1]. " | 性别：". $row[2]. " | 年龄：". $row[3]. " | 班级：". $row[4];
        echo "<br>";
    }
}
else
{
    echo "查看失败";
}








