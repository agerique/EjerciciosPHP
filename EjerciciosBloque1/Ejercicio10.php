<?php
$total_compra = 25.65;
$tipo_compra = "mascotas";
$gastos_envio = 0;
$posible_envio = true;
$compramasiva = 0;
$compramasgastos = 0;

if ($tipo_compra != "mascotas" && $tipo_compra != "ropa") {
    print("El tipo de compra no existe");
} else {
    if ($total_compra < 19 && $tipo_compra == "mascotas") {
        $posible_envio = false;
        print("No se puede realizar el envio");
    } else if ($total_compra < 19 && $tipo_compra == "ropa") {
        $gastos_envio = 9;
        print("Los gastos de envio son 9 euros<br>");
    } else if ($total_compra >= 19 && $total_compra < 40) {
        $gastos_envio = 9;
        print("Los gastos de envio son 9 euros<br>");
    } else if ($total_compra >= 40 && $total_compra < 80) {
        $gastos_envio = 5;
        print("Los gastos de envio son 5 euros<br>");
    } else {
        print("El envio es gratis<br>");
    }
    if ($posible_envio) {
        if ($tipo_compra == "mascotas") {
            $compramasiva = $total_compra + ((10 * $total_compra) / 100);
            $compramasgastos = $compramasiva + $gastos_envio;
        } else {
            $compramasiva = $total_compra + ((21 * $total_compra) / 100);
            $compramasgastos = $compramasiva + $gastos_envio;
        }
    }
    print("El precio base de la compra es de " . $total_compra . "€<br>Categoria: " . $tipo_compra . "<br>Precio mas IVA: " . $compramasiva . "€<br>Compra con " . $gastos_envio . "€ de gastos de envio: " . $compramasgastos . "€");
}
