<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>確認頁面</title>
    </head>
    <body>
        <?php
            {
                
            }if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["input_1"])) {
                $selectedValue = $_POST["input_1"];
                echo "您選擇的是： " . $selectedValue;
            } else {
                echo "未提交有效數據。";
            }
        ?>
    </body>
</html>