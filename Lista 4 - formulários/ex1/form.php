<?php
  $valor = $_POST['escolha'];
  $numero1 = $_POST['valor1'];
  $numero2 = $_POST['valor2'];
  if($valor == 1)
  {
    print "Soma =".$numero1+$numero2;
  }
  elseif($valor == 2)
  {
    print "Subtrair =".$numero1-$numero2;
  }
  elseif($valor == 3)
  {
    print "Dividir =".$numero1/$numero2;
  }
  elseif($valor == 4)
  {
    print "Multiplicar =".$numero1*$numero2;
  }
?>