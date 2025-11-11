<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    <label for="input">A</label>
    <input type="number" id="inputA>" name="a"

    <label for="inputB">B</label>
    <input type="number" id="inputB" name="b"

    <input type="submit" value="Somar">
   </form>
   <p>Soma=<?php echo $GET['a']+$_GET['b']; ?></p>
   <?php } ?>

</body>
</html>