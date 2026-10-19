<?php
$barang = [
    ["B001", "Buku", 5000],
    ["B002", "Pensil", 3000],
    ["B003", "Penghapus", 2000],
    ["B004", "Penggaris", 7000]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabel Data Barang</title>
</head>
<body>

<h2>Data Barang</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga</th>
    </tr>

    <?php
    foreach ($barang as $data) {
        echo "<tr>";
        echo "<td>" . $data[0] . "</td>";
        echo "<td>" . $data[1] . "</td>";
        echo "<td>Rp " . $data[2] . "</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>