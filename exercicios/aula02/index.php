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
        <?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = false;
        $c1->tampar();
        
        print_r($c1);
        echo "<br/>";
        
        $c2 = new Caneta;
        $c2->cor = "Vermelha";
        $c2->ponta = 1.0;
        $c2->carga = 50;
        $c2->tampar();
        
        print_r($c2);
        
        
        ?>
    </body>
</html>
