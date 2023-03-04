<?php 
    require('partials/header.php');
    ?>
    <h1>Posts</h1>
        <a href="/create-post">Create a new Post</a>
        <ul>
            <?php foreach($posts as $post): ?>
                <?php extract($post) ?>
                <?php echo '<li>'; ?>
                    <?php echo "<a href=/post?id=$id>$body</a>"; ?>
                <?php echo '</li>'; ?>
            <?php endforeach; ?>
        </ul>
    <?php
    require('partials/footer.php');
?>