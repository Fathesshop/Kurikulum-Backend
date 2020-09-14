<?php
echo "mau input berapa santri = ";
$santri = trim(fgets(STDIN));
for($i=1; $i <= $santri; $i++)
{
  echo "========== input data ke-"."$i =========="."\n";
  echo "nama = ";
  $data["nama"] = trim(fgets(STDIN));
  echo "nik = ";
  $data["nik"] = trim(fgets(STDIN));
  echo "jurusan = ";
  $data["jurusan"] = trim(fgets(STDIN));
  echo "devisi = ";
  $data["devisi"] = trim(fgets(STDIN));
  echo "usia = ";
  $data["usia"] = trim(fgets(STDIN));
  echo "==========||==========||==========||==========";
  echo "\n";
  $total[]=$data;
}
foreach ($total as $key => $value) 
{
  $soal1[] = $key["devisi"] == "backend";
  $soal2[] = $key["usia"] < 25;
  $soal3[] = $key["usia"];
}
print_r($soal1);
print_r($soal2);
$tugas3=min($soal3);
print_r($tugas3);
