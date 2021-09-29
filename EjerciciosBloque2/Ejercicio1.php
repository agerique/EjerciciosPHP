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
    body{
        background-color: lightyellow;
    }
    table {
        position: absolute;
        left: 50%;
        margin-left: -350px;
        top: 50%;
        margin-top: -100px;
        border: 1px solid #000;
        background-color: grey;
    }

    th,
    td {
        text-align: center;
        vertical-align: center;
        border: 1px solid #000;
        border-spacing: 0;
        font-size: 30;
        background-color: lightskyblue;
    }

    th {
        text-align: left;
        font-weight: bold;
        font-size: 30;
    }
</style>

</html>