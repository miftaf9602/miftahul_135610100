<?php 
    @$sisi = $_GET['sisi'];
    @$luas = $sisi * $sisi;
    @$keliling = 4 * $sisi;
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>PERSEGI</title>
    </head>
    <body>
        <form  method="GET">
            s (sisi) = 
            <input type="text" name="sisi" value="<?php echo $sisi; ?>"/>cm<br/>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Luas Persegi = ".$luas." cm^2<br/>";
                echo "Keliling Persegi = ".$keliling," cm";
            ?>
        </form>
    </body>
</hmtl>
