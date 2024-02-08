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
/* Use the switch statement to select one of many blocks of code to be executed.

Syntax
switch (expression) {
  case label1:
    //code block
    break;
  case label2:
    //code block;
    break;
  case label3:
    //code block
    break;
  default:
    //code block
} */
$favcolor = "red";

switch ($favcolor) {
  case "Blue":
    echo "Your favorite color is Blue!";
    break;
  case "Black":
    echo "Your favorite color is Black!";
    break;
  case "Purple":
    echo "Your favorite color is Purple!";
    break;
  default:
    echo "Your favorite color is neither Blue, Black, nor Yellow!";
}
?>
 </div>
</div>
</body>
</html>
