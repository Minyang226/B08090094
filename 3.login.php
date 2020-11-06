<?php 
  
    if (($_GET[id] == "john") && ($_GET[pwd]=="john1234"))
    //如果拿到的id=john以及拿到的密碼為john1234，則回應welcome
        echo "Welcome";
    else
        echo "fail login";
        //反之則顯示fail login
?> 