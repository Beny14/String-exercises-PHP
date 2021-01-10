<?php

// Exemple String
// ------------------- 1 ------------------

    // trim() – Elimină spaţiile goale de la începutul şi de la sfârşitul stringului.
    // ltrim() – Elimină spaţiile goale de la începutul stringului.
    // rtrim() – Elimină spaţiile goale de la sfârşitul stringului.
    // strlen() - Se determină lungimea stringurilor.
    // substr($stringul, indexul, numărul_de_caractere) -  Cu aceasta functie puteti izola o parte din string.
    // str_word_count() – Numără cuvintele căutate în string.
    // str_replace("my", "your", "my text", "$a") - Cand dorim sa inlocuim un simbol/numar/litera.
    // strpbrk(string, char) – Caută caracterul char în textul string şi returnează restul stringului.
    // strtoupper(string) – Transformă toate literele în majuscule.
    // strtolower(string) – Transformă toate literele în minuscule.
    // strcmp() - Este folosit pentru a compara 2 stringuri. Este sensibila la majuscule si minuscule.
    // strcasecmp() - Este folosit pentru a compara 2 stringuri. Iar aceasta nu este sensibila la majuscule sau minuscule.
    // strpos("my text", "ext") -  Cautarea in interiorul unui string.
    // substr_replace() - Când vreţi să suprapuneţi stringurile.
    // htmlspecialchars() - Include si toate simbolurile specificate.
    // wordwrap($string, 10, "<br>") - Acest exemplu face ca string-ul respectiv sa se afiseaza pe un rand nou la fiecare 10 caractere. 

// ------------------- 2 ------------------
/*
    Verificați validitatea acestor variabile şi asiguraţi-vă ca ele să nu fie
    goale şi să nu conţină următoarele caractere: <> (semnele pentru mai
    mic şi mai mare) şi ‘. Dacă una dintre variabile este goală, executarea se 
    întrerupe, în timp ce dacă există caractere nedorite, acestea sunt
    eliminate din valoarea variabilei. Valorile iniţiale ale variabilelor trebuie să fie:
    $userName = "myName<";
    $password = "myPa>sswo'rd";
*/

    // function clean_string($string){
    //     $string = str_replace("<", "", $string);
    //     $string = str_replace(">", "", $string);
    //     $string = str_replace("'", "", $string);
    //     return $string;
    // }

    // $userName = "myName<";
    // $password = "myPa>sswo'rd";
    // $userName = clean_string(trim($userName));
    // $password = clean_string(trim($password));

    // if(trim($userName) == "" || trim($password) == "") die("invalid credentials");
    // echo "valid credentials";

// ------------------- 3 ------------------ V1
/*
    Trebuie formatat textul în aşa fel încât să se formeze un rând nou după
    fiecare al 15-lea caracter:
*/

    // $lipsum = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
    // echo wordwrap($lipsum, 15, "<br>");

// ------------------- 3 ------------------ V2
/*
    Trebuie formatat textul în aşa fel încât să se formeze un rând nou după
    fiecare al 15-lea caracter:
*/

    // $lipsum = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
    // $lipsumArr = explode(" ", $lipsum);
    // $tmpContent = "";
    //     for($i = 0; $i < sizeof($lipsumArr); $i++){
    //         if((strlen($tmpContent . " ") + strlen($lipsumArr[$i])) < 15){
    //             $tmpContent .= " " . $lipsumArr[$i];
    //         }else{
    //             if($tmpContent != ""){
    //                 echo $tmpContent . "<br>";
    //             }
    //             $tmpContent = $lipsumArr[$i];
    //         }
    //     }
    // echo $tmpContent;

// ------------------- 4 ------------------ 
/*
    Trebuie formatat stringul, în aşa fel încât, dacă are mai mult de 15
    caractere, acesta să fie tăiat, astfel încât ultimele trei caractere, până
    la al 15-lea, să fie puncte. De exemplu: Lorem Ipsum ...
*/

    // $lipsum = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
    // $izlaz = (strlen($lipsum) > 15) ? substr($lipsum, 0, 12) . "..." : $lipsum;
    // echo $izlaz;

// ------------------- 5 ------------------ sintaxa herodoc
/*
    Cu ajutorul acestei sintaxe( herodoc ), puteţi formata chiar şi cele mai complexe
    stringuri. Se utilizează în felul următor:
    Începutul stringului se marchează cu semnul <<< , după care urmează
    identificatorul, care poate fi orice nume care nu se abate de la regulile
    standard de numire a variabilelor. Sfârşitul textului se marchează, de asemenea, 
    cu identificatorul, care trebuie precedat de o linie nouă şi urmat de marcajul ;
*/

    // $a = <<<MYTEXT
    //     Title<br>
    //     Content...
    // MYTEXT;

    // echo $a;

// ------------------- 6 ------------------
/*
    Un exemplu în care vedem cum putem să eliminăm spaţii dintr-un text:

*/
    // $s = "my text";
    //     for ($i = 0; $i < strlen($s); $i++) {
    //         if($s[$i] != " "){
    //             echo $s[$i];
    //         }
    //     }

// ------------------- 8 ------------------
/*
    Funcţia str_replace acceptă trei (sau patru) parametri. Primul
    parametru este partea căutată a stringului, al doilea este partea care
    va fi inserată în locul părţii căutate şi al treilea este stringul la care se
    face intervenţia. Al patrulea parametru, cel opţional, ne permite să
    punem într-o variabilă numărul cazurilor (cases) găsite ale stringului căutat.
    Acest exemplu va produce valoarea unu, deoarece cuvântul "my"
    apare o singură dată în string.
*/

    // $a=0;
    // echo str_replace("my", "your", "my text", $a);
    // echo "<br>" . $a;

// ------------------- 9 ------------------
/*
    Astfel, puteţi înlocui şi mai multe cazuri într-un singur string, cu
    ajutorul şirurilor. Acest exemplu va schimba textul în: "I love PHP".
*/

    // $arr1 = array("Java", "SQL", "CSS");
    // $arr2 = array("PHP","MySQL","HTML");
    // echo str_replace($arr1, $arr2, "I love Java", $a);

// ------------------- 10 ------------------
/*
    Funcţia acceptă stringul cu rol de parametru, stringul care va fi inserat
    ca înlocuitor şi poziţia de unde începe înlocuirea. 
*/

    // $x = "1,2,3,4,5,";
    // echo substr_replace($x, "", strlen($x)-1);

// ------------------- 11 ------------------
/*
    Prin funcţia substr puteţi izola o parte din string de pe o anumită
    poziţie. Această funcţie acceptă trei parametri: stringul, indexul de
    început al izolării şi, opţional, numărul de caractere care vor fi izolate.

*/
    // $x = "http://www.google.com";
    // echo substr($x, 7);
    
// ------------------- 12 ------------------ EXP regulate
    // . - Reprezintă orice caracter din text; echo preg_match("/my.tring/","myKtring"); 
    // ˆ - Reprezintă începutul stringului;
    // $ - Reprezintă sfârşitul stringului;
    // \s - Reprezintă space; echo preg_match("/my\sstring/","my text"); 
    // \d – Reprezintă orice număr; echo preg_match("/number \d/","number 5");
    // \w – Reprezintă orice cuvânt (word) din string. echo preg_match("/my \w/","my text");

    // echo preg_match("/mytext/", "mytext");

// ------------------- 13 ------------------
/*
    Scrieţi expresia regulată cu care se va verifica dacă valoarea variabilei
    este adresa de e-mail.
*/

    // $string = "benyBeny@yahoo.com";
    // $pattern = "/^[a-zA-Z0-9]+\@[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/";
    // echo preg_match($pattern, $string);

// ------------------- 14 ------------------
/*
    Se dă următoarea variabilă:
    $string = "http://myPage.php?id=25&cat=18&user=34";
    Preluaţi toţi parametri şi puneţi-i în şirul asociativ.
*/

    // $string = "http://myPage.php?id=25&cant=18&user=34";
    // $pars = explode("?",$string);
    // $pars = explode("&",$pars[1]);
    // $parsedPars = array();

    // for($i = 0;$i < sizeof($pars); $i++){
    //     $currentParam = explode("=", $pars[$i]);
    //     $parsedPars[$currentParam[0]] = $currentParam[1];
    // }
    // print_r($parsedPars);

// ------------------- 15 ------------------
/*
    Se dă următorul string url:
    $string = "http://myDomain/home/index.php?id=25&cat=18&user=34";
    Izolați doar domeniul cu folderele şi cu denumirea paginii (myDomain/home/index.php).
*/

    // $string = "http://myDomain/home/index.php?id=25&cat=18&user=34";
    // $pars = preg_replace("/http:\/\//","", $string);
    // $pars = preg_replace("/\?[a-zA-Z0-9=&]+/","", $pars);
    // print_r($pars);

?>