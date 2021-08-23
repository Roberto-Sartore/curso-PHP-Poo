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
                require_once 'Lobo.php';
                require_once 'Cachorro.php';
                
                $m = new Mamifero();
                $l = new Lobo();
                $c = new Cachorro();
                
                $m->emitirSom();
                $l->emitirSom();
                $c->emitirSom();
                
                
            ?>
        </pre>
    </body>
</html>
