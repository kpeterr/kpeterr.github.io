<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prime Rate Kft. | Cérnaszámoló</title>
    </head>
    <body>
        
        <h2>Prime Rate Kft. | Cérnaszámoló</h2>
        <p>Csak írd be a számokat, majd enter billentyű!</p>
        
        <form action="index.php" method="POST">
        <p>Oldalszám: </p> <input type="number" name="oldalszam">
        <p>Irkakilövés: </p> <input type="number" name="irkakiloves">
        <input type="submit" value="Számol">
        </form>
        <hr>
        
        
        <!-- PHP CODE -->
        <?php
        
            $oldalszam_be = $_POST["oldalszam"];
            $irkakiloves_be = $_POST["irkakiloves"];
                
            function tagszamolo($oldalszam, $irkakiloves){
                $maradek = ($oldalszam - $irkakiloves) % $irkakiloves;
                
                echo "Oldalszám: " . "<strong>" . $oldalszam . "</strong><br>";
                echo "Irkakilövés: " . "<strong>" . $irkakiloves . "</strong><br><br>";
                            
                echo "<strong>A tagok száma: </strong>";
                if ($oldalszam % 4 == 0) {
                    if ($maradek == 0) {
                        echo $oldalszam / $irkakiloves . "x" . $irkakiloves;
                    }
                    elseif ($maradek == 4) {
                        echo floor($oldalszam / $irkakiloves) - 2 . "x" . $irkakiloves . " + 1x";
                        $koztes = $irkakiloves;
                        echo $koztes + 4 . " + 1x" . $irkakiloves;
                    }
                    else {
                        echo floor($oldalszam / $irkakiloves) - 1 . "x" . $irkakiloves . " + 1x";
                        echo $maradek . " + 1x" . $irkakiloves;
                    }
                }
                else {
                    echo "Az oldalszámnak 4-gyel oszthatónak kell lennie!";
                }
            }
                
            function egesz_oldalak($oldalszam, $irkakiloves){
                $maradek = ($oldalszam - $irkakiloves) % $irkakiloves;
                
                echo "<strong>Első egész oldalak: </strong>";
                if ($oldalszam % 4 == 0) {
                    if ($maradek == 0) {
                        echo floor($oldalszam / $irkakiloves) * $irkakiloves;
                    }
                    elseif ($maradek == 4) {
                        echo (floor($oldalszam / $irkakiloves) - 2) * $irkakiloves;
                    }
                    else {
                        echo (floor($oldalszam / $irkakiloves) - 1) * $irkakiloves;
                    }
                }
                else {
                    echo "Az oldalszámnak 4-gyel oszthatónak kell lennie!";
                }
                
            }
            
            tagszamolo($oldalszam_be, $irkakiloves_be);
            echo "<br>";
            echo "<br>";
            egesz_oldalak($oldalszam_be, $irkakiloves_be);

        ?>
        <!-- /PHP CODE -->
    </body>
</html>
