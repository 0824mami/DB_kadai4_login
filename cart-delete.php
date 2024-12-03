<?php require 'header.php'; ?>
<?php require_once 'config.php'; ?>
<?php require_once 'menu.php'; ?>
<?php
// データベース接続
$pdo = db_connect(); // 関数を使ってPDO接続を取得
unset($_SESSION['product'][$_REQUEST['id']]);
echo 'カートから商品を削除しました。';
echo '<hr>';
require 'cart.php';
?>
<?php require 'footer.php'; ?>