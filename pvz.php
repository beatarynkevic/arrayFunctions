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
?>