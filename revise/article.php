
?>
<?php require 'includes/header.php' ?>
            <?php if($article === null) : ?>
                <p>No Articles Found</p>
            <?php else: ?>
                    <article>
                        <h2><?= htmlspecialchars($article['title']); ?></h2>
                        <p><?= htmlspecialchars($article['content']); ?></p>
                    </article>    
            
            <?php endif; ?>
<?php require 'includes/footer.php' ?>
       