<?php
$json_data=file_get_contents("mhsw.json");
$obj = json_decode($json_data);
echo "Nim : "; echo $obj->nim;
echo "<br>";
echo "Nama : "; echo $obj->nama;
echo "<br>";
echo "Prodi: ";echo $obj->prodi;
echo "<br>";
echo "Makul: ";echo $obj->makul[0];
echo "<br>";
echo "Makul: ";echo $obj->makul[1];
echo "<br>";
echo "Makul: ";echo $obj->makul[2];
echo "<br>";
?>