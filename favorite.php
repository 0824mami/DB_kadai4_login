<?php require 'header.php'; ?>
<?php require_once 'config.php'; ?>
<?php
if (isset($_SESSION['members'])) {
	echo '<table>';
	echo '<th>商品番号</th><th>商品名</th><th>価格</th>';
	$pdo = db_connect(); 

	$sql=$pdo->prepare(
		'select * from favorite, product '.
		'where member_id=? and product_id=id');
	$sql->execute([$_SESSION['members']['id']]);
	foreach ($sql as $row) {
		$id=$row['id'];
		echo '<tr>';
		echo '<td>', $id, '</td>';
		echo '<td><a href="detail.php?id='.$id.'">', $row['name'], 
			'</a></td>';
		echo '<td>', $row['price'], '</td>';
		echo '<td><a href="favorite-delete.php?id=', $id, 
			'">削除</a></td>';
		echo '</tr>';
	}
	echo '</table>';
} else {
	echo 'お気に入りを表示するには、ログインしてください。';
}
?>
