<?php
print_r($_SERVER);

echo "<h2>Propriedades</h2>";

foreach ($_SERVER as $idx => $prop) {
    echo "$idx: $prop<br>";
}