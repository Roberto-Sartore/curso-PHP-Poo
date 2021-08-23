<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Pessoa.php';
                require_once 'Aluno.php';
                require_once 'Professor.php';
                require_once 'Funcionario.php';

                $p1 = new Pessoa("pedro", 22, "M");
                $p2 = new Aluno(2222, "Informatica");
                $p3 = new Professor("Analise de Sistema", 2500.75);
                $p4 = new Funcionario("Estoque", "Sim");

                $p2->setNome("Maria");
                $p3->setNome("Claudio");
                $p4->setNome("Fabiana");
                
                $p3->receberAum(550.20);
                $p4->mudarTrabalho();
                $p2->cancelarMatr();
                

                print_r($p1);
                print_r($p2);
                print_r($p3);
                print_r($p4);

            ?>
        </pre>
    </body>
</html>
