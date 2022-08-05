<?php
$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua';
echo $nev_text = str_replace (',','',$text), '<br>';//замена запятых пробелами
$arr = explode (' ', ($nev_text));//приобразуем в массив
$maxLenght = strlen($arr[0]);
$maxWord = '';
$minLenght = strlen($arr[0]);
$minWord = '';
foreach($arr as $key=>$valuo){
    $arr2 = array();
    if($maxLenght < strlen($valuo)){
        $maxLenght = strlen($valuo);
        $maxWord = $valuo;
        $indexMax = $key;
    }
   if($minLenght > strlen($valuo)){
        $minLenght = strlen($valuo);
        $minWord = $valuo;
        $indexMin = $key;
   }
//    echo '<pre>';
//    var_dump($minWord);
//    echo '</pre>';
}
$check = 0;
for ($i=0;$i<count($arr);$i++){
    $arrNew=[$check];
    if(strlen($arr[$i])==$minLenght){
        $arrNew[$check] = $arr[$i];
        echo $arrNew[$check] . ' ';
        $check++;
    }
}
echo '<br>';
echo 'Максимальное значение массива и его Индекс<br>';
echo $maxWord.'<br>';
echo $indexMax.'<br>';
echo 'Минимальное значение массива и его Индекс<br>';
echo $minWord.'<br>';
echo $indexMin;
?>