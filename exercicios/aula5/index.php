<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'ContaBanco.php';
            $p1 = new ContaBanco();//jubileu
            $p2 = new ContaBanco();//creuza
            $p1->abrirConta("CC");
            $p1->setNumConta(1111);
            $p1->setDono("Jubileu");
            $p2->abrirConta("CP");
            $p2->setNumConta(2222);
            $p2->setDono("Creuza");
            $p1->depositar(300);
            $p2->depositar(500);
            $p2->sacar(100);
            $p1->pagarMensal();
            $p2->pagarMensal();
            $p2->sacar(1000);
            $p1-> fecharConta();
            $p2->fecharConta();
            $p1->sacar(338);
            $p2->sacar(530);
            $p1-> fecharConta();
            $p2->fecharConta();
            
            
            print_r($p1);
            print_r($p2);

            ?>
        </pre>
    </body>
</html>
