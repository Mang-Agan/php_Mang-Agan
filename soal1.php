<?php

$jml = $_GET['jml'];
echo "<table border = 1>\n";
for ($a = $jml; $a > 0; $a--) {
    echo "<tr>" . "<td colspan=$jml>TOTAL : $a</td>" . "</tr>";

    for ($b = $a; $b > 0; $b--) {
        echo "<td>$b</td>";
    }
}

echo "</table>";
