<?php
    $sever = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'coffehouse';

    $conn = new mysqli($sever, $user, $pass, $database);

    if($conn){
        mysqLi_query($conn, "SET NAMES 'utf8' ");
        echo 'Đã kết nối';
    }
    else
    {
    echo 'ket noi that bai';
    }
?>