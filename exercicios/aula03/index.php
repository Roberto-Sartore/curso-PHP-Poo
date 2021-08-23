<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>aula02 poo</title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->modelo = "BIC cristal";
        $c1->cor = "Azul";
        //$c1->ponta = 0.5;
        //$c1->carga = 99;
        //$c1->tampada = true;
        
               
        print_r($c1);
        
        $c1->rabiscar();
        $c1->tampar();
        print_r($c1);
        ?>
        </pre>   
    </body>
</html>
