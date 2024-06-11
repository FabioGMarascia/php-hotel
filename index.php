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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP HOTEL</title>
</head>

<body>

    <div class="row mx-0 justify-content-center">
        <div class="col-5 deb px-0 text-center">
            <h1 class="text-warning display-3 fw-bold text-center">HOTELS</h1>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">NAME</th>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">PARKING</th>
                        <th scope="col">VOTE</th>
                        <th scope="col">DISTANCE TO CENTER</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <?php
                        foreach ($hotels[0] as $hotel) {
                            echo "<td>" . $hotel . "</td>";
                        }
                        ?>
                    </tr>

                    <tr>
                        <?php
                        foreach ($hotels[1] as $hotel) {
                            echo "<td>" . $hotel . "</td>";
                        }
                        ?>
                    </tr>

                    <tr>
                        <?php
                        foreach ($hotels[2] as $hotel) {
                            echo "<td>" . $hotel . "</td>";
                        }
                        ?>
                    </tr>

                    <tr>
                        <?php
                        foreach ($hotels[3] as $hotel) {
                            echo "<td>" . $hotel . "</td>";
                        }
                        ?>
                    </tr>

                    <tr>
                        <?php
                        foreach ($hotels[4] as $hotel) {
                            echo "<td>" . $hotel . "</td>";
                        }
                        ?>
                    </tr>

                </tbody>



            </table>

        </div>
    </div>

</body>

</html>