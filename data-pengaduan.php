<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM `laporan`");
?>

<table border="1">
    <tr>
        <td>id</td>
        <td>id_user</td>
        <td>judul</td>
        <td>kategori</td>
        <td>lokasi</td>
        <td>keterangan</td>
        <td>status</td>
        <td>feedback</td>
    </tr>
    <?php
    while($data = mysqli_fetch_assoc($query)){?>

    }
</table>