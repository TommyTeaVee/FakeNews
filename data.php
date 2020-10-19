<?php

declare(strict_types=1);

$authors = [
    'ID' => 'Jane Doe',
    'FullName' => 'Jane Doe'
];

$articleItems = [

    /*  Push date information as string or int?
        Array might need to be renamed */

    [
        'title' => 'The best article title',
        'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Libero ea vitae incidunt aliquid voluptatum ipsa natus repellat architecto modi,
        dignissimos nobis minus et nulla corrupti laborum,
        molestias quis nihil voluptates?',
        'author' => 'Lucas Skrivaborg',
        'publishedDate' => '2015-09-12'
    ],
    [
        'title' => 'The second fake article',
        'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Libero ea vitae incidunt aliquid voluptatum ipsa natus repellat architecto modi,
        dignissimos nobis minus et nulla corrupti laborum,
        molestias quis nihil voluptates?',
        'author' => 'Lucas Skrivaborg',
        'publishedDate' => '2016-02-23'
    ],
    [
        'title' => 'Third real fake article',
        'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Libero ea vitae incidunt aliquid voluptatum ipsa natus repellat architecto modi,
        dignissimos nobis minus et nulla corrupti laborum,
        molestias quis nihil voluptates?',
        'author' => 'Lucas Skrivaborg',
        'publishedDate' => '2015-09-12'
    ],
    [
        'title' => 'Fourth of the fake ones?',
        'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Libero ea vitae incidunt aliquid voluptatum ipsa natus repellat architecto modi,
        dignissimos nobis minus et nulla corrupti laborum,
        molestias quis nihil voluptates?',
        'author' => 'Lucas Skrivaborg',
        'publishedDate' => '2016-02-23'
    ],
    [
        'title' => 'Five real articles are too many',
        'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Libero ea vitae incidunt aliquid voluptatum ipsa natus repellat architecto modi,
        dignissimos nobis minus et nulla corrupti laborum,
        molestias quis nihil voluptates?',
        'author' => 'Lucas Skrivaborg',
        'publishedDate' => '2015-09-12'
    ],
    [
        'title' => 'Sixth article is pretty kye',
        'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Libero ea vitae incidunt aliquid voluptatum ipsa natus repellat architecto modi,
        dignissimos nobis minus et nulla corrupti laborum,
        molestias quis nihil voluptates?',
        'author' => 'Lucas Skrivaborg',
        'publishedDate' => '2016-02-23'
    ],
    [
        'title' => '7 Whats up?',
        'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Libero ea vitae incidunt aliquid voluptatum ipsa natus repellat architecto modi,
        dignissimos nobis minus et nulla corrupti laborum,
        molestias quis nihil voluptates?',
        'author' => 'Lucas Skrivaborg',
        'publishedDate' => '2015-09-12'
    ],
    [
        'title' => 'Sk8 4 f8 nr 8',
        'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Libero ea vitae incidunt aliquid voluptatum ipsa natus repellat architecto modi,
        dignissimos nobis minus et nulla corrupti laborum,
        molestias quis nihil voluptates?',
        'author' => 'Lucas Skrivaborg',
        'publishedDate' => '2016-02-23'
    ],
    [
        'title' => 'Nines are less than..?',
        'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Libero ea vitae incidunt aliquid voluptatum ipsa natus repellat architecto modi,
        dignissimos nobis minus et nulla corrupti laborum,
        molestias quis nihil voluptates?',
        'author' => 'Lucas Skrivaborg',
        'publishedDate' => '2015-09-12'
    ],
    [
        'title' => 'Herzog was a ten',
        'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Libero ea vitae incidunt aliquid voluptatum ipsa natus repellat architecto modi,
        dignissimos nobis minus et nulla corrupti laborum,
        molestias quis nihil voluptates?',
        'author' => 'Lucas Skrivaborg',
        'publishedDate' => '2016-02-23'
    ]

];




// This is the file where you can keep your data arrays such as articles and
// authors.

// Both the authors and the news feed items should be stored in 
// arrays in a structure that's simple to use in your code and that's
//  easily understandable.
//  The authors and news feed items don't have to be within the same array 
//  but some sort of connection should exist between a news feed item and it's author. 
//  The news feed items should be ordered based on the published date,
//  so the latest news feed item should go on top and vice versa.