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
echo "daftar santri berdasar nomor induk kecil ke besar"."\n";
function id($bio)
{
    sort($bio);
    print_r($bio);
}
id($students);
echo "daftar santri berdasar nama kecil ke besar"."\n";
function sortname($bio)
{
    foreach ($bio as $key => $value)
    {
        $name[] = $value["name"];
    }
    array_multisort($name,$bio);
    print_r($bio);
}
sortname($students);
echo "daftar santri yang minat PHP Backend"."\n";
function division($bio)
{
    foreach ($bio as $key => $value) 
    {
        if($bio[$key]["division"]=="PHP Backend")
        print_r($bio[$key]);
    } 
}
division($students);
echo "jumlah santri berusia kurang dari 25"."\n";
function age($bio)
{
    foreach ($bio as $key => $value) 
        {
            if($bio[$key]["age"]<25)
            print_r($bio[$key]);
        } 
}
age($students);
echo "rata-rata usia santri"."\n";
function mean($bio)
{
    foreach ($bio as $key => $value)
    {
        $umur_santri[] = $value["age"];
    }
    $mean_santri = array_sum($umur_santri) / count($umur_santri);
    echo $mean_santri."\n";
}
mean($students);
echo "urutan umur santri dari paling muda"."\n";
function sortage($bio)
{
    foreach ($bio as $key => $value)
    {
        $age[] = $value["age"];
    }
    array_multisort($age,$bio);
    print_r($bio);
}
sortage($students);
echo "==========TAMAT=========="."\n";