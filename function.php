<<<<<<< HEAD
<?php
function kenalkan($nama){
    echo "Kenalkan nama saya $nama";
}

//panggil function kenalkan
kenalkan("abduh <br>");

function  buat_nama_lagi($nama){
    return ucwords($nama);
}

$nama_lengkap = buat_nama_lagi("muhammad abduh");
echo $nama_lengkap;

function perkenalkan($nama, $asal){
    echo "<br>Perkenalkan nama saya ", buat_nama_lagi($nama), " asal saya dari $asal";
}

perkenalkan("muhammad abduh", "Bandung");
=======
<?php
function kenalkan($nama){
    echo "Kenalkan nama saya $nama";
}

//panggil function kenalkan
kenalkan("abduh <br>");

function  buat_nama_lagi($nama){
    return ucwords($nama);
}

$nama_lengkap = buat_nama_lagi("muhammad abduh");
echo $nama_lengkap;

function perkenalkan($nama, $asal){
    echo "<br>Perkenalkan nama saya ", buat_nama_lagi($nama), " asal saya dari $asal";
}

perkenalkan("muhammad abduh", "Bandung");
>>>>>>> b1432335cc60e34fffc9c0283526b0a3f8c36de2
?>