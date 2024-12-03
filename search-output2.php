<?php require 'header.php'; ?>
<?php require_once 'config.php'; ?>
<table>
	<tr>
		<th>商品番号</th>
		<th>商品名</th>
		<th>商品価格</th>
	</tr>
	<?php
// データベース接続
$pdo = db_connect(); // 関数を使ってPDO接続を取得
	$sql = $pdo->prepare('select * from product where name like ?');
	$sql->execute(['%' . $_REQUEST['keyword'] . '%']);
	foreach ($sql as $row) {
		echo '<tr>';
		echo '<td>', $row['id'], '</td>';
		echo '<td>', $row['name'], '</td>';
		echo '<td>', $row['price'], '</td>';
		echo '</tr>';
		echo "\n";
	}
	?>
</table>
<p><a href="all5.php">商品一覧を表示する</a></p>
<?php require 'footer.php'; ?>