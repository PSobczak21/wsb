<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "text<br>";
        $name="Antoni";
        $surname="Macierewicz";
        echo $name." ".$surname,"<br>";
        echo $name." ".$surname,"<br>";
        echo "$name".'$name';

        //heredoc
        echo <<<SHOW
        <hr>
            Imie: $name<br>
            Nazwisko: $surname<br>
        <hr>
SHOW;
$text=<<<SHOW
        <hr>
            Imie: $name<br>
            Nazwisko: $surname<br>
        <hr>
SHOW;
    echo $text;

    //nowdoc
    $name="Anna";
    echo <<<'X'
    Imie: $name
X;
    ?>
    
</body>
</html>