<?php session_start(); ?>
<!-- 単一の役割：session関数呼び出しでセッション開始favorite.oho（お気に入り表示）をrequireで呼び出すのみ(cart-show同様) -->
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
require 'favorite.php';
?>
<?php require 'footer.php'; ?>
