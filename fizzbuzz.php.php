<!DOCTYPE html>
<html>

<body>

    <?php



    /*
 * Complete the 'fizzBuzz' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

    function fizzBuzz($n)
    {
        for ($i = 1; $i <= $n; $i++) {
            $check_fizz = $i % 3;
            $check_buzz = $i % 5;
            $print = "";

            if ($check_fizz == 0)
                $print .= "Fizz";
            if ($check_buzz == 0)
                $print .= "Buzz";


            if ($print == "")
                echo $i;
            else
                echo $print;

            echo "\n";
        }
    }

    $n = intval(trim(fgets(STDIN)));

    fizzBuzz($n);

    ?>
</body>

</html>