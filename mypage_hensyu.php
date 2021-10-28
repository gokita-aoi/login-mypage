<?php
mb_internal_encoding("utf8");

if(empty($_POST['from_mypage'])){
    header("Location:login_error.php");
}

//セッションスタート
session_start();



?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>

    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="logout"><a href="log_out.php">ログアウト</a></div>
        </header>
        <main>
            <form action="mypage_update.php" method="post">
                <div class="info_contents">
                    <h2>会員情報</h2>
                    <div class="info_top">
                        <?php echo "こんにちは！".$_SESSION['name']."さん"?>
                    </div>
                    <div class="info_img">
                        <img src="<?php echo $_SESSION['picture'];?>">
                    </div>    
                    <div class="info_basic">
                        <p>氏名:<input type="text" size="30" value="<?php echo $_SESSION['name'];?>" name="name"></p>
                        <p>メール:<input type="text" size="30" value="<?php echo $_SESSION['mail'];?>" name="mail"></p>
                        <p>パスワード:<input type="text" size="30" value="<?php echo $_SESSION['password'];?>" name="password"></p>
                    </div>
                    <div class="comments">
                        <input type="text" size="30" value="<?php echo $_SESSION['comments'];?>" name="comments">
                    </div>
                    <div class="button_center">
                        <input type="submit" class="button" value="この内容に変更する">
                    </div>    
                </div>        
            </form>
        </main>
        <footer>
            ©2018 InterNous.inc. All right reserved
        </footer>
    </body>
</html>