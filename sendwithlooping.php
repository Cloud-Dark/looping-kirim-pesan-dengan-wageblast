<?php
include 'fungsi.php';
include 'koneksi.php';
  $jsonmentah = file_get_contents('./config.json', true);
  $config = json_decode($jsonmentah);
  $url = $config->url;
  $apitoken = $config->apitoken;

  $q = mysqli_query($koneksi, "SELECT * FROM penerima");
  $i = 0;

  while ($data = $q->fetch_assoc()) {
    echo "Data Yang Dikirim: ". json_encode($data);
    $nama = $data['namapenerima'];
    $nomor = $data['nomorpenerima'];
    $pesan = $data['pesan'];
    echo "<br>";
    $send = sendMSG($nomor, $pesan, $url, $apitoken);
    echo "Response Dari Server:  ". $send;
    $i++;
    echo "<hr>";

  }
    echo "Total Pesan dikirim: " . $i;
