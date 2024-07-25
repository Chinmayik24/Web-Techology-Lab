<html>
    <head>
        <title>Prime number</title>
    </head>
    <body>
        <h1>Prime number checker</h1>
        <form method="POST">
            <label for="number">Enter a number</label><br>
            <input name="num">
            <button type="submit">Submit</button>
        </form>
        <?php 
            if ($_SERVER["REQUEST_METHOD"]=="POST"){
                $num=$_POST["num"];
                if ($num==1 || $num==0){
                    echo"$num is neither prime nor not prime";
                    return;
                }
                $flag=0;
                for($i=2;$i<=sqrt($num);$i++){
                    if($num%$i==0){
                        $flag=1;
                        break;
                    }
                }
                if($flag==1){
                    echo "$num is not prime";
                }
                else{
                    echo "$num is prime";
                }
            }
        ?>
    </body>
</html>
