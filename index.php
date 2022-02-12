<?php 

  $angka1 = 12;
  $angka2 = 25;
  $penjumlahan = $angka1 + $angka2;
  $pengurangan = $angka1 - $angka2;
  $perkalian = $angka1 * $angka2;
  $pembagian = $angka1 / $angka2;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>Angka 1 = <?= $angka1; ?></p>
  <p>Angka 2 = <?= $angka2; ?> </p>
  <p>Hasil Penjumlahan = <?= $penjumlahan; ?></p>
  <p>Hasil Perkalian = <?= $perkalian; ?></p>
  <p>Hasil Pembagian = <?= $pembagian; ?></p>
  <p>Hasil Pengurangan = <?= $pengurangan; ?></p>
</body>
</html>