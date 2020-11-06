<?php
    error_reporting(0);
    //消除錯誤報告
    $conn = mysqli_connect("localhost","root","", "mydb");
    //連接MySQL數據庫
    if (mysqli_connect_error($conn))
        die("資料庫連線錯誤");
/*  如果有錯誤報告，則顯示資料庫連線錯誤 */

    mysqli_set_charset($conn, "utf8");
    $result=mysqli_query($conn, "select * from user");
    while ($row=mysqli_fetch_array($result)) {
        echo $row[id];
        echo " ";
        echo $row[pwd];
        echo "<br>";
        //回應id 空格  pwd 最後斷行
    }
?>