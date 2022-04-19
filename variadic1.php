<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function sum(float ...$args):float{
        $result = 0 ;
        foreach($args as $arg){
            $result += $arg;
        }
        return $result;
    }
    print sum(7,3,10);
    print sum(11,-5,4,88);
    ?>
</body>
</html>