
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="pareja.php">
            <input type="text" name="hombre">.<br>.<br>.<br>
            <input type="text" name="mujer">
            <input type="submit" name="pareja">.<br>.<br>.<br>
        </form>
        <?php
        echo $_REQUEST ["hombre"]." se aman ".$_REQUEST ["mujer"] ;
        ?>
    </body>
</html>
