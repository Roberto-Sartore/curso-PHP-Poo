<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Mamifero.php';
                require_once 'Reptil.php';
                require_once 'Peixe.php';
                require_once 'Ave.php';
                require_once 'Canguru.php';
                require_once 'Cachorro.php';
                require_once 'Cobra.php';
                require_once 'Tartaruga.php';
                require_once 'GoldFish.php';
                require_once 'Arara.php';
                
                
                $m = new Mamifero();
                $a = new Ave();
                $r = new Reptil();
                $p = new Peixe();
                $c = new Canguru();
                $k = new Cachorro();
                $t = new Tartaruga();
                
                $m->setPeso(33.5);
                $m->locomover();
                $a->locomover();
                $r->locomover();
                $p->locomover();
                echo"<hr>";
                $m->locomover();
                $c->locomover();
                $k->locomover();
                $t->locomover();
                echo"<hr>";
                $m->emitirSom();
                $c->emitirSom();
                $k->emitirSom();
                $t->emitirSom();
                echo"<hr>";
                $m->alimentar();
                $c->alimentar();
                $k->alimentar();
                $t->alimentar();
            ?>
        </pre>
    </body>
</html>
