<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    // foreach ($hotels as $key => $cur_hotel){
    //     echo"<h4>{$cur_hotel['name']}</h4>";
    //     echo"<p>{$cur_hotel['description']}</p>";
    //     echo"<p>{$cur_hotel['parking']}</p>";
    //     echo"<p>{$cur_hotel['vote']}</p>";
    //     echo"<p>{$cur_hotel['distance_to_center']}</p>";
    // }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>
<body>

    <?php foreach($hotels as $index => $cur_hotel){ ?>
        <div>
            <h4><?php echo $cur_hotel["name"] ?></h4>
            <p><?php echo $cur_hotel["description"] ?></p>
            <p><?php echo $cur_hotel["parking"] ?></p>
            <p>Stelle: <?php echo $cur_hotel["vote"] ?></p>
            <p>Distanza: <?php echo $cur_hotel["distance_to_center"] ?> km</p>
        </div>
    <?php }?>
</body>
</html>