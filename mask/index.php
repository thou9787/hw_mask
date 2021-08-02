<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>查詢口罩數量網</h1>
    <hr>
    <p><b>Please input the address of the hospital you wanna search</b></p>
    </center>

    <?php
        require "../vendor/autoload.php";
        $climate = new \League\CLImate\CLImate;
        function library($className){
            $file = "./".strtolower($className).".class.php";
            if(is_file($file)){
                require_once($file);
            }  
        }
        spl_autoload_register("library");
        $dataCsv = new AutoloadCSV();
        $dataArr = $dataCsv->getDataArray();
        echo new Form; //輸出表單
    ?>
</body>
</html>