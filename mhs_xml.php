<?php
include "koneksi.php";
header('Content-Type: text/xml');
$query = "SELECT * FROM mahasiswa";
$hasil = mysqli_query($con,$query);
$jumField = mysqli_num_fields($hasil);
echo "<?xml version='1.0'?>";
echo "<data>";
while ($data = mysqli_fetch_array($hasil))
{
 echo "<mahasiswa>";
 echo"<NIM>",$data['NIM'],"</NIM>";
 echo"<Nama>",$data['Nama'],"</Nama>";
 echo"<Jenis_kelamin>",$data['Jenis_kelamin'],"</Jenis_kelamin>";
 echo"<Alamat>",$data['Alamat'],"</Alamat>";
 echo"<Tanggal_Lahir>",$data['Tanggal_Lahir'],"</Tanggal_Lahir>";
 echo "</mahasiswa>";
}
echo "</data>";
?>
