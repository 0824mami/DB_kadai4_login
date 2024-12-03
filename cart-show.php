<?php session_start(); ?>
<!-- 単一の役割：session関数呼び出しでセッション開始→カート表示）をrequireで
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
require 'cart.php';
?>
<?php require 'footer.php'; ?>
