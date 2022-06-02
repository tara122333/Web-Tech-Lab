<html>
    <body>
        <form method="post">
            <h4><b>Enter Number : </b></h4>
            <input type="text" name="prime" id="prime" class="form-control" placeholder="fisrt-digit">
            <br>
            <input type="submit" name="submit">
        </form>
        <h4><b>Result : </b></h4>
        <br>
        <?php
            if(isset($_POST['submit'])){

            $n = $_POST['prime'];
            $flag = 1;
            for($i=2;$i<$n;$i++){
                if($n % $i ==0){
                    $flag = 0;
                    break;
                }
            } 
            if($flag==0){
                echo "Number is not prime number ",$n;
            } 
            else{
                echo "Number is prime number ",$n;
            }
            }
        ?>
    </body>
</html>