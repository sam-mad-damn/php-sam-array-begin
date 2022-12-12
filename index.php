<?php
//1.Создайте массив arrRandom и заполните его на 10 элементов случайными числами в промежутке [35; 42].
$arrRandom = [];
for ($i = 0; $i < 10; $i++) {
    $arrRandom[] = rand(35, 42);
};
//2.Выведите элементы этого массива в строку через «; ».
$arr2 = implode(";", $arrRandom);

//3.Оставьте в массиве только уникальные значения, определите их количество
$arr3 = array_unique($arrRandom);
$countarr3 = count($arr3);

//4.Увеличьте каждый элемент массива в 3 раза
foreach ($arrRandom as $key => $value) {
    $value = $value * 3;
}

//5.Создайте новый массив arrRange и заполните его числами в промежутке [-50; 50] с шагом=8.Перемешайте элементы этого массива
$arrRange = range(-50, 50, 8);
shuffle($arrRange);

//6.Определите сумму положительных четных элементов массива arrRange
$res = array_filter($arrRange, fn ($item) => $item > 0 && $item % 2 == 0);
$sum = array_sum($res);

//7.Определите произведение элементов массива arrRange, кратных 3 или 5
$res1 = array_reduce($arr3, function ($carry, $item) {
    if ($item % 3 == 0 || $item % 5 == 0) {
        $carry *= $item;
    }
    return $carry;
}, 1);

//8.Объедините массивы arrRange и arrRandom двумя способами
//1 способ
$arrResult=[...$arrRange,...$arrRandom];
//2 способ
$arrResult2=array_merge($arrRange,$arrRandom);

//9.Выведите минимальные элементы массива, полученного в задании №8
$arrMin=min($arrResult);
//или ?
//$arrMin=array_reduce($arrResult,function ($a,$b){
//   return min($a,$b);
//})

//10.В массиве arrRandom вместо 5 и 6 элементов разместите элементы: 1000, 2000, 3000
array_splice($arrRandom,5,2,[1000,2000,3000]);

//11.Имеется строка вида: «А роза упала на лапу Азора». Сформируйте массив, элементами которого станут слова этой строки
$str="А роза упала на лапу Азора";
$arrStr=explode(" ",$str);

//12.Удалите последний элемент массива arrRandom
array_pop($arrRandom);

//14.Деструктурируйте массив двумя способами
//1 способ
$arr1 = [
    "white" => "белый",
    "yellow" => "желтый",
    "red" => "красный",
    "green" => "зеленый",
];
//extract($arr1);
//2 способ
["white"=>$white,"yellow"=>$yellow,"red"=>$red,"green"=>$green]=$arr1;

//15.Выполните сортировку элементов массива по весу в порядке убывания.Результат отобразите на странице в виде таблицы

$arr3 = [
    [
        "berry" => "виноград", 
        "color" => "зеленый", 
        "weight" => 1.5
    ],
    [
        "berry" => "земляника",
        "color" => "красный", 
        "weight" => 0.7
    ],
    [
        "berry" => "blueberry", 
        "color" => "фиолетовый", 
        "weight" => 0.3
    ],
];
usort($arr3,fn ($a,$b)=>$a["weight"]<=>$b["weight"]);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table>
        <th>Название</th>
        <th>Цвет</th>
        <th>Вес</th>
        <?php foreach($arr3 as $key=>$value): ?>
        <tr>
            <td><?=$value["berry"] ?></td>
            <td><?=$value["color"] ?></td>
            <td><?=$value["weight"] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>

</html>