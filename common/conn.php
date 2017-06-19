<?php
header("Content-type:text/html;charset=utf-8");
error_reporting(0); // 禁止出现警告报错等一些信息，不给用户看，自己可以看
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2017/6/19
 * Time: 10:14
 */

$conn = mysql_connect("localhost:3306", "root")
or die("数据库无法连接");

mysql_select_db("studentsManage")
or die("无法选择数据库");

mysql_query("SET NAMES UTF8");
