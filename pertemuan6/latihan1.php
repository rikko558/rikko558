<?php
// array
// membuat array
// $hari = array ("Senin", "Selasa", "Rabu");
// $bulan = ["Januari", "Februari", "Maret"];
// $arr = [100, "teks", true];
// menampilakn array
// versi debugging
// var_dump($hari);
// echo "<br>";
// print_r($bulan)
// // menampillkan 1 elemen pada array
// echo $arr[0];
?>


<!DOCTYPE html>
<!-- <html>
<head>
	<title>Latihan array</title>
	<style>
		.kotak {
			width: 30px;
			height: 30px;
			background-color: #BADA55;
			text-align: center;
			line-height: 30px;
			margin: 3px;
			float: left;
		}
	</style>
</head>
<body>

<div> class = "kotak">5</div>

</body>
</html>> -->

<?php
// $mahasiswa = [
// 	["Rakka Ardyansyah", "26132174", "rakaardiansyah120@unpas.ac.id", "Teknik Informatika"], ["Chikal Suryawan", "271327", "ChikalSurya45@unpas.ac.id", "Teknik Informatika"], ["Javansyah Ardiano", "281344", "JavanDino@unpas.ac.id", "Teknik Jaringan"], ["Alda tya", "291363", "Aldahestya@unpas.ac.id", "Teknik Jaringan"]

// ];

//Array Associatvie
// Definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat

$mahasiswa = [
	[
"nama" => "Rakka Ardyansyah",
"nrp"=> "2613214", 
"email" => "rakaardiansyah120@unpas.ac.id", 
"jurusan"=> "Teknik Informatika"
    ],

    [
"nama" => "Henza harsy",
"nrp"=> "2613221", 
"email" => "henzy@unpas.ac.id", 
"jurusan"=> "Teknik Jaringan"
    ], 

    [
"nama" => "Doddy arya",
"nrp"=> "2613231", 
"email" => "doddy21@unpas.ac.id", 
"jurusan"=> "Teknik Informatika"
    ],

    [
"nama" => "Eka Gustiwana",
"nrp"=> "2613241", 
"email" => "ekagusti45@unpas.ac.id", 
"jurusan"=> "Teknik Jaringan"
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<hl>Daftar Mahasiswa</hl>

    <?php foreach($mahasiswa as $mhs) : ?>
	<ul>
		<li>Nama : <?=  $mhs["nama"]; ?></li> 
		<li>NRP : <?=  $mhs["nrp"]; ?></li>
		<li>Jurusan : <?=  $mhs["jurusan"]; ?></li>
		<li>Email : <?=  $mhs["email"]; ?></li>
	</ul>
    <?php endforeach; ?>


</body>
</html>










