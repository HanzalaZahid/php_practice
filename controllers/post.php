<?php 
$title  =   "Post";
$errors =   [];
$conn    =   Database::getInstance($config['database']);
$post_id    =   $_GET['id'];
$post   =   $conn->fetchOrAbort("SELECT * FROM posts where id=:id", [':id'=>$post_id]);
require_once('views/post.view.php');
?>