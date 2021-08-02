<?php
$data = 
[ '{
    "醫事機構代碼": "0291010010",
    "醫事機構名稱": "連江縣立醫院",
    "醫事機構地址": "連江縣南竿鄉復興村２１７號",
    "醫事機構電話": "623995",
    "成人口罩剩餘數": "3250",
    "兒童口罩剩餘數": "1050",
    "來源資料時間": "2021/03/08 10:20:24"
}', '{
    "醫事機構代碼": "2101100227",
    "醫事機構名稱": "中山健康服務中心",
    "醫事機構地址": "臺北市中山區松江路３６７號７樓",
    "醫事機構電話": "(02)25014616",
    "成人口罩剩餘數": "1840",
    "兒童口罩剩餘數": "1090",
    "來源資料時間": "2021/03/08 10:20:24"
}']; 


$datas = array(
    'SystemID' => $obj['醫事機構代碼'], 
    'SystemName' => $obj['醫事機構名稱'], 
    'SystemAddress' => $obj['醫事機構地址'],
    'SystemPhoneNumber' => $obj['醫事機構電話'],
    'AdultMaskRemain' => $obj['成人口罩剩餘數'],
    'KidMaskRemain' => $obj['兒童口罩剩餘數'],
    'SourceDataTime' => $obj['來源資料時間']
);
foreach($data as $d){
    $obj = json_decode($d, true);
    $arr = array_combine(array_keys($datas), $obj);
    print_r($arr);
}

// $data =array(
//     'classname' =>' 我们不一样',
//     'id' =>    ' 6666',
//  );
//  //更改 id key值为cate_id

// $datas =array(
//   'classname' =>$data['classname'],
//    'cate_id'  =>$data['id'],
// );
// $arr3 =array_combine(array_keys($datas),$data);
// echo '<pre>';
// var_dump($arr3);
// echo '</pre>';
