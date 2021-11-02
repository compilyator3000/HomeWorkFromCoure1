<?php
require_once 'sql.php';

if($_SERVER['REQUEST_METHOD']=='GET'){

 $res=getNewsItem($_GET['title']);
 $res=$res[0];
 echo "<p>".$res[0]."</p>";
    print_r($res[1]);
    echo "<br><a href='index.php'>go to back</a>";
    echo "<br>";
    echo "<a href='index.php?delArtic=true&name=$res[0]'>remove</a>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="get"


</body>
</html>
