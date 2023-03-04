<?php 
    require('partials/header.php');
    ?>
    <h1>Create Post</h1>
    <?php 
        if(!empty($errors)){
                echo "<ul>";
                foreach($errors as $error){
                    echo "<li>$error</li>";
                }
                echo "</ul>";
        }
    ?>
    <form action="create-post" method="POST" style="display:flex; flex-direction:column; width:50%;">
        <input name="title" placeholder="Enter Title Here">
        <textarea name="body" id="" cols="30" rows="10" placeholder="Enter Post Body Here"></textarea>
        <button type="submit">Create</button>
    </form>
    <?php
    require('partials/footer.php');
?>