﻿<?php
    session_start(); //啟用session
if (!isset($_SESSION['id'])){   
    echo "請登入系統"; //顯示請登入系統
    echo "<meta http-equiv='refresh' content='3;url=index.html''>"; 
}else{
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    if (mysqli_connect_error($conn))
      die("無法連線資料庫");//若無匯入mydb.sql至數據庫 則顯示無法連結資料庫
    $sql="insert into bulletin(title, content, type, time) values ('{$_POST['title']}', '{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')"; 
    //echo $sql;
    if (!mysqli_query($conn, $sql)){
     echo("Error description: " . mysqli_error($conn));   
    }
    else  
       echo "新增佈告成功";   //顯示新增佈告成功
    mysqli_close($conn);
    echo "<meta http-equiv='refresh' content='3;url=bulletin.php''>"; 
}
?>
