<?php
$title = "Artiklar";
$title2 = "Läs våra artiklar";
include("../view/header.php");
require "../db/connectdb.php";

// Establish a database connection
$db = connectToDb($dsn);

// Fetch all articles from the Article table
$query = <<<EOD
SELECT id, title, content, category, author, pubdate
FROM Article
EOD;
$stmt = $db->prepare($query);
$stmt->execute();
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Store articles in session for later use
$_SESSION['articles'] = $articles;
?>

<main>
    <h1 class="home-h1">Artiklar</h1>
    
    <div class="container">
        

        <aside>
            <h3>Innehålls-förteckning</h3>
            <ul>
                <?php foreach ($articles as $article): ?>
                    <?php if ($article['id'] != 4): ?>
                        <li>
                            <a href="#article-<?= $article['id'] ?>">
                                <?= $article['title'] ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </aside>
        <div>
            <?php if (!empty($articles)): ?>
                <?php foreach ($articles as $article): ?>
                    <?php if ($article['id'] != 4): ?>
                        <div class='article' id="article-<?= $article['id'] ?>"> <!-- Add ID here -->
                            <h2>
                                <?= $article['title'] ?>
                            </h2>
                            <p>
                                <strong>Author:</strong>
                                <?= $article['author'] ?>
                            </p>
                            <p>
                                <strong>Category:</strong>
                                <?= $article['category'] ?>
                            </p>
                            <p>
                                <strong>Uppdaterat:</strong>
                                <?= $article['pubdate'] ?>
                            </p>
                            <br>

                            <p>
                                <?= nl2br($article['content']) ?>
                            </p>

                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No articles found.</p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php include("../view/footer.php"); ?>