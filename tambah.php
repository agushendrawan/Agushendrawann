<?php
      try{
        $host = "localhost";
        $dbname = "gajian";
        $username = "root";
        $pass = "";
        $koneksi = new PDO("mysql:host=" . $host . ";dbname=". 
        $dbname, $username, $pass);
        $koneksi->exec("set names utf8");

        $sql = "INSERT INTO gajian_guru VALUES (NULL, 'Andrian', '33 Tahun', 'Rp.2.500.000', '084124567')";
   
        $result = $koneksi->query($sql)->fetch();

        var_dump($result);

    }catch(PDOException $exception){
        echo "Database could not be connected: " . $exception->getMessage();
    }

    ?>