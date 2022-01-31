<?php
$jsonmentah = file_get_contents('./config.json', true);
$config = json_decode($jsonmentah);
if (!function_exists('sendMSG'))   {
function sendMSG($number, $pesan, $url, $apitoken)
{
    $url = "$url/api/send.php?api_key=$apitoken";

    $data = [
        "number" => $number,
        "pesan" => $pesan
    ];


    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => json_encode($data),
      CURLOPT_HTTPHEADER => array(
        'AccessKey: jLLNd-C3IGs-LLYTx-tMrZ5-XLsN7-Ilh1E-ov1mZ-l0AqK',
        'UserId: 2327887',
        'Content-Type: text/plain',
        'Cookie: PHPSESSID=aanbnbc5kv57l1b8p1dp7so135'
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;


}
}
