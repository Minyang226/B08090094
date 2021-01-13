<?php
    error_reporting();//除去錯誤報告
    $conn=mysqli_connect("localhost","root","","mydb");
    // delete from bulletin where bid=???
    $sql="delete from bulletin where bid={$_GET[bid]}";
    //echo $sql;
    if (!mysqli_query($conn, $sql))
        echo "刪除錯誤";// 顯示刪除錯誤
    else{
        echo "刪除成功；回前頁中..."; //反之，則顯示刪除成功 回前頁中
        echo "<meta http-equiv='refresh' content='3;url=bulletin.php'>"; 
    }
?>