<?php
  $name = $_POST['name'];
  $idade = $_POST['idade'];
  $diasvividos = $idade*365;

  echo"<h3>Sua idade total é de: <b>$diasvividos</b> dias</h3>";
?>