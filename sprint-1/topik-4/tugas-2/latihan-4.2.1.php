<?php
$students = [
 [
     'id' => 'IT-001',
     'name' => 'Ridwan',
     'division' => 'PHP Backend',
     'age' => 25,
 ],
 [
     'id' => 'IT-010',
     'name' => 'Achmad',
     'division' => 'Java for Android',
     'age' => 23,
 ],
 [
     'id' => 'IT-005',
     'name' => 'Yusuf',
     'division' => 'ReactJS',
     'age' => 22,
 ],
 [
     'id' => 'IT-002',
     'name' => 'Arief',
     'division' => 'PHP Backend',
     'age' => 21,
 ],
 [
     'id' => 'IT-004',
     'name' => 'Dayat',
     'division' => 'React Native',
     'age' => 21,
 ],
 [
     'id' => 'IT-017',
     'name' => 'Lutfi',
     'division' => 'ReactJS',
     'age' => 18,
 ],
];
function data(array $students)
{
    foreach ($students as $key => $value)
    {
        $id[] = $value["id"];
        $name[] = $value["name"];
        $division[] = $value["division"] == ("PHP Backend");
        $age[] = $value["age"] < 25;
        $umur_santri[] = $value["age"];
        $mean_santri = array_sum($umur_santri) / count($umur_santri);
        $santri_muda = min($umur_santri);
    }
    echo "nomor induk kecil ke besar"."\n";
    array_multisort($id, $students);
    print_r($id);
    echo "nama kecil ke besar"."\n";
    array_multisort($name, $students);
    print_r($name);
    echo "minat 'PHP Backend'"."\n";
    print_r($division);
    echo "usia kurang dari 25 tahun"."\n";
    print_r($age);
    echo "rata-rata usia santri"."\n";
    print_r($mean_santri);
    echo "\n";
    echo "usia paling muda"."\n";
    print_r($santri_muda);
}
data($students);
echo "\n";