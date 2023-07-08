<?php
include "databaseconnect.php";
$servername = "localhost";
$username = "root";
$password = "";
$database = "blog";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
$sql = "SELECT * FROM `image`";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
$blogid=$_GET['blogno'];
while($row = mysqli_fetch_assoc($result)){
    if($blogid==$row['blogno']){
        if($row['admin']==1){
            echo "<img src='https://drive.google.com/uc?export=view&id=".substr($row['filename'],32,-17)."' width='750' height='500'  alt='Image is unable to upload'>";
        }
        if($row['admin']==0){
            echo "the image is unable to upload";
        }
    }
}
?>