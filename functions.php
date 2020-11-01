<?php

declare(strict_types=1);

function sortFunction($a, $b): int
{
    return strtotime($a["published"]) - strtotime($b["published"]);
}

usort($articles, "sortFunction");
$articles = array_reverse($articles);
