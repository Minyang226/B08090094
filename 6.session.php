<?php
    error_reporting(0);
    
    $conn = mysqli_connect("localhost","root","", "mydb");
    if (mysqli_connect_error($conn))//若無匯入mydb.sql至數據庫 則顯示資料庫連線錯誤
        die("資料庫連線錯誤");

    mysqli_set_charset($conn, "utf8");//與數據庫進行數據傳送時使用的默認字符集
    $result=mysqli_query($conn, "select * from user");//用result執行對某數據庫的查詢
    
    $login=FALSE; //LOGIN預設值為FALSE
    while ($row=mysqli_fetch_array($result)) {
        if ($_POST["id"] == $row["id"] && $_POST["pwd"]==$row["pwd"]) 
        $login=TRUE; //若輸入的帳號與密碼與資料庫相符 則 lOGIN的值改為TRUE
    }
    
    if  (!$_POST["id"] || !$_POST["pwd"]){
           echo "請輸入帳號/密碼";  //介面顯示請輸入帳號/密碼
           echo "<meta http-equiv='refresh' content='3;url=login.html''>";              
    }
    elseif ($login==TRUE){
      session_start();//啟用session_start
      $_SESSION["id"] = $_POST['id']; //若session儲存的id=資料庫裡的id  
      echo "歡迎登入";   //顯示歡迎登入 
    }
    else{
      echo "帳號密碼錯誤";//反之則顯示帳號密碼錯誤
      echo "<meta http-equiv='refresh' content='3;url=login.html''>";          
    }
?>