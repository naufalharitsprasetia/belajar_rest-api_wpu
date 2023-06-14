<?php 

// $mahasiswa = [
//     [
//     "nama" => "Sandhika Galih",
//     "nrp" => "432022611051",
//     "email" => "sandhikagalih@unpas.ac.id"
//     ],
//     [
//     "nama" => "Naufal Harits",
//     "nrp" => "432022611052",
//     "email" => "naufalharitsh@unpas.ac.id"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root' ,'');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

var_dump($mahasiswa);
$data = json_encode($mahasiswa);
echo $data;

?>