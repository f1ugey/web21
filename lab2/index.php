<?php
$xn = 0.1;
$xk = 0.5;
$N = 15;

echo '<table border = 1 >
        <tr>
            <th>x</th>
            <th>Y(x)</th>
            <th>S(x)</th>   
        </tr>';  

$h = ($xk - $xn) / 10;

for ($x = $xn; $x <= $xk; $x += $h) {
    $y = atan($x); // Измененная формула для Y(x)
    $s = 0;
    for ($n = 1; $n <= $N; $n++) {
        $s += pow(-1, $n) * pow($x, 2 * $n + 1) / (2 * $n + 1); // Измененная формула для S(x)
    } 
    echo '<tr>
            <td>'.$x.'</td>
            <td>'.$y.'</td>
            <td>'.$s.'</td>   
          </tr>'; 
}
echo '</table>';
?>
