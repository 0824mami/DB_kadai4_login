<?php require 'header.php'; ?>
<?php require_once 'config.php'; ?>
<?php
// データベース接続
$pdo = db_connect(); // 関数を使ってPDO接続を取得
$sql = $pdo->prepare('delete from product where id=?');
if ($sql->execute([$_REQUEST['id']])) {
	echo '削除に成功しました。';
} else {
	echo '削除に失敗しました。';
}
?>
<?php require 'footer.php'; ?>
