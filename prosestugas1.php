<?php

    $nama = $_POST['nama'];

    echo "<p>Nama : $nama</p>";
    echo "<br>";

    $Email = $_POST['email'];

    echo "<p>Email : $Email</p>";
    echo "<br>";

    $Alamat = $_POST['alamat'];

    echo "<p>Alamat : $Alamat</p>";
    echo "<br>";

    $Progpel = $_POST['progpel'];

    echo "<tabel><tr><td><p>Program Pelatihan : </td><td>$Progpel</p></td></tr></tabel>" ;
    echo "<br>";

    $Thndaf = $_POST['thndaf'];

    echo "<tabel><tr><td><p>Tahun Daftar : </td><td>$Thndaf</p></td></tr></tabel>";
    echo "<br>";

?>