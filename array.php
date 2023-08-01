<?php
$siswa = array("regi", "bobby", "ahmad");
print_r($siswa);

//menampilkan 1 array
echo "<br>" . $siswa[1] . "<br>";

$siswa[] = "putri";
print_r($siswa);

echo "<br>";
$siswa1 = [
    "nama" => "abduh",
    "Kelas" => "laravel",
    "nilai" => 70
];
print_r($siswa1);
?>