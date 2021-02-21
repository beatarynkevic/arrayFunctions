<!-- 1) pridėti dar du elementus: name ir surname.
    2) Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai
     nuo 5 iki 15. -->
<?php
echo '<pre>';
/*
$masyvas = [];
foreach(range(1, 5) as $key => $value) {
    $masyvas[] = ["Id" => 88888, "Numeriux" => 867361521];
}
foreach($masyvas as $index => $value) {
    $letters = range('a', 'z');
    shuffle($letters);
    $length = rand(5, 15);
    $lengthSurname = rand(5, 15);
    $word = substr(implode($letters), 0, $length);          //substr-grazina masyvo dali(masyva paverciam stringu, 0 - nurodo stringo pradzia, $length - pabaiga);
    shuffle($letters);
    $wordSurname = substr(implode($letters), 0, $lengthSurname);
    $masyvas[$index]['vardas'] = ucfirst($word);
    $masyvas[$index]['pavarde'] = ucfirst($wordSurname);
}
print_r($masyvas);
*/


/*
echo 'Build-in range funkcija: <br>';
$letters = range('a', 'z');
print_r($letters); //atspausdina raidziu masyva

foreach($letters as $value) { //pereina per kiekviena raide ir ja isspausdina
    echo $value;
}
echo '<br>';

$i = implode("", $letters); //array elements in to a string
echo '<br>';

$usersArray = ["name" => 'Natasha', "surname" => 'Ablakon'];
foreach($usersArray as &$user) {
    $user = str_shuffle($i);
}

print_r($usersArray);
*/


/*
echo "12 random raidziu generatorius: <br>";
$i = 0;
while ($i < 12){
    $l = chr(rand(97,122)); //a-z paga ascii table
    echo $l;
    $i++;
}
*/


/*
$masyvas2= [];
echo"sukuriamas dvimatis masyvas: <br>";
foreach(range(1, 5) as $index => $value) {
    foreach(range(1, 5) as $index2 => $value2) {
        $masyvas2[$index][$index2]= rand(1, 5);
    }
}

echo "pereina per dvimati masyva ir pridedam nauja key ir value: <br>";
foreach($masyvas2 as $i => $v) {
    $masyvas2[$i]['belekas'] = rand(5, 30);
}
print_r($masyvas2);
*/

/*
echo "random color generator: <br>";
for ($i = 0; $i < 10; $i++) {
    $color = dechex(rand(0x000000, 0xFFFFFF));
    echo "<h1 style= 'color:#$color';>Lorem Ipsum is simply dummy text of the printing</h1>";
}
*/

// $charpool = ['#', '%', '+', '*', '@', '裡'];
// for($i = 0; $i < count($charpool); $i++) {
//     for($j = 0; $j < count($charpool); $j++) {
//         $color = dechex(rand(0x000000, 0xFFFFFF));
//         $offset = rand(0, count($charpool)-1); //random pozicija sugeneruoja
//             $rndchar = $charpool[$offset];
//         echo "<span style='color:#$color;font-size: 30px';>$rndchar </span> ";
//     }
//     echo '<br>';
// }

//array_multisort ,jeigu du masyvai tai abu turi buti tokio pacio ilgio !!!
// $ar1 = [1, 5, 8, 2, 4, 3, 0];
// $ar2 = [5, 1, 4, 3, 2, 10, 0];
// print_r($ar1);
// print_r($ar2);
// array_multisort($ar1, $ar2);
// print_r($ar1);
// print_r($ar2);

//sorting multi-dimensional array
// $ar = [
//     ["s", "f", 100, "v", "a"],
//     [1, 2, "2", 3, 1]
// ];
// array_multisort($ar[0], SORT_ASC, SORT_STRING, //SORT_ASC -rusiuoja kylanciai, 
//              $ar[1], SORT_NUMERIC, SORT_DESC); //SORT_DESC -rusiuoja mazejimo tvarka
// print_r($ar);
?>