<?php
    error_reporting(0);
    
    $conn = mysqli_connect("localhost","root","", "mydb");
    if (mysqli_connect_error($conn))
        die("資料庫連線錯誤");     //若無匯入mydb.sql至數據庫 則顯示資料庫連線錯誤

    mysqli_set_charset($conn, "utf8"); //與數據庫進行數據傳送時使用的默認字符集
    $result=mysqli_query($conn, "select * from user"); //用result執行對某數據庫的查詢
    
    $login=FALSE; //將login的值設定為false
    while ($row=mysqli_fetch_array($result)) {
        if ($_POST["id"] == $row["id"] && $_POST["pwd"]==$row["pwd"])  //如果輸入的id 和 pwd 都與數據庫的資料相符，則login的值改為true
        $login=TRUE;
    }
    
    if  (!$_POST["id"] || !$_POST["pwd"]){  
           echo "請輸入帳號/密碼";   //介面 顯示 請輸入帳號/密碼
           echo "<meta http-equiv='refresh' content='3;url=login.html'>";              
    }
    elseif ($login==TRUE){
      echo "歡迎登入";     //如果輸入的ID和PWD與資料庫相符的話 則顯示歡迎登入
    }
    else{    
      echo "帳號密碼錯誤";  // 反之則顯示帳號密碼錯誤
      echo "<meta http-equiv='refresh' content='3;url=login.html'>";          
    }
?>
