<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4</title>
</head>
<body>
    <?php
    $arrs = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" =>
    "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" =>
    "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United
    Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech
    Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" =>
    "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");
    
    foreach($arrs as $key=>$value){
    ?>
        Thủ đô của <?php echo $key?> là <?php echo $value?> <br>
    <?php } ?>
</body>
</html>