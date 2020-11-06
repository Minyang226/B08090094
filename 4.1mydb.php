<?php
 
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    //連接MySQL數據庫
    $result=mysqli_query($conn, "select * from user");
//找出資料
    $row=mysqli_fetch_array($result);
//取得$result傳回資訊的資料，而$result的資訊則可由mysql_query()來檢索資料庫後取得
    echo $row[id] + " " + $row[pwd]; 
    //回應Id+pwd
?>