<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <p>Funcionou</p>
    <?php
        $listFrutas = [
            "Uva",
            "Maça",
            "Abacate",
            "Mamão"
        ];
        // echo "$listFrutas";
        
        $tamanho = count($listFrutas);

        for ($i=0; $i<$tamanho; $i++){
            echo "Frutas: $listFrutas[$i] <br>";
        }

        foreach ($listFrutas as $index => $fruta){
            echo "<br> Fruta $index com foreach $fruta <br>";
        }
    ?>
</body>
</html>