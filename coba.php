<?php 
function salam($nama){
    echo "nama saya $nama";
}
$students = ["Jarjit", "Mail", "Upin", "Ehsan"];
echo "<h5>Nama murid Tadika Mesra</h5>";
echo "<ul>";
$a = 0;
foreach($students as $students){
// echo "<li>$students</li>";
salam($students);
}
echo "</ul>";

// $array = [
//     [
//         "penulis" => "burhan abdi",
//         "judul_buku" => "burhan lagi",
//         "terjemahan" => "bahasa asing",
//     ],
//     [
//         "penulis" => "burhan abdi",
//         "judul_buku" => "burhan lagi",
//         "terjemahan" => "bahasa asing",
//     ]
// ];
// foreach($array as $value){
//   echo "<h1>"."penulis :".$value["penulis"]."</h1>";
//   echo "<h1>"."judul_buku :".$value["judul_buku"]."</h1>";
//   echo "<h1>"."terjemahan :".$value["terjemahan"]."</h1>";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="read.php" method="post">
Nama: <input type="text" name="nama" />
<br />
Email: <input type="text" name="email" />
<br />
<input type="submit" value=”Submit" >
</form>
</body>
</html>