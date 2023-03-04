<?php 
$title  =   "Posts";
$conn = Database::getInstance($config['database']);
$posts = $conn->fetchAllOrAbort("SELECT * FROM posts");

require_once('views/posts.view.php');
?>