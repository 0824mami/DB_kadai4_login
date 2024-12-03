<?php require 'header.php'; ?>
<?php require_once 'menu.php'; ?>
<form action="login-output.php" method="post">
メールアドレス<input type="text" name="email"><br>
パスワード<input type="password" name="password"><br>
<input type="submit" value="ログイン">
</form>
<?php require 'footer.php'; ?>
