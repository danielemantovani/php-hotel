<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Eleganza storica su un famoso canale, con terrazza panoramica e servizio impeccabile.',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Camere confortevoli in posizione strategica, perfetto per viaggiatori con budget limitato.',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel a conduzione familiare con camere semplici e colazione inclusa, vicino a ristoranti e attrazioni.',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Lusso storico con camere eleganti, ristorante gourmet e viste mozzafiato.',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Camere pulite e semplici con viste panoramiche, ideale per un soggiorno economico.',
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
    <!-- CDN Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>

    <table class="table">
        <thead class="fs-4">
            <tr>
                <th scope="col" class="text-info">Nome Hotel</th>
                <th scope="col" class="text-info">Descrizione</th>
                <th scope="col" class="text-center text-info" >Parcheggio</th>
                <th scope="col" class="text-center text-info" >Stelle</th>
                <th scope="col" class="text-center text-info" >Distanza dal centro</th>
            </tr>
        </thead>
        <?php foreach ($hotels as $cur_hotel) { ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $cur_hotel["name"] ?></th>
                    <td><?php echo $cur_hotel["description"] ?></td>
                    <td class="text-center"><?php echo $cur_hotel["parking"] ?></td>
                    <td class="text-center"><?php echo $cur_hotel["vote"] ?></td>
                    <td class="text-center"><?php echo $cur_hotel["distance_to_center"] ?> Km</td>
                </tr>
            </tbody>
        <?php } ?>
    </table>

</body>

</html>