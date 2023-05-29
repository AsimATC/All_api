<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th {
            font-weight: bold;
            font-size: 14px;
            padding: 10px;
            background-color: #f1f1f1;
        }

        td {
            padding: 4px;
            border-bottom: 1px solid #eeeeee;
        }
    </style>
</head>

<body>

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.collectapi.com/football/league?data.league=super-lig",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: apikey 0iT8yXDbBKwVsmd2XGWzd6:7qCyU81GDUwdKMQ2A9iedp",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
}
    /////////////////////////////
    echo "<hr><pre>";
    $data = json_decode($response, true);

    //print_r($data['result']);

    $result = $data['result'];

    //print_r($response);
    ?>

    <table>
        <thead>
            <th>skor</th>
            <th>date</th>
            <th>away</th>
            <th>home</th>
        </thead>
        <tbody>
            <?php
            foreach ($result as $results) {
            ?>
                <tr>
                    <td><?php echo $results['team']; ?></td>
                    <td><?php echo $results['rank']; ?></td>
                    <td><?php echo $results['lose']; ?></td>
                    <td><?php echo $results['win']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>