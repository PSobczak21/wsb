<a href="dołączaniePlików.php">dołączaniePlików</a><br>
<a href="1struktura.php"></a><br>
<a href="operacjeNaZmiennych.php"></a><br>
<a href="3_1_file.php"></a><br>

<?php

    echo "Potęgowanie<br>";
    $potega=2**10;
    echo $potega,"<br>";
echo "<hr>";
    //systemy liczbowe
    echo "Systemy liczbowe<br>";
    $int=10;
    $hex=0xA;
    $oct=012;
    $bin=0b1010;
    echo $int, "<br>";
    echo $hex, "<br>";
    echo $oct, "<br>";
    echo $bin, "<br>";
    echo "<hr>";
    //echo phpinfo();
    echo "operatory bitowe<br>";
    //operatory bitowe
    $x=0b1010;
    echo $x, "<br>";
    $x=$x>>1;
    echo $x, "<br>";
    $x=$x<<2;
    echo $x, "<br>";
    echo "<hr>";
    //równe / identyczne
    echo "równe/identyczne<br>";
    $x=1;
    $y=1.0;
    if ($x==$y)
    {
        echo "równe<br>";
    }
    else
    {
       echo "różne<br>"; 
    }
    if ($x===$y)
    {
        echo "identyczne<br>";
    }
    else
    {
        echo "nieidentyczne<br>";
    }

    echo gettype($x),"<br>";
    echo gettype($y),"<br>";
    echo "<hr>";
    //operatory rzutowania danych
    echo "operatory rzutowania danych<br>";
    $text="123ssd";
    $x= (int)$text;
    echo $x,"<br>";
    echo gettype($x),"<br>";
    $text=0;
    $x=(bool)$text;
    echo "\$text: $text","<br>";
    echo "\$x: $x","<br>";
    $text=10;
    $x=(unset)$text;
    echo $text,"<br>";
    echo $x,"<br>";
    echo "<hr>";
    //rozmiar typu integer
    echo "rozmiar typu integer<br>";
    echo PHP_INT_SIZE,"<br>";
    echo PHP_INT_MIN,"<br>";
    echo PHP_INT_MAX,"<br>";
    echo "<hr>";
    //kontrola typu zmiennych
    echo "kontrola typu zmiennych<br>";
    $x=10;
    echo is_int($x),"<br>";
    echo is_string($x),"<br>";
    echo "<hr>";
    //operator ignorowania błędów
    echo "operator ignorowania błędów<br>";
    $w;
    echo @$w;
    echo gettype(@$w),"<br>";
    echo "<hr>";
    //zmienne super globalne
    echo "zmienne super globalne<br>";
    //$_GET,$_POST,$_COOKIE, $_FILES, $_SESSION, $_SERVER
    echo $_SERVER['SERVER_PORT'],"<br>";
    echo $_SERVER['SERVER_NAME'],"<br>";
    echo $_SERVER['SCRIPT_NAME'],"<br>";
    echo $_SERVER['DOCUMENT_ROOT'],"<br>";
    //stałe
    echo "<hr>";
    echo "stałe<br>";
    //nazwa stałej z dużej litery
    define("NAME", "Antek");
    echo NAME;
    define ("surnamE","Maciar",true);
    echo surname;
    define ("surnamE","Maciar",false);
    echo surname;
    //stałe predefiniowane
    echo "<hr>stałe predefiniowane<br>";
    echo PHP_VERSION,"<br>";
    echo PHP_OS,"<br>";
    echo __LINE__,"<br>";
    echo __FILE__,"<br>";
    echo __DIR__,"<br>";

?>