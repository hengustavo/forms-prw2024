<?php
    echo "<h2>Saída</h2>";

    $velocidade = $_POST['velocidade'];
    $viagem = $_POST['viagem'];
    $consumo = $_POST['consumo'];

    $tempo = $viagem/$velocidade;
    $combustivel = $viagem/$consumo;
    echo "Total horas: ".number_format($tempo,2)."<br>";
    echo "Total combustivel: ".number_format($combustivel,2)."<br>";
?>