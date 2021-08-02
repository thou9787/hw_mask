<?php
//醫事機構代碼,醫事機構名稱,醫事機構地址,醫事機構電話,成人口罩剩餘數,兒童口罩剩餘數,來源資料時間
//0145080011,衛生福利部花蓮醫院豐濱原住民分院,花蓮縣豐濱鄉豐濱村光豐路４１號,8358141,1290,1630,2021/03/10 21:41:33
//0291010010,連江縣立醫院,連江縣南竿鄉復興村２１７號,623995,2890,940,2021/03/10 21:41:33
// $data = ["abc,醫事機構名稱,醫事機構地址,醫事機構電話,成人口罩剩餘數,兒童口罩剩餘數,來源資料時間", 
// "0145080011,衛生福利部花蓮醫院豐濱原住民分院,花蓮縣豐濱鄉豐濱村光豐路４１號,8358141,1290,1630,2021/03/10 21:41:33", 
// "0291010010,連江縣立醫院,連江縣南竿鄉復興村２１７號,623995,2890,940,2021/03/10 21:41:33"];


// $datas = array(
//     'SystemID' => $arr[0], 
//     'SystemName' => $arr[1], 
//     'SystemAddress' => $arr[2],
//     'SystemPhoneNumber' => $arr[3],
//     'AdultMaskRemain' => $arr[4],
//     'KidMaskRemain' => $arr[5],
//     'SourceDataTime' => $arr[6]
// );

// foreach($data as $d){
//     $arr = explode(",", $d);
//     $arr = array_combine(array_keys($datas), $arr);
//     print_r($arr);
// }

// if(strpos($data[0], 'abc') !== false){
//     echo $data[0];
// }


// function cmp($a, $b)
// {
//     return $a>$b;
// }

// $fruits[0]["fruit"] = "199";
// $fruits[1]["fruit"] = "42";
// $fruits[2]["fruit"] = "4";
// $fruits[3]["fruit"] = "60";
// $fruits[4]["fruit"] = "10";
// $fruits[5]["fruit"] = "53";
// $fruits[6]["fruit"] = "234";
// $fruits[7]["fruit"] = "10";
// $fruits[8]["fruit"] = "111";
// $fruits[9]["fruit"] = "435";
// $fruits[10]["fruit"] = "343";


// usort($fruits, "cmp");

// while (list($key, $value) = each($fruits)) {
//     echo "\$fruits[$key]: " . $value["fruit"] . "\n";
// }


$str = "1中文字我";
echo strlen($str);