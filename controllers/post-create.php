<?php 
$title  =   "Create Post";
$errors =   [];
$conn    =   Database::getInstance($config['database']);
if($_SERVER['REQUEST_METHOD']   ===  'POST'){
    foreach($_POST as $key => $value){
        Validator::checkEmpty($key, $value);
    }
    if (empty($errors)){
        extract($_POST);
        $conn->insertOrAbort("INSERT INTO posts (title, body, user_id) VALUES (:title, :body, :user_id)", [
            'title'   => $title,
            'body'   => $body,
            'user_id'   => 1
        ]);
        $post_id    =   $conn->getLastInsertedId();
        header("location:/posts?id=$post_id");
    }
}
require_once('views/post-create.view.php');
?>