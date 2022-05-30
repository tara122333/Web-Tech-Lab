<html>
    <body>
        <form method="post">
            <h4><b>Enter First value : </b></h4>
            <input type="text" name="one" id="one" class="form-control" placeholder="fisrt-digit">
            <br/>
            <h4><b>Enter Second Value : </b></h4>
            <input type="text" name="two" id="two" class="form-control" placeholder="second-digit">
            <br>
            <input type="submit" name="submit">
        </form>
        <h4><b>Result : </b></h4>
        <br>
        <?php
            if(isset($_POST['submit'])){ 
            $sum = 0;
            $one = $_POST['one'];
            $two = $_POST['two'];
            $sum = $one + $two;
            echo "SUM : ",$sum;   
            }
        ?>
    </body>
</html>