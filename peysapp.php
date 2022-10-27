<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paysapp</title>
</head>
<body>
    <h1>Peys App</h1>
    <form  method = get>
    Select photo size : <input type="range" id="ImgSize" name="ImgSize" value = "60" min="0" max="100">
    <br>
    <br>
    Select Border Color: <input type="color" id="BorderColor" name="BorderColor" value="#000000">
    <br>
    <br>
    <input type="submit" name="ProcessBtn">
    <br>
    <br>
    <?php
    if(isset($_GET['ProcessBtn'])){
        $ImageRangeSize = 60;
        $ImageRangeSize = $_GET['ImgSize'];
        $border = $_GET['BorderColor'];
    }
    ?>
  
  <img src="vinel.jpg" style="width: <?php echo $ImageRangeSize . '%'; ?>;border-color: <?php echo $border; ?>;border-width: 5px; border-style: solid;">

    </form>





</body>
</html>