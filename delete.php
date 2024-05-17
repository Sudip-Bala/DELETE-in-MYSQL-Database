<?php
$conn = new mysqli('localhost', 'root', '', 'sms');
if($conn){
$sql = "DELETE FROM students Where id = 1";

if($conn->query($sql)){
    echo "Deleted";
}
}else{
    echo "Not Deleted";
}
?>