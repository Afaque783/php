<?php 

require 'includes/database.php';

$conn = getDB();

$sql = "SELECT * FROM article
        ORDER BY published_at;";

$result = mysqli_query($conn, $sql);

if($result === false) {
    echo mysqli_error($conn);
}else {
    $articles = mysqli_fetch_all($result,MYSQLI_ASSOC);

}

?>
<?php require 'includes/header.php'; ?>

            <?php if(empty($articles)) : ?>
                <p>No Articles Found</p>\
            <?php else: ?>
                <ul>
                    <?php foreach ($articles as $article) : ?>
                        <li>
                            <article>
                                <h2>
                                    <a href="article.php?id=<?= $article['id'] ?>">
                                     <?= $article['title']; ?></a>
                                </h2>
                                <p><?= $article['content']; ?></p>
                            </article>
                        </li>
                    <?php endforeach; ?>
                </ul>
            
            <?php endif; ?>
<?php require 'includes/footer.php'; ?>