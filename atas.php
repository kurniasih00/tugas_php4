<?php
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas php 4</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <h1 class="atas-a">TAS RAJUT</h1>

    <div class="atas-b">
        <!-- Home | Produk | Galeri | Gesbuk | Kontak  -->
        <?php
            //looping foreach dari webmenu.php
            foreach ($menu_atas as $key => $value) {
                // echo "$key $value <br>";
                echo "<a href='index.php?hal=$key'>$value</a> | "; 
            }
        ?>
    </div> 
