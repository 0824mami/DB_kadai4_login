<?php require 'header.php'; ?>
<?php require_once 'config.php'; ?>
<p>商品を追加します。</p>
<?php // データベース接続
$pdo = db_connect(); ?>
<form action="insert-output2.php" method="post">
    商品名<input type="text" name="name">
    価格<input type="text" name="price">
    <input type="submit" value="追加">
</form>
<?php require 'footer.php'; ?>