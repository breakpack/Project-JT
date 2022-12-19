<?php
$conn = mysqli_connect( 'localhost', 'root', 'cha63788', 'jungtongdb') or die("connect faiiled..");
if(!$conn){
    echo 'db연결 실패';
}
else{
    echo 'db연결 성공';
}
?>