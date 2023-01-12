<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        $luas = ($i / 3) * ($i / 5);
        echo round($luas, 2) . " ";
    } else if ($i % 3 == 0) {
        $luas = 3.14 * (($i / 3) * ($i / 3));
        echo round($luas, 2) . " ";
    } else if ($i % 5 == 0) {
        $keliling = 2 * 3.14 * ($i / 5);
        echo round($keliling, 2) . " ";
    } else {
        echo $i . " ";
    }
}
?>
