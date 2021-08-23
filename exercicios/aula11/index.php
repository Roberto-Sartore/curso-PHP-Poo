<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Visitante.php';
                require_once 'Aluno.php';
                require_once 'Bolsista.php';
                require_once 'Professor.php';
                require_once 'Tecnico.php';

                //$p1 = new Pessoa();
                $v1 = new Visitante();
                $v1->setNome("Juvenal");
                $v1->setIdade(33);
                $v1->setSexo("M");

                print_r($v1);
                
                $a1 = new Aluno();
                $a1->setNome("Pedro");
                $a1->setMatricula(1111);
                $a1->setIdade(16);
                $a1->setSexo("M");
                $a1->setCurso("Informatica");
                $a1->pagarMensalidade();
                print_r($a1);
                
                $b1 = new Bolsista();
                $b1->setMatricula(1112);
                $b1->setNome("Jubileu");
                $b1->setBolsa(12.5);
                $b1->setCurso("Administração");
                $b1->setIdade(17);
                $b1->pagarMensalidade();
                print_r($b1);
                
                $p1 = new Professor("TI", 2500.00);
                $p1->receberAum(1500.00);
                $p1->setNome("Antonio");
                $p1->setIdade(45);
                $p1->setSexo("M");
                print_r($p1);
                
                $t1 = new Tecnico();
                $t1->setNome("João");
                $t1->setIdade(36);
                $t1->setSexo("M");
                $t1->setRegistroProfissional(2222);
                $t1->praticar();
                $t1->setCurso("Tecnologia");
                $t1->setMatricula(11123);
                print_r($t1);
                      
                
                


            ?>
        </pre>
    </body>
</html>
