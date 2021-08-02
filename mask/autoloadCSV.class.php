<?php
class AutoloadCSV{
    private $data;
    private $csvApi;
    private $dataArr;
    private $data_keys;
    function __construct($csvApi = "https://data.nhi.gov.tw/Datasets/Download.ashx?rid=A21030000I-D50001-001&l=https://data.nhi.gov.tw/resource/mask/maskdata.csv")
    {
        $this->csvApi = $csvApi;
        $this->data = file_get_contents($this->csvApi);
        $this->dataArr = [0, 1, 2, 3, 4, 5, 6];
        $this->data_keys = array(
            'InstitutionOfID' => $this->dataArr[0],
            'InstitutionOfName' => $this->dataArr[1],
            'InstitutionOfAddress' => $this->dataArr[2],
            'InstitutionOfPhoneNumber' => $this->dataArr[3],
            'AdultMaskAmount' => $this->dataArr[4],
            'KidMaskAmount' => $this->dataArr[5],
            'DataTime' => $this->dataArr[6]
        );

    }

    function getDataArray(){
        $rows = explode("\n", $this->data);
        foreach($rows as $r){
            $this->dataArr = explode(",", $r);
            if($this->dataArr[0] != ""){
                $dataArr1[] = array_combine(array_keys($this->data_keys), $this->dataArr);
            }
        }
        return $dataArr1;
    }

    


}


