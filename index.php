<?php
//array_search

$mas = [5, 1, 7, 8, 9, 2];
foreach($mas as $key => $value) {
    echo $key . '->' .$value . '<br>';
}

echo '<br>';
echo array_search(8, $mas);
echo '<br>';


//array_multisort
$multi = [];
foreach(range(1, 10) as $index => $v) {
    foreach(range(1, 5) as $index2 => $v2) {
        $multi[$index][$index2] = rand(5, 25);
    }
}

echo '<pre>';
print_r($multi);
for($i = 0; $i < count($multi); $i++) {
    array_multisort($multi[$i], SORT_NUMERIC, SORT_ASC);
} //SORT_ASC didejimo tvarka, o SORT_DESC mazejimo tvarka

echo '<pre>';
print_r($multi);

?>