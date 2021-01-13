<html>
<title>新增佈告</title> //標題為新增佈告
<body>
    <h2>新增佈告</h2> //改字型
    <form action="bulletin_add.php" method="post">
    標題：<input  type="text" name="title" size="100"><p> //創建一個可輸入的text
    佈告內容：<p> 
	<textarea rows="20" cols="100" name="content"></textarea> 
    <p>
    佈告類型：<input type="radio" name="type" value="1" checked >系上公告   //創建一個type 代表系上公告
              <input type="radio" name="type" value="2">招生訊息  //創建一個type  代表招生訊息
              <input type="radio"  name="type" value="3">企業徵才 //創建一個type  代表企業徵才

    <p>      
    發佈時間：<input  type="date" name="time"><p>   //創建一個可選擇日期的date 代表發佈時間   
    <input type=submit value="發佈"><p> //創建一個屬性為submit的按鈕
  </form>
</body>
</html> 
