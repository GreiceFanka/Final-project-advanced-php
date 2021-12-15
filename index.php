<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Final POO PHP</title>
</head>
<body>
    <pre>
    <?php 
    require_once 'Video.php';
    require_once 'Gafanhoto.php';
    require_once 'Visualizacao.php';

    $v[0] = new Video("Aula 1 de POO");
    $v[1] = new Video("Aula 12 de PHP");
    $v[2] = new Video("Aula 15 de HTML5");
    $g[0] = new Gafanhoto("Jubileu",32,"M","Juba");
    $g[1] = new Gafanhoto("Thiago",36,"M","Thithi");
    $vis[0] = new Visualizacao($g[1],$v[2]);
    $vis[1] = new Visualizacao($g[1],$v[1]);
    $vis[0]->avaliar();
    $vis[1]->avaliarPorcentagem(85);
    print_r($v);
    print_r($g);
    print_r($vis);
    ?>
    </pre>
</body>
</html>