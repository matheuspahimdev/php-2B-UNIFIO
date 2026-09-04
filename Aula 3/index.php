<?php

// DECLARAÇÃO DE VARIÁVEIS
$nomeCliente = "Marcelo";
$planoBase = 150.50;
$qtdRamExtra = 4;
$valorRamExtra = 12.00;
$taxaImposto = 0.15;
$descontoFidelidade = 25.00;

// REGRAS DE NEGÓCIO (OPERAÇÕES)

// 1. Custo da RAM
$custoRam = $qtdRamExtra * $valorRamExtra;

// 2. Subtotal
$subtotal = $planoBase + $custoRam;

// 3. Aplicação do desconto
$subtotalDescontado = $subtotal - $descontoFidelidade;

// 4. Cálculo do Imposto
$valorImposto = ($taxaImposto * $subtotalDescontado);

// 5. Total Final
$totalFinal = $subtotalDescontado + $valorImposto;

// 6. Programa de Pontos

$pontos = (int)($totalFinal / 50);
$restoPontos = (int)$totalFinal % 50;


// IMPRESSÃO DO RECIBO
echo "--- FATURA DA NUVEM ---";
echo "<br>Cliente: " . $nomeCliente;
echo "<br>Subtotal dos serviços: R$ " . $subtotal;
echo "<br>Desconto aplicado: R$ " . $descontoFidelidade;
echo "<br>Valor base para impostos: R$ " . $subtotalDescontado;
echo "<br>Imposto calculado (15%): R$ " . $valorImposto;
echo "<br>TOTAL A PAGAR: R$ " . $totalFinal;
echo "<br><br>--- PROGRAMA DE PONTOS ---";
echo "<br>Pontos adquiridos: " . $pontos;
echo "<br>Valor restante para o próximo ponto: R$ " . $restoPontos;

?>