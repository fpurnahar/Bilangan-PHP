<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $pascal = '';

    $colums = 17;

    for ($i = 1; $i <= $colums; $i++) {
        $jumlah = 0;                            // Perulangan Colum 
        for ($j = 1; $j <= $i; $j++) {          // condition : jika $j == 1 atau

            if ($j == 1 || $j == $i) {          // $j == $i dengan bersifat benar  
                $value[$i][$j] = 1;
                // maka akan membuat array  $value yang bernilai $i dan $j pertama
            } else {                            // Jika tidak akan menggunakan rumus ini dibawah ini untuk menentukan barisan.
                $value[$i][$j] = $value[$i - 1][$j] + $value[$i - 1][$j - 1];
            }
            if ($value[$i][$j] % 2  == 0) {
                $pascal .= $value[$i][$j] . "t ";
            } else {
                if ($value[$i][$j] == 1) {
                    $pascal .= $value[$i][$j] . " ";
                } else {
                    $pascal .= $value[$i][$j] . "f ";
                }
            }
            $jumlah += $value[$i][$j];                                  // membuat array
        }
        $pascal .= '=' . $jumlah . "\n";                        // enter
    }
    echo "<center><pre>\n" . $pascal . "</pre></center>";       //menampilkan hasil

    ?>

</body>

</html>