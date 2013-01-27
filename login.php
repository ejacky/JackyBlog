<?php
require_once("dbClass.php");
if ($_POST)
{
        $username = $_POST['username'];
        $password = $_POST['password'];
        $con = dbClass::connect2Db();
        
        if ($con)
        {
                if ($username == 'Jacky' && $password == '123456')
                {
                        session_start();
                        $_SESSION['login'] = 'hasLogin';
                        header('location: backEnd.php');
                }
                
        }
}
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<form method="post" action="">
用户名：<input type="text" name="username" /><br />
密码：<input type="password" name="password" /><br />
<input type="submit" value="提交" />
</form>
</body>
</html>