<div style="height:2000px">
        <!-- Halaman Depan -->

    <?php
    //inde.php?hal=produk
        $hal=$_GET['hal'];
        if(!empty($hal)){
            include_once $menu_bawah[$hal];
        }
        else{
            include_once "home.php";
        }
    ?>
</div>


