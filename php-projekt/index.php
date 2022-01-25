<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo 'Hello world!<br /><br />';
        $Boolean = true;
        $String = "cena";
        $Float = 69.4;
        $Integer = 69;
        $a = $String . $Float;
        
        echo $a;
        echo '<br /><br />';
        echo $Boolean;
        echo '<br /><br />';
        echo $String;
        echo '<br /><br />';
        echo $Float;
        echo '<br /><br />';
        echo $Integer;
        echo '<br /><br />';
        echo '<strong>Tučný text</strong>';
        echo '<br /><br />';
        
        print 'Hello world! <br /><br />';
        print $Boolean;
        print '<br /><br />';
        print $String;
        print '<br /><br />';
        print $Float;
        print '<br /><br />';
        print $Integer;
        print '<br /><br />';
        echo '<img src="dům.jpg" alt="test" width="200" height="200">';
        print '<br /><br />';
        
        echo '<strong>\\</strong><br /><br />';
        
        $b = 4;
        $c = 8;
        
        var_dump($b+$c);
        var_dump($b-$c);
        var_dump($b/$c);
        var_dump($b*$c);
        var_dump($b++);
        var_dump($b--);
        var_dump($b+=$c);
        var_dump($b-=$c);
        var_dump($b*=$c);
        var_dump($b/=$c);
        var_dump($b==$c);
        var_dump($b!=$c);
        var_dump($b>$c);
        var_dump($b<$c);
        var_dump($b||$c);
        var_dump($b&&$c);
        var_dump(!$b);
      
        echo '<br /><br />';
        
       echo '<strong>Zde zacina reseni druheho ukolu</strong><br /><br />';
       
       $MartinBarta1 = 2;
       $MartinBarta2 = 1;
       
       if ($MartinBarta1 > $MartinBarta2) {
       echo 'Martin Bárta';
       }
       
        echo '<br /><br />';
       
       if ($MartinBarta1 < $MartinBarta2) {
           echo 'Martin';
       } 
       else {
           echo 'Bárta';   
       }
       
       echo '<br /><br />';
       
       
       if ($MartinBarta1 < 3) {
           echo 'Pravda';
       }
           if ($MartinBarta2 > 5) {
              echo 'Nepravda';
            }   
        
        echo '<br /><br />';
        
        switch ($MartinBarta1) {
            case 1:
                echo '1';
                break;
            case 2;
                echo '2';
                break;
            case 3:
                echo '3';
                break;
            case 4;
                echo '4';
                break;
            case 5:
                echo '5';
                break;
            case 6;
                echo '6';
                break;
            default:
                echo 'Žádná z hodnot neplatí';
        }        
        
        echo '<br /><br />'; 
        
        {
        
        $produkty = array(

            1 => "Jablko",
            2 => "Banan",
            3 => "Jahoda",
            4 => "Merunka",
            5 => "Tresen",
            6 => "Brambora",
            7 => "Brokolice",
            8 => "Celer",
            9 => "Cibule",
            10 => "Dyne"
            
            );
            
            var_dump($produkty);
        
            echo $produkty[7];
            
        }
            
            $produkty2 = array (
            "Auta" => array (
                "OsobniAuta" => array (
                        "Audi" => array (
                            //Nazev
                            11 => "Audi ",
                            //Vlastnosti
                            12 => "Model: A1",
                            13 => "Max. Rychlost: 235km/h",
                            14 => "Cena: 534 900 Kč",
                            15 => "Čas z 0 na 100: 6.5s",
                            16 => "Koní: 197"
                    ),
                        "Skoda" => array (
                            //Nazev
                            17 => "Škoda ",
                            //Vlastnosti
                            18 => "Model: Fabia",
                            19 => "Max. Rychlost: 186km/h",
                            20 => "Cena: 279 900 Kč",
                            21 => "Čas z 0 na 100: 10.7s",
                            22 => "Koní: 95"
                    ),  
                        "Ford" => array (
                            //Nazev
                            23 => "Ford ",
                            //Vlastnosti
                            24 => "Model: Fiesta",
                            25 => "Max. Rychlost: 250km/h",
                            26 => "Cena: 358 900 Kč",
                            27 => "Čas z 0 na 100: 6.5s",
                            28 => "Koní: 271"
                    ),  
                        "Honda" => array (
                            //Nazev
                            29 => "Honda ",
                            //Vlastnosti
                            30 => "Model: Jazz",
                            31 => "Max. Rychlost: 173km/h",
                            32 => "Cena: 499 900 Kč",
                            33 => "Čas z 0 na 100: 9.5s",
                            34 => "Koní: 109"
                    ),   
                        "Hyundai" => array (
                            //Nazev
                            35 => "Hyundai ",
                            //Vlastnosti
                            36 => "Model: i10",
                            37 => "Max. Rychlost: 140km/h",
                            38 => "Cena: 229 990 Kč",
                            39 => "Čas z 0 na 100: 11.5s",
                            40 => "Koní: 67"
                    ),   
                        "Nissan" => array (
                            //Nazev
                            41 => "Nissan ",
                            //Vlastnosti
                            42 => "Model: Juke",
                            43 => "Max. Rychlost: 180km/h",
                            44 => "Cena: 404 900 Kč",
                            45 => "Čas z 0 na 100: 8.5s",
                            46 => "Koní: 101"
                    ),
                        "BMW" => array (
                            //Nazev
                            47 => "BMW ",
                            //Vlastnosti
                            48 => "Model: Coupé",
                            49 => "Max. Rychlost: 200km/h",
                            50 => "Cena: 825 500 Kč",
                            51 => "Čas z 0 na 100: 6s",
                            52 => "Koní: 160"
                    ),
                        "Peugeot" => array (
                            //Nazev
                            53 => "Peugeot ",
                            //Vlastnosti
                            54 => "Model: 108",
                            55 => "Max. Rychlost: 170km/h",
                            56 => "Cena: 245 000 Kč",
                            57 => "Čas z 0 na 100: 7.5s",
                            58 => "Koní: 97"
                    ),
                        "Kia" => array (
                            //Nazev
                            59 => "Kia ",
                            //Vlastnosti
                            60 => "Model: Rio",
                            61 => "Max. Rychlost: 210km/h",
                            62 => "Cena: 299 980 Kč",
                            63 => "Čas z 0 na 100: 9.5s",
                            64 => "Koní: 180"
                    ),
                        "Mazda" => array (
                            //Nazev
                            65 => "Mazda ",
                            //Vlastnosti
                            66 => "Model: CX-3",
                            67 => "Max. Rychlost: 155km/h",
                            68 => "Cena: 499 900 Kč",
                            69 => "Čas z 0 na 100: 8s",
                            70 => "Koní: 121"
                    ))));
                        

        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["Audi"][11];
        echo $produkty2["Auta"]["OsobniAuta"]["Audi"][13];
        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["Skoda"][17];
        echo $produkty2["Auta"]["OsobniAuta"]["Skoda"][18];
        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["Ford"][23];
        echo $produkty2["Auta"]["OsobniAuta"]["Ford"][27];
        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["Honda"][29];
        echo $produkty2["Auta"]["OsobniAuta"]["Honda"][34];
        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["Hyundai"][35];
        echo $produkty2["Auta"]["OsobniAuta"]["Hyundai"][38];
        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["Nissan"][41];
        echo $produkty2["Auta"]["OsobniAuta"]["Nissan"][42];
        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["BMW"][47];
        echo $produkty2["Auta"]["OsobniAuta"]["BMW"][49];
        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["Peugeot"][53];
        echo $produkty2["Auta"]["OsobniAuta"]["Peugeot"][58];
        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["Kia"][59];
        echo $produkty2["Auta"]["OsobniAuta"]["Kia"][61];
        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["Mazda"][65];
        echo $produkty2["Auta"]["OsobniAuta"]["Mazda"][67];
       
        echo '<br /><br />';
        
        echo '<strong>Zde zacina reseni cyklu</strong><br /><br />';
        
        //Cyklus "for" a řešení tabulky
        
        $radekMartinBarta = 6;
        $sloupecMartinBarta = 17;
        
        echo "<table border='1'>";
        
        for ($i = 1; $i <= $radekMartinBarta; $i++){ 
            echo "<tr>";
            
            for ($j = 1; $j <= $sloupecMartinBarta; $j++){
                echo "<td>" . $i . " - ". $j ."</td>";
          } 
            echo "</tr>";
          }
            echo "</table>";
        
        echo '<br /><br />';    
            
        //Cyklus "while"
            
        $i = 1;
        $pocet = 20;
        while ($i <= $pocet)
        {
        echo($i . ' ');
                $i++;
        }    
            
        echo '<br /><br />';
        
        //Cyklus "foreach"
        
        $pole = array('test1', 'test2');
        
        foreach ($pole as $key => $value){
        
            echo $key . ". " . $value. "<br>";
        }    
        
        echo '<br /><br />';
        
        echo '<strong>Zde zacina reseni funkci</strong><br /><br />';

        //PHP Funkce
            //Matematické Funkce
        echo (abs(7.5) . "<br><br>");
        echo (cos(5) . "<br><br>");
        
            //Řetězové funkce
        echo (addslashes ("Slovo 'Ovoce' je v obrácených lomítkách.") . "<br><br>");
        echo chr(68) . "<br><br>"; //Desetinná hodnota
        echo chr(061) . "<br><br>"; //Osmičková hodnota
        echo chr(0x66) . "<br><br>"; //Šestnáctková hodnota
        
            //Funkce pro práci s poli
        $pole1=array("Cislo1","Cislo2");
        $pole2=array("Cislo3","Cislo4");
        print_r(array_merge($pole1,$pole2));
        
        echo '<br /><br />';
        
        $pole3=array("Cislo1","Cislo2");
        array_push($pole3,"Cislo3","Cislo4");
        print_r($pole3);
        
        echo '<br /><br />';
        
            //Foreach
        
        foreach ($produkty as $x => $hodnota) {
        echo "$x => $hodnota<br>";
        }
        
        echo '<br />';
        
        //Vlastní funkce

        $neco1 = "Vítej hráči AAA!";
        $neco2 = "Hráč1";
    

        function NejakaFunkce(string $neco1, string $neco2){
        return str_replace ("AAA", $neco2, $neco1);

                
        }
        
        echo NejakaFunkce($neco1,$neco2);
        echo "<br>";
        echo NejakaFunkce($neco1,"Hráč2");

        echo '<br /><br />';
        
        
        
        echo "<br><br>" ;
        echo "<strong>Zde zacinaji prakticka cviceni</strong>";
        echo "<br><br><br>" ;
        echo "<strong>Cviceni 1</strong>";
        echo "<br><br>" ;
        
        //Vlastní funkce getPrice()
        
        
        getPriceMartinBarta ($Price = 697594.5665443);
        $Currency = "CZK";
        
        function getPriceMartinBarta(float $Price, string $Currency = "CZK") : string {
            echo number_format($Price,2,",", " ");
                return $Price." ".$Currency;
                
        }
        
        echo " ",$Currency;
        echo "<br><br>" ;
        
        echo "<strong>Cviceni 2</strong>";
        
        
        //Funkce getPriceDPH()
        //
        // U 21% DPH je to 0,1736
        // U 15% DPH je to 0,1304
        // U 10% DPH je to 0,0909
        
        
        function getPriceDPHMartinBarta(float $PriceDPHMartinBarta, float $DPHMartinBarta){          
            return ($PriceDPHMartinBarta * round($DPHMartinBarta, 2)) + $PriceDPHMartinBarta . " <= Finalni cena s DPH";
        }
      

        echo "<br><br>" ;
        echo getPriceDPHMartinBarta(456,0.1736);
        echo "<br><br>" ;
        echo getPriceDPHMartinBarta(456,0.1304);
        echo "<br><br>" ;
        echo getPriceDPHMartinBarta(456,0.0909);
        echo "<br><br>" ;
        
        
        echo "<strong>Cviceni 3</strong>";       
        
        function getDPHMartinBarta(float $PriceMartinBarta, float $DPH2MartinBarta){          
            return "DPH z " . $PriceMartinBarta . " bude " . $PriceMartinBarta * round($DPH2MartinBarta, 2) . " .";
        }

        echo "<br><br>" ;
        echo getDPHMartinBarta(456,0.1736);
        echo "<br><br>" ;
        echo getDPHMartinBarta(456,0.1304);
        echo "<br><br>" ;
        echo getDPHMartinBarta(456,0.0909);
        echo "<br><br>" ;
        
        
        echo "<strong>Cviceni 4</strong>";
        echo "<br><br>" ;
        
        $zpravaMartinBarta = "Když jsem se probudil a natáhl ruku, nahmatal jsem bochník chleba a džbán s vodou.
                              Neuvažoval jsem o tom, na to jsem byl příliš vyčerpán, jen jsem se chtivě pustil do
                              jídla a pití. Zanedlouho jsem však už zase pokračoval v obchůzce svého žaláře
                              a s námahou jsem posléze dorazil k útržku látky";
        //Pozn. Slovo "vyčerpán" je špatně napsáno proto aby se ověřila správnost kódu.
        $slovaMartinBarta = array("vyčrán","obchůzce","látky");
        
        echo isValidMartinBarta($zpravaMartinBarta, $slovaMartinBarta);
        
        function isValidMartinBarta(string $zpravaMartinBarta, array $slovaMartinBarta) : ?string {
            foreach ($slovaMartinBarta as $valueMartinBarta) {
                if (strpos($zpravaMartinBarta, $valueMartinBarta)){
                    return "Slovo " . $valueMartinBarta ." nemuze byt zobrazeno!";
                       
                }

            } 
                    return "Nebylo nalezeno zadne slovo!";
        }
        
        echo "<br><br>";
        
        //Další procvičování funkcí
        
        
        echo "<strong>Další procvičování funkcí</strong>";
        echo "<br><br>";
        
        $teststringMartinBarta = "Tohle je testovaci text";
        $teststring2MartinBarta = array("Tohle","je","testovaci","text");
        $teststring3MartinBarta = "text";
        $teststring4MartinBarta = "Tohle je testovaci TEXT";
        $teststring5MartinBarta = "tohle je testovaci text";
        
        
        
        echo (addslashes ("Slovo 'Ovoce' je v obrácených lomítkách.") . "<br><br>");
        echo chr(68) . "<br><br>";
        print_r (explode(" ",$teststringMartinBarta));
        echo "<br><br>";
        echo implode(" ",$teststring2MartinBarta);
        echo "<br><br>";
        echo join(" ",$teststring2MartinBarta);
        echo "<br><br>";
        echo md5($teststring3MartinBarta);
        echo "<br><br>";
        echo hash("sha256",$teststring3MartinBarta);
        echo "<br><br>";
        echo ord("A");
        echo "<br><br>";
        echo strchr($teststringMartinBarta,$teststring3MartinBarta);
        echo "<br><br>";
        echo strlen($teststring3MartinBarta);
        echo "<br><br>";
        echo strpos($teststringMartinBarta,$teststring3MartinBarta);
        echo "<br><br>";
        echo strrchr($teststringMartinBarta,$teststring3MartinBarta);
        echo "<br><br>";
        echo strrev($teststringMartinBarta);
        echo "<br><br>";
        echo strstr($teststringMartinBarta,$teststring3MartinBarta);
        echo "<br><br>";
        echo strtolower($teststring4MartinBarta);
        echo "<br><br>";
        echo strtoupper($teststring4MartinBarta);
        echo "<br><br>";
        echo substr_replace($teststringMartinBarta,$teststring3MartinBarta,0);
        echo "<br><br>";
        echo substr($teststringMartinBarta,8);
        echo "<br><br>";
        echo ucfirst($teststring5MartinBarta);
        echo "<br><br>";
        echo ucwords($teststring5MartinBarta);
        echo "<br><br>";
        
        //PHP OOP
        
        $auto = new SkodaOctavia();
        
        
        var_dump($auto);
        
        
        
        
        
        
        
        
        class Auta{
             
            protected $kola = NULL;
        }
        
        
        class AutaOsobni{
            
        }
        
        class AutaNakladni{
            
        }
        
        class Skoda extends AutaOsobni{
         
            public $spinaci_skrinka = "typ 1234";
        }
        
        class SkodaOctavia extends Skoda{
            
            
        }
        
        
        //PHP OOP 2
        
        $ustredna1 = new Ustredna264();
        $ustredna2 = new Ustredna364();
        
        
        
        var_dump($ustredna1);
        var_dump($ustredna2);
        
      
        
        abstract class Zdroj{
            
            public $napajeni = 238.1;
        
            public $baterie = 12;
            
            
        }
        
        class Ustredna extends Zdroj{
            
            public $bzucak;
            
            public $zapnuto = FALSE;
            
            
        }
        
        class Ustredna264 extends Ustredna{
            
            public $zone = 10;
        }
        
        
        class Ustredna364 extends Ustredna{
            
            public $zone = 15;
        }
        
         
        //PHP OOP 3
        
        $ustredny = new Ustredna2();
        
        var_dump ($ustredny);
        
        
        $ustredny->setNapajeni(10);
        echo "<br>";
        echo $ustredny->getNapajeni();
      
        
        
        
        class Ustredny {
            private $napajeni = 12;
            
            protected $baterie = 12;
            
            public $status = TRUE;
            
            public function __construct() 
            {

            }
            
            public function setNapajeni(int $napajeni): void
                {
                    if ($napajeni >= 10 AND $napajeni <= 20){
                        $this->napajeni = $napajeni;
                    }
                }
            public function getNapajeni(): int
                {
                    return $this->napajeni;
                }
            public function getBaterie(): int
                {
                    return $this->baterie;
                }
            public function getStatus(): int
                {
                    return $this->status;
                }
                
                }
        
        
        class Ustredna2 extends Ustredny {
            
            public $baterie = 24;
            
        }        
        class zdroj2 {
            public function start()
            {
                
            }
        
            public function stop()
            {
                
            }        
            
            
        }
        
        //Matematické funkce
        
        $cislo1MartinBarta = 456.456456;
        $cislo2MartinBarta = 2.4;
        $cislo3MartinBarta = -10.8;
        $pole1MartinBarta = array("Jablko","Banan","Hruska");
        
        echo round ($cislo1MartinBarta, 2);
        echo '<br><br>';
        echo ceil($cislo1MartinBarta);
        echo '<br><br>';
        echo floor($cislo1MartinBarta);
        echo '<br><br>';
        echo sqrt($cislo1MartinBarta);
        echo '<br><br>';
        echo pow($cislo1MartinBarta, $cislo2MartinBarta);
        echo '<br><br>';
        echo sin($cislo1MartinBarta);
        echo '<br><br>';
        echo cos($cislo1MartinBarta);
        echo '<br><br>';
        echo tan($cislo1MartinBarta);
        echo '<br><br>';  
        echo asin($cislo2MartinBarta);
        echo '<br><br>';
        echo acos($cislo2MartinBarta);
        echo '<br><br>';
        echo atan($cislo2MartinBarta);
        echo '<br><br>'; 
        echo fmod($cislo2MartinBarta, $cislo1MartinBarta);
        echo '<br><br>';
        echo max($pole1MartinBarta);
        echo '<br><br>';
        echo min($pole1MartinBarta);
        echo '<br><br>';
        echo abs($cislo3MartinBarta);
        echo '<br><br>';
        echo $cislo1MartinBarta - $cislo2MartinBarta;
        echo '<br><br>';
        echo $cislo1MartinBarta + $cislo2MartinBarta;
        echo '<br><br>';
        echo $cislo1MartinBarta / $cislo2MartinBarta;
        echo '<br><br>';
        echo $cislo1MartinBarta * $cislo2MartinBarta;
        echo '<br><br>';
        echo number_format($cislo1MartinBarta);
        echo '<br><br>';
        
        ?>
    </body>
</html>