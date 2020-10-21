<?php require('header.php') ?>
<!-- // This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether. -->

<body>

    <div class="grid-container"></div> <!-- Grid container for news items -->
    <?php require('data.php'); ?>
    <!-- Fetch articles array -->

    <?php foreach ($article as $art) : ?>
        <div class="grid-item">
            <h1> <?php echo $art['title']; ?> </h1>
            <p class="p-content"> <?php echo $art['content']; ?></p>

            <?php echo '- ', $art['author']; ?><br>

            <?php echo ' ' . $art['publishedDate']; ?>
            <?php echo ' ' . $art['likes'] + rand(0, 10000) . '❤'; ?>
            </p>
        </div>
    <?php endforeach; ?>

    <?php require('footer.php'); ?>