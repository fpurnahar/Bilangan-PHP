<!DOCTYPE html>
<html>

<body>

    <?php
    $num = 5;
    if ($num >= 1) {
        echo "Factorial<br>";

        for ($i = 1; $i <= $num; $i++) {
            $factorial = 1;

            echo $i . "! = ";

            for ($j = $i; $j > 0; $j--) {
                if ($j == 1) {
                    echo " 1 = " . $factorial;
                } else {
                    echo $j . " x ";
                };
                $factorial *= $j;
            }
            echo "</br>";
        }
    } else if ($num == 0) {
        echo "0! = 1";
    } else {
        echo "Error.";
    }
    ?>

</body>

</html>