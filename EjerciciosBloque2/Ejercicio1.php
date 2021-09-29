<html>

<head>

</head>

<body>
    <?php
    $naturales = [];
    $segundo = [];
    for ($i = 0; $i < 10; $i++) {
        $naturales[$i] = $i;
    }

    function calcularFactorial($num)
    {
        $factorial = 1;
        for ($i = 1; $i <= $num; $i++) {
            $factorial = $factorial * $i;
        }
        return $factorial;
    }
    for ($i = 0; $i < sizeof($naturales); $i++) {
        $segundo[$i] = calcularFactorial($naturales[$i]);
    }
    function hacerTabla($array)
    {
        $texto = "";
        for ($i = 0; $i < sizeof($array); $i++) {
            $texto = $texto . "<td>" . $array[$i] . "</td>";
        }
        return $texto;
    }
    print("
<table class='default'>
<tr>
<th>Numeros Naturales</th>" . hacerTabla($naturales) . "
</tr>
<tr>
<th>Primeros Factoriales</th>" . hacerTabla($segundo) . "
</tr>
</table>
");
    ?>
</body>
<style>
    table {
        border: 1px solid #000;
    }

    th,
    td {
        text-align: center;
        vertical-align: top;
        border: 1px solid #000;
        border-spacing: 0;
    }
</style>

</html>