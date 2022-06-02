<html>
    <body>
        <?php
        $fact = 1;
        $n = 5;
        while($n>=1){
            $fact = $fact* $n;
            $n = $n -1;
        }
        echo "Factorial is : ",$fact;
        ?>
    </body>
</head>