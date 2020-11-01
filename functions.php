<?php

declare(strict_types=1);
function sortFunction($a, $b)
{
    return strtotime($a["published"]) - strtotime($b["published"]);
}

// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.