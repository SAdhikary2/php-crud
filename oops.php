<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

include "index.php";


class pi{
    public static $value=3.14;
    public function staticValue(){
        return self::$value;
    }
}

// greeting::msg3();

$pi=new pi();
echo $pi->staticValue();



//DIFFERENCE BETWEEN INCLUDE AND REQUIRE FUNCTION IN PHP 
?>





</body>
</html>