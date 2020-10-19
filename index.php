<?php require('header.php') ?>
<!-- // This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether. -->

<!-- 
    - What exactly should this file contain?
    - Foreach, loops functions could be replaced with requires?
    - .. 
-->

<!-- TODO: 
    - Learn how to make comments.. Vincent tips på läsning?
    - Figure out how to connect News items array $articleItems and author array $authors
    with a proper purpose
    - editorconfig. 
    - In $articleItems, should publishedDates => string or int?
    - Do Vincent prefer header, footer and body to be seperate or no?
    - -->

<body>

    <div class="grid-container"></div> <!-- Grid container for news items -->
    <?php require('data.php'); ?>
    <!-- Fetch articles array -->

    <?php foreach ($articleItems as $article) : ?>
        <div class="grid-item">
            <h1> <?php echo $article['title']; ?> </h1>
            <p class="p-content"> <?php echo $article['content']; ?></p>
            <a href="authorinfo.php">
                <!-- This authorinfo.php is just for testing as of now! See file.. -->
                <p class="p-author">
                    <?php echo '-', $article['author']; ?><br>
            </a>
            <?php echo ' ' . $article['publishedDate']; ?>
            </p>
        </div>
    <?php endforeach; ?>
    <?php require('footer.php'); ?>