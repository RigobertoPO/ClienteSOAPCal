<?php
include ("operaciones.php");
$miCal=new Aritmetica();
if(isset($_POST['numero1']) && isset($_POST['numero2']))
{
    if($_POST['operacion']=="suma"){
      $miCal->Sumar($_POST['numero1'],$_POST['numero2']);
    }
    elseif($_POST['operacion']=="resta"){
        $miCal->Restar( $_POST['numero1'],$_POST['numero2']); 
    }
    elseif($_POST['operacion']=="multiplicacion"){
        
    }
    elseif($_POST['operacion']=="division"){
        
    }
}
?>