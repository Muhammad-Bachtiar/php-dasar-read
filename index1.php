<?php
//menghubungkan ke databse mysql
$host = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel siswa atau query
//$result = variable yang disarankan php untuk menecek keberadaan tabel
//$result akan mengembalikan nilai true jika tabel ada, false jika tabel tidak ada
$result = mysqli_query($host, "SELECT * FROM siswa");

// mengambil data siswa (fetch) dari result
// mysqli_fetch_assoc() mengembalikan data dalam bentuk array associative
// mysqli_fetch_array() mengembalikan data dalam bentuk array numerik dan associative
// mysqli_fetch_row() mengembalikan data dalam bentuk array numerik
// mysqli_fetch_object() mengembalikan data dalam bentuk object
$row = mysqli_fetch_assoc($result);
// while ($rows = mysqli_fetch_assoc($result)) {
//     var_dump( $rows["nama"]);
// }
// while($row = mysqli_fetch_assoc($result)){
//     $ro[]= $row;
// }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>daftar siswa</h1>
    <a href="add.php">Tambah Data Siswa</a>
    <table border="1" cellpadding="15" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
        </tr>

            <?php $no = 1; ?>
            
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td> <?php echo $no; ?></td>
            <td> <?php echo $row["nis"]; ?></td>
            <td> <?php echo $row["nama"]; ?></td>
            <td> <?php echo $row["jurusan"]; ?></td>
            <td> <?php echo $row["alamat"]; ?></td>
            <?php $no++?>
        </tr>
        
        <?php endwhile; ?>
    </table>
</body>
</html>