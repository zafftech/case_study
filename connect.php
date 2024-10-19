<?php
$servername = "sql211.infinityfree.com";  
$username = "if0_37544109";         
$password = "UnKqc4Y041ZJ5JI";             
$dbname = "if0_37544109_pms_nursery";    

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
