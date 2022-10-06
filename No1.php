<?php
class No1{
    public $name;
    public $age;
    public $major;
    public $is_active = 'true';
}

$obj = new No1();
echo 'Nama: ' . $name = 'Andrew' . '<br>';
echo 'Umur: ' . $obj->age = 17 . '<br>';
echo 'Jurusan: ' . $obj->major = 'Rekayasa Perangkat Lunak' . '<br>';
echo 'Aktif: ' . $obj->is_active;
/* Output:
Nama: Andrew
Umur: 17
Jurusan: Rekayasa Perangkat Lunak
Aktif: true */