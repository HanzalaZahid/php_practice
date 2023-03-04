<?php 
    require('partials/header.php');
    ?>
    <h1>Posts</h1>
        <a href="/create-post">Create a new Post</a>
        <?php if(!empty($errors)): ?>
                <div class="errors">
                    <ul>
                        <?php foreach($errors as $error): ?>
                        <?php echo '<li>' . $error . '</li>'; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if (!empty($post)): ?>
                <p><?php echo $post['title']; ?></p>
                <p><?php echo $post['body']; ?></p>
            <?php endif ?>
    <?php
    require('partials/footer.php');
?>