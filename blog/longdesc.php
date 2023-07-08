<?php

include 'databaseconnect.php';

$sql = "SELECT * FROM `blogcontent` ";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
$blogid=$_GET['blogno'];
while($row = mysqli_fetch_assoc($result)){
    if($blogid==$row['blogno']){
        if($row['admin']==1){
            echo $row['longdesc'];
        }
        if($row['admin']==0){
            echo "the article is unable to upload";
        }
    }
    }
?>
