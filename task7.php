<?php

$rows = 10; // количество строк, tr
$cols = 10; // количество столбцов, td

echo '<table border="1">';

echo '<table rules="all" border ="1" cellpadding="10" >';

for ($i = 0; $i <= $rows; $i++){
    echo '<tr>';
    for ($j = 0; $j <= $cols; $j++){
        if ($i === 0 ) {
            echo "<td>$j</td>";
        } elseif ($j === 0) {
            echo "<td>$i</td>";
        } elseif (($j % 2 === 0) && ($i % 2 === 0)) {
            echo "<td>(" . $i*$j . ")</td>";
        } elseif (($j % 2 === 1) && ($i % 2 === 1)) {
            echo "<td>[" . $i*$j . "]</td>";
        } else {
            echo "<td>" . $i*$j . "</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
echo "<br><br>";


?>