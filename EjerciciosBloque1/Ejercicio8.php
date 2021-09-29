<?php
$asterisco = "*";
do {
    $numero = rand(1, 25);
} while ($numero % 2 == 0);
print("Número: " . $numero . "<br>");
print("<center>" . $asterisco . "</center><br>");
for ($i = 3; $i <= $numero; $i++) {
    if ($i % 2 != 0) {
        $asterisco = $asterisco . "**";
        print("<center>" . $asterisco . "</center><br>");
    }
}
