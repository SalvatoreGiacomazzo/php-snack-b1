<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ],

    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];



//Stampare array mostrando in pagina in un rettangolo grigio e i PM in un rettangolo verde
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./general-style/style.css">
</head>

<body>
    <div id="teachers">
        <?php foreach ($db['teachers'] as $teacher) { ?>
            <?= $teacher['name'] . $teacher['lastname'] ?>

        <?php } ?>

    </div>

    <div id="pm">
        <?php foreach ($db['pm'] as $singlePM) { ?>
            <?= $singlePM['name'] . $singlePM['lastname'] ?>

        <?php } ?>
    </div>

</body>

</html>