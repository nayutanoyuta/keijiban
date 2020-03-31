<?php
mb_internal_encoding("utf8");
session_start();

if(empty($_POST['from_mypage'])) {
    header("Location:http://localhost/login_mypage/login_error.php");
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>マイページ編集</title>
  <link rel="stylesheet" type="text/css" a href="mypage_hensyu.css">
</head>

    
<body>
 <header>
     
     <img src="4eachblog_logo.jpg">
     <div class="login"><a href="login.php">ログアウト</a></div>    
     
 </header>

<main>
     
     <div class="form1">
         
         <div class="form_contents">
             
          <h2>会員情報</h2>
             
           <div class="naiyo">
             <div class="hello">
               <?php echo "こんにちは！".$_SESSION['name']."さん"; ?>
             </div>
             <div class="pic">
               <img src="<?php echo $_SESSION['picture']; ?>">
             </div>
             
            <form action="mypage_update.php" method="post">
             <div class="kihon">
               
               <label>氏名：</label>
                 <input type="text" class="formbox" size="30" value="<?php echo $_SESSION['name']; ?>" name="name"><br>
                 <br>
               <label>メール：</label>
                 <input type="text" class="formbox" size="30" value="<?php echo $_SESSION['mail']; ?>" name="mail"pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br>
                 <br>
               <label>パスワード：</label>
                 <input type="password" class="formbox" size="30" value="<?php echo $_SESSION['password']; ?>" name="password" id="password" pattern="^[a-zA-Z0-9]{6,}$" required><br>
                 <input type="hidden" value="<?php echo rand(1,10); ?>" name="from_mypage_hensyu">
               <br>
             </div>
       
             <div class="comments">
                 <textarea rows="4" cols="84" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
             </div>
             <div class="hensyu_button">
                 <input type="submit" class="button1" value="この内容に変更する"/>
             </div>    
                
            </form>
               
           </div>
       </div>
                 
                    
     </div>
   
          
  </main>
 </body>
    
 <footer>
    
    ©2018 InterNous.inc.All rights reserved
    
 </footer>

</html>