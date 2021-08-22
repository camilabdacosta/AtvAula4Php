<?php
  $op = $_GET['opt'];
  $temp = $_GET['number'];
  
  if($op==1)
   echo "Temperatura em Farenheit: ".CtoF($temp);
  elseif($op==2)
   echo "Temperatura em Celsius: ".FtoC($temp);
  else
   echo "Opção inválida";
   
  
  function CtoF($temperatura){
   return ($temperatura*9/5) + 32;
  }
  function FtoC($temperatura){
   return ($temperatura-32)*5/9;
  }
 ?>