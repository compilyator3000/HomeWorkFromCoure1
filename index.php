<?php
require_once 'sql.php';
error_reporting(0);
if ($_GET['title']==''&& $_GET['add']=='') {
    if ($_GET['delArtic'] == 'true') {
        removeNews($_GET['name']);
    }
    echo "<h2>News</h2>";
    $contentTitle = getTitleNews();
    foreach ($contentTitle as $title) {
        echo "<a href='page.php?title=$title'> $title</a><br>";
    }
    echo "<hr>";
    echo "<br><a href='index.php?add=1'> add article</a>";

    if ($_GET['submit'] == 'true') {
        addNews($_GET['name'], $_GET['text']);
    }




}elseif ($_GET['add']!=''){?>

    <form action="index.php" method="get">
        <label>Name articles</label><br>
         <input type="text" name="name"><br>
        <label>Filling</label><br>
        <input type="text"  name="text"   size="100px" height="50px">
        <button type="submit" name="submit" value="true"> submit</button>
    </form>


<?php } ?>




