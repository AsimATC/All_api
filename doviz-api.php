<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    $kaynak = file_get_contents("https://finans.truncgil.com/today.json");
    $data = json_decode($kaynak, true);

    //print_r($data);



    $degisim = $data['resat-altin']['Değişim'];


    $degisim2 = str_replace("%", "", $degisim);
    $deger = str_replace(",", "", $degisim2);

    // echo $deger;

    if (($deger * 100) >= 0) {
        echo '<div style="color:green;">' . $degisim . ' </div>';
    } else {
        echo '<div style="color:red;">' . $degisim . ' </div>';
    }
    ?>
</body>

</html>