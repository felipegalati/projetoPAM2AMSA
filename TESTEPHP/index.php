<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        //echo "Hello World";
        $nome='Rosana';
        $nome2=" FELIPE ";
        //echo $nome;
        $x=200;
        //echo "Meu nome é ".$nome." e o valor é ".$x."<br>";
        //echo "Meu nome é ".$nome." e o valor é ".$x;
        $x="qualquer";
        echo"<br>";//pular linha
        var_dump($x);//saber o tipo e o valor da variavel
        echo"<br>";
        //strtoupperpç
        echo strtoupper($nome);
        echo"<br>";
        //strtolower
        echo strtolower($nome2); 
        echo"<br>";
        //trim
        echo "NOME".trim($nome2);
        echo"<br>";
        //implode
        $arr = array('Felipe','Tenis','Nadal','Federer');
        echo implode(" ",$arr);
        echo"<br>";
        //explode
        $str = "Meu nome é felipe, eu jogo tenis.";
        $palavras=print_r (explode(" ",$str));
        print_r($palavras);
        echo $palavras[1];
        //strlen
        echo strlen("Felipe");
        echo"<br>";
        //str_repeat
        echo str_repeat("Wow",7);
        echo"<br>";
        //substr_replace
        echo substr_replace("OLÁ Felipe","ROSANA",5);


    ?>
</body>
</html>