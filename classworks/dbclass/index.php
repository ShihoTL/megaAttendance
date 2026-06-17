<?php
include "connection.php";
include "model.php";
$countries = fetchAllCountries($con);
$languages = fetchAllLanguages($con)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Country</th>
            <th>Continent</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($countries)): ?>
            <tr>
            <td><?= $row['Name'] ?></td>
            <td><?= $row['Continent'] ?></td>
        </tr>
        <?php endwhile ?>
    </table>
    <hr>
    <table>
        <tr>
            <th>Country Code</th>
            <th>Language</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($languages)): ?>
            <tr>
            <td><?= $row['CountryCode'] ?></td>
            <td><?= $row['Language'] ?></td>
        </tr>
        <?php endwhile ?>
    </table>

</body>
</html>