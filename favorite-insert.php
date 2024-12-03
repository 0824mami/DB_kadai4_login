<?php require 'header.php'; ?>
<?php require_once 'config.php'; ?>
<?php require 'menu.php'; ?>
<?php
$id = $_REQUEST['id'];
	// データベース接続
	$pdo = db_connect(); 

if (isset($_SESSION['members'])) {

	$sql=$pdo->prepare('insert into favorite values(?,?)');
	$sql->execute([$_SESSION['members']['id'], $_REQUEST['id']]);
	echo 'お気に入りに商品を追加しました。';
	echo '<hr>';
	require 'favorite.php';
} else {
	echo 'お気に入りに商品を追加するには、ログインしてください。';
}
?>
<?php require 'footer.php'; ?>
