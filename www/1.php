<?php 
echo 2;




$servername = "mysql57";
$username = "root";
$password = "2240881";
 
try {
    $conn = new PDO("mysql:host=$servername;", $username, $password);
    echo "连接成功"; 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>


