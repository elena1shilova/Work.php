<?php
$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
eiusmod tempor incididunt ut labore et dolore magna aliqua';
echo $nev_text = str_replace (',','',$text), '<br>';//замена запятых пробелами
$arr = explode (' ', ($nev_text));//приобразуем в массив
//$min = $arr[0];

// print_r($arr);
$maxLenght = strlen($arr[0]);
$maxWord = '';
$minLenght = strlen($arr[0]);
$minWord = '';
foreach($arr as $key=>$valuo){

    if($maxLenght < strlen($valuo)){
        $maxLenght = strlen($valuo);
        $maxWord = $valuo;
        $indexMax = $key;
    }
//    var_dump($max);
//    var_dump(strlen($valuo));
//    die();
    if($minLenght > strlen($valuo)){
        $minLenght = strlen($valuo);
        $minWord = $valuo;
        $indexMin = $key;
    }

//    echo '<pre>';
//    var_dump($min);
//    echo '</pre>';
}

echo 'Максимальное значение массива и его Индекс<br>';
echo $maxWord.'<br>';
echo $indexMax.'<br>';
echo 'Минимальное значение массива и его Индекс<br>';
echo $minWord.'<br>';
echo $indexMin;
?>


<!---->
<?php
//$userAge =      ['Антон' => 13,
//                'Денис' => 82,
//                'Дима' => 18,
//                'Анна' => 24,
//                'Ольга' => 36];
//foreach ($userAge as $key => $value) {
//    if($value >= 18) {
//        echo $key . ' - Привет! <br>';
//    }
//    else {
//        echo $key . ' - Вам сюда нельзя! <br>';
//    }
//}
//?>


