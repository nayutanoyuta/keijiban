<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>ログイン</title>
  <link rel="stylesheet" type="text/css" a href="login.css">
</head>

    
<body>
 <header>
     
     <img src="4eachblog_logo.jpg">
     <div class="login"><a href="login.php">ログイン</a></div>    
     
 </header>

<main>

      <form method="post" action="mypage.php">
        <div class="form_contents">
     
         <label>メールアドレス</label>
         <br>
         <input type="text" class="formbox" size="40"
                value="<?php

                        echo $_COOKIE['mail'];
                       
                       ?>" name="mail">
         <br>
         <br>
         <label>パスワード</label>
         <br>
         <input type="password" class="formbox" size="40"
                value="<?php
      
                        echo $_COOKIE['password'];
                       
                       ?>" name="password">
         <br>
         <br>
         <br>
         <br>
         <br>
         <div class="button">
          <input type="submit" class="submit_button" size="30" value="ログイン">
         </div>
        </div>
     </form>
     
  </main>

  <footer>
    
    ©2018 InterNous.inc.All rights reserved
    
  </footer>    

 </body>
</html>