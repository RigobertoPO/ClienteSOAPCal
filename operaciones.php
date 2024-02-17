<?php
    class Aritmetica{
        public function Sumar($valor1,$valor2){
            $webservice="http://dneonline.com/calculator.asmx?wsdl";
            $parametros=array();
            $parametros['intA']=$valor1;
            $parametros['intB']=$valor2;
            $ws=new SoapClient($webservice,$parametros);
            $resultado=$ws->Add($parametros);
            echo $resultado->AddResult;
        }
        public function Restar($valor1,$valor2){
            $webservice="http://dneonline.com/calculator.asmx?wsdl";
            $parametros=array();
            $parametros['intA']=$valor1;
            $parametros['intB']=$valor2;
            $ws=new SoapClient($webservice,$parametros);
            $resultado=$ws->Subtract($parametros);
            echo $resultado->SubtractResult;
        }
    }
?>