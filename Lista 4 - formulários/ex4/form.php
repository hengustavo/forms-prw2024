<?php
    $ano = $_POST['ano'];

    if($ano%4 == 0 and $ano%100 <> 0 or $ano%400 ==0)
    {
        echo "<h2>É ano bissexto</h2>";
    }
    else
    {
        echo "<h2>Não é ano Bissexto</h2>";
    }
?>