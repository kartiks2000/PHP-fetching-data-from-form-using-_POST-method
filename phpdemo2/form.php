<?php

    // echo $_POST['name'];

    // OR...

    $x = $_POST['name'];
    echo "<h1>$x</h1>";


?>

<html>
    <head>
        <title>Forms and $_POST</title> 
    </head>
    <body>
        <h1>Please ignore the error above and please give the input and click on submit</h1>
        <form action="form.php" method="post">
            <input type="text" placeholder="type name here..." name="name"/>
            <input type="submit" value="submit" name="sub"/>
        </form>
    </body>

</html>