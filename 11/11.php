<html>
    <head>
        <title>File</title>
    </head>
    <body>
        <form method="POST">
            <textarea cols="50" rows="10" name="data"></textarea><br><br>
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"]==="POST"){
                $info=$_POST['data'];
                $file='form.txt';
                file_put_contents($file,$info,LOCK_EX);

                echo "<h3>Saved Information:</h3>\n";
                echo "$info";
            }
        ?>
    </body>
</html>
