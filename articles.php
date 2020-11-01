<?php

declare(strict_types=1); ?>

<main class="grid-container"></main>
<?php require('data.php'); ?>
<?php foreach ($articles as $article) : ?>
    <div class="grid-item">
        <h1> <?php echo $article['title']; ?> </h1>
        <br>
        <p class="p-content"> <?php echo $article['content']; ?> </p><br>
        <p class="p-author"><?php echo '- ', $article['author']; ?> </p>
        <?php echo ' ' . $article['published']; ?>
        <?php echo ' ' . $article['likes'] + rand(0, 10000) . ' ❤'; ?>
    </div>
    <span class="article-end"></span>
<?php endforeach; ?>