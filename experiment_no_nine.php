<html>
    <body>
        <form method="post">
            <h4><b>Enter First value : </b></h4>
            <input type="text" name="one" id="one" class="form-control" placeholder="fisrt-digit">
            <br/>
            <h4><b>Enter Second Value : </b></h4>
            <input type="text" name="two" id="two" class="form-control" placeholder="second-digit">
            <br>
            <h4><b>Enter Third Value : </b></h4>
            <input type="text" name="third" id="third" class="form-control" placeholder="third-digit">
            <br>
            <input type="submit" name="submit">
        </form>
        <h4><b>Result : </b></h4>
        <br>
        <?php
            if(isset($_POST['submit'])){ 
            $one = $_POST['one'];
            $two = $_POST['two'];
            $third = $_POST['third'];
            $max = $one;
            if($max<$two){
                if($two<$third){
                    $max = $third;
                }
                else{
                    $max = $two;
                }
            } 
            else if($max < $third){
                if($third<$two){
                    $max = $two;
                }
                else{
                    $max = $third;
                }
            } 
            echo "Max value is : ",$max;
            }
        ?>
    </body>
</html>

    