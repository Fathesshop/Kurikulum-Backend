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
function sortname(array $students)
{
    foreach ($students as $key => $value)
    {
        $id[] = $value["id"];
        asort ($id);
        $name[] = $value["name"];
        asort ($name);
        $division[] = $value["division"] == "PHP Backend";
        asort ($division);
    }
    array_multisort($id, SORT_ASC, $students);
    print_r($id);
    array_multisort($name, SORT_ASC, $students);
    print_r($name);
    array_multisort($division, SORT_ASC, $students);
    print_r($division);
}
sortname($students);
echo "\n";