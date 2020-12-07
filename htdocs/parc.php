<?php
require 'voiture.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$car = new Voiture("BE 000", "16/02/2004", 164000, "model", "audi", "rouge", 3000, "img/audi.jpg");
echo var_dump($car);
?>

<table>
    <tr>
        <th>Reserved</th>
        <th>Model</th>
        <th>Country</th>
        <th>Used</th>
        <th>Age</th>
        <th>Immatriculation</th>
        <th>Date</th>
        <th>Marque</th>
        <th>Couleur</th>
        <th>Poids</th>
        <th>Km</th>
        <th>Image</th>
    </tr>
        <?php
$car->display();
/* Add new class x9 */
?>
</table>
</body>
</html>
