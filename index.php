<?php
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($posts as $day => $dayPost) { ?>
        <h2>
            <?= $day;  ?> <!--Creazione di titoli coi giorni indicati nell'array associativo-->

        </h2>

        <ul>
            <?php foreach ($dayPost as $singlePost) { ?> <!--Stampato il titolo di ogni post per una determinata giornata-->
                <li>

                    <h3> Titolo post: <?= $singlePost["title"]; ?> </h4>
                        <h4> Autore:<?= $singlePost["author"]; ?></h5>
                            <p>Descrizione: <?= $singlePost["text"]; ?></p>
                </li>
            <?php  } ?>
        </ul>
    <?php  } ?>
</body>

</html>