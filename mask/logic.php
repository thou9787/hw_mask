<?php
require "../vendor/autoload.php";

/** 創建climate物件 */
$climate = new \League\CLImate\CLImate;
/** 抓資料 */
$data2 = file_get_contents("https://data.nhi.gov.tw/Datasets/Download.ashx?rid=A21030000I-D50001-001&l=https://data.nhi.gov.tw/resource/mask/maskdata.csv");
/** 處理資料 */
$rows = explode("\n", $data2); 
$dataArr = [0, 1, 2, 3, 4, 5, 6]; 
$data_keys = array(
    'InstitutionOfID' => $dataArr[0],
    'InstitutionOfName' => $dataArr[1],
    'InstitutionOfAddress' => $dataArr[2],
    'InstitutionOfPhoneNumber' => $dataArr[3],
    'AdultMaskAmount' => $dataArr[4],
    'KidMaskAmount' => $dataArr[5],
    'DataTime' => $dataArr[6]
);

/** 更換key值 */
foreach ($rows as $r) {
    $dataArr = explode(",", $r);
    if ($dataArr[0] != "") {
        $dataArr1[] = array_combine(array_keys($data_keys), $dataArr);
    } 
}


/** 輸入的地址有問題的話就重複輸入 */
$response = input();
if (strlen($response) < 6 || preg_match("/^[a-zA-Z]$/", $response) > 0) {
    $climate->table([['no result']]);
} else {
    /** 過濾掉出地址上的藥局 */
    $result = array_filter($dataArr1, 'searchByAddress');
    if (count($result) != 0) {
        usort($result, 'sequenceOfMaskAmount');
        $climate->table($result);
    } else {
        $climate->table([['no result']]);
    }
}

/**
 * 提供使用者輸入資料
 * 
 * ＠global class $climate 輸出表格元件
 * 
 * ＠return String
 */
function input()
{
    global $climate;
    $input = $climate->input('Please input the address of the hospital you wanna search (input city at least): ');
    $response = $input->prompt();
    return $response;
}

/**
 * 按地址搜尋醫院地址
 * 
 * ＠global String $response 使用者輸入的字串
 * ＠param Array $dataArr1 全口罩資料
 * 
 * ＠return Boolean|Boolean
 */
function searchByAddress($dataArr1)
{
    global $response;
    return (strpos($dataArr1["InstitutionOfAddress"], $response) !== false) ? true : false;
}
/**
 * 排列口罩數量，由多到少
 * 
 * ＠param Array $a 全口罩資料
 * ＠param Array $a 全口罩資料
 * 
 * ＠return Boolean | Boolean
 */
function sequenceOfMaskAmount($a, $b)
{
    return $a["AdultMaskAmount"] < $b["AdultMaskAmount"];
}
