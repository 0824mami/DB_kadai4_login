<?php require 'header.php'; ?>
<?php require_once 'config.php'; ?>
商品名を入力してください。
<?php // データベース接続
$pdo = db_connect();?>
<form action="search-output2.php" method="post">
    <input type="text" name="keyword">
    <input type="submit" value="検索">
</form>
<?php require 'footer.php'; ?>