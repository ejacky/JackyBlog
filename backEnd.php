<?php
require_once("dbClass.php");
$con = dbClass::connect2Db();
session_start();
//var_dump($_SESSION);exit;
if (!(isset($_SESSION['login']) && $_SESSION['login'] == 'hasLogin'))
{   
        header('location: login.php');
}
if ($_POST)
{
    
    $name = $_POST["name"];
    $content = $_POST["content"];
//   $dbBlog = class DB();
//   $dbBlog->insertSth($name, $content);
    $remark = "";
	$dateTime = date("y-m-d H:i:m");
        
    $insertSql = 'insert into blog(name, blog, remark, date) values("' . $name . '", "' . $content .'", "", "' . $dateTime .'");';
    if (mysql_query($insertSql))
	{
	    echo "success";
	}
	else 
	{
	    echo "error";
	}
}
else
{
echo "No";
}

if (isset($_POST['logout']))
{
        unset($_SESSION['login']);       
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>


<body>
<a href="/index.php">查看前台</a><span> | <a href="javascript:void(0)">登出</a></span>
<form method = "post" action = "">
名称<br />
<input type="text" name="name" value="" /> <br />
文章<br />
<textarea name="content" ></textarea> <br />
<input type="submit" value="发博文">
</form>

</body>
</html>