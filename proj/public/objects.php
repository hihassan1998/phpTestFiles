<?php

$title = 'Objekt';
$title2 = 'Om';
include('../view/header.php');


if (isset($_SESSION['articles'])) {
    $articles = $_SESSION['articles'];
} else {
    echo "<p>No articles found in the session.</p>";
    exit;
}

?>


<main>
    <?php if (!empty($articles)): ?>
        <?php foreach ($articles as $article): ?>
            <?php if ($article['category'] == "about"): ?> <!-- Check if the article ID is 4 -->
                <div class='om-content'>
                    <h2><?= htmlspecialchars($article['title']) ?></h2>
                    <div>
                        <?= $article['content'] ?> <!-- Inject HTML content directly -->
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No data found.</p>
    <?php endif; ?>
</main>


<?php include('../view/footer.php'); ?>