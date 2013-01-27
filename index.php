<?php
require_once("dbClass.php");
$con = dbClass::connect2Db();

//$con = mysql_connect("103.246.246.81", "jianfeideorg", "mmjUgAVZVk");
if (!$con)
{
  die("connect error!");
}

//mysql_select_db("jianfeideorg", $con);
$selectSql = "select * from blog order by date desc";
$result = mysql_query($selectSql);
$content = '';
while ($row = mysql_fetch_array($result))
{ 
        //echo ' $("#title").html(' . $row['name'] . ');$("artical").html(' . $row['blog'] . ');$("#date").html(' . $row['date'] . ');';
        //$title = $row[];
        $content .= '<h2>' .$row['name']. '</h2><p>' .nl2br($row['blog']). '</p><p><em>' .$row['date']. '</em></p>';
}

?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="blog.css" />
                <style>                       
			body {margin: 0px;}
                        #header {border-bottom: 1px solid #73AFB7; margin-top: 10px; padding-left: 15px;}
                        #menu {float:left; width: 175px; margin-top:  20px; padding-left: 10px;}
                        #content {margin-left:200px; padding-left:10px; border-left:1px solid #D6ECAE}
                        #footer {clear: both; padding-top:10px; border-top:1px solid #294E56; color: #666; text-align: center}
                        
                        #header span {float: right}
                        #menu ul {list-style-type: none;}
                        #menu li {margin-bottom: 10px;}
                        #title {font-family:Arial, Helvetica, sans-serif; line-height:175%; color: #006600;}
                        #artical {line-height:normal; color: #993366;}
                        
                </style>
		<title>Blog</title>
		<script src="blog.js" type="text/javascript"></script>
                <script src="jquery-1.7.2.js" type="text/javascript"></script>
                <script>
                $(function () {
                        $('#header a').click(function () {
                                $.post('', {
                                        logout : true
                                }, function () {
                                        
                                }, 'json');
                                history.go(0);
                        });
                        
                });
                </script>
</head>

<body>
<div id="header"><h1>追梦</h1></div>
<div id="menu">
<ul>
        <li><a href="javascripot:void()">博客</a></li>
        <li><a href="javascripot:void()">英语</a></li>
        <li><a href="javascripot:void()">编程</a></li>
</ul>
</div>
<div id="content">
<?php echo $content; ?>
</div>
<div id="footer">Copyright 2006, Jianfeide.org </div>
</body>
</html>
