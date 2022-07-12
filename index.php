<!-- <?php
$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua';
echo $nev_text = str_replace (',','',$text), '<br>';//замена запятых пробелами
$arr = explode (' ', ($nev_text));//приобразуем в массив
$min = $arr[0];

// print_r($arr);
$max = strlen($arr[0]);
$min = strlen($arr[0]);
foreach($arr as $i=>$key)
{
 
if($max < strlen($key)){
    $max = $key;
    $valueMax = $i;
}
if($min > strlen($key)){
    $min = $key;
    $valueMin = $i;
}

}

echo 'Максимальное значение массива и его Индекс<br>';
echo $max.'<br>';
echo $valueMax.'<br>';
echo 'Минимальное значение массива и его Индекс<br>';
echo $min.'<br>';
echo $valueMin;
?> -->
<!-- 
//     for ($i=0; $i < count($arr); $i++) { 
//          if((strlen($arr[$i]))>(strlen($max))) $max = $arr[$i];
//     }
//     for ($i=0; $i < count($arr); $i++) { 
//         if((strlen($arr[$i]))<(strlen($min))) $min = $arr[$i];
//    }
// $arr[$value] = strlen($value);
// if ($arr[$value]>$max) 
// {
// echo $arr[$value];
// }
-->

<!-- 

<?php
$userAge = array('Антон' => 13,
                'Денис' => 82,
                'Дима' => 18,
                'Анна' => 24,
                'Ольга' => 36);
foreach ($userAge as $key => $value) {
    if($value >= 18) echo $key . ' - Привет! <br>';
    else echo $key . ' - Вам сюда нельзя! <br>';
}
?> -->


