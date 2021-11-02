<?php
$connect = mysqli_connect('localhost','root','','crud');
if(!$connect){
    die("Have not connect with DB");
}






function getTitleNews(){
    global $connect;
 $result = mysqli_fetch_all( mysqli_query($connect,'SELECT `title` FROM `news` WHERE 1'));
    $mac=array();
 foreach ($result as $item ){
   array_push($mac,"$item[0]");
 }

 return $mac;
}
function addNews(string $title,string $news){
    global $connect;
  return  mysqli_query($connect,"INSERT INTO `news`(`id`, `title`, `text`) VALUES (null,'$title','$news')");

}
function removeNews(string $title){
    global $connect;
   return mysqli_query($connect,"DELETE FROM `news` WHERE `title`='$title'");


}
function getNewsItem(string $title){
    global $connect;
    return  mysqli_fetch_all(mysqli_query($connect,"SELECT `title`, `text` FROM `news` WHERE `title`='$title'"));
}
