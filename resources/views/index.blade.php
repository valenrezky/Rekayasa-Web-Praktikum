<h2> Tampil data </h2>


<?php

$model = new App\Models\Mahasiswa;

echo "<pre>";
$data=$model->all();
foreach($data as $isi) {
echo "NIM : ".$isi->nim."<br />";
echo "Nama : ".$isi->nama."<br />";
echo "Alamat : ".$isi->alamat."<br />";
echo "Jurusan : ".$isi->jurusan."<br />";
echo "<hr />";
}

$model = new App\Models\Dosen;

echo "<pre>";
$data=$model->all();
foreach($data as $isi) {
echo "NIDN : ".$isi->nidn."<br />";
echo "Nama : ".$isi->nama."<br />";
echo "Alamat : ".$isi->alamat."<br />";
echo "Fakultas : ".$isi->fakultas."<br />";
echo "<hr />";
}

?>
