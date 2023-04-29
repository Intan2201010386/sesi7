<?php
//cara menyertakan konfigurasinya
   // include();
   // include_once();
   // require();
   // require_once();

   include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT ) or die("Koneksi ke DMBS Gagal");

   