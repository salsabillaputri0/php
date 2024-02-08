<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="box">
        <div class="atas"><h1>DATA DIRI</h1></div>
        <div class="kiri">
            <div class="gambar"></div>
        </div>
        <div class="kanan">
            <pre> Nama:     Salsabilla Putri Ranesti<hr></pre>
            <pre> Nit:      2223612<hr></pre>
            <pre> TTL:      09-Januari-2007<hr></pre>
            <pre> Jurusan:  RPL<hr></pre>
            <pre> Tgl Pengumpulan: 6 Februari<hr></pre>
            <pre> Alamat:   Kalijati Barat<hr></pre>
<?php
/* The if...else statement executes some code if a condition is true and another code if that condition is false.

Syntax
if (condition) {
  // code to be executed if condition is true;
} else {
  // code to be executed if condition is false;
} */
$t = date("H");

if ($t < "20") {
  echo "Nice Try!";
} else {
  echo "Good Try!";
}
?>
 </div>
</div>
</body>
</html>
