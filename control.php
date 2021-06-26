<?php.require.'prosses.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>control</title>
</head>

<body background="https://png.pngtree.com/thumb_back/fw800/back_our/20190628/ourmid/pngtree-simple-atmosphere-blue-technology-panel-background-1-image_281089.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">

<div class ="slidecontainer">
<form action="prosses.php" method="post">
<h3 style="font-size:200%;text-align:center;color:white;font-family:courier;">motors control interface</h3>


<p style="font-size:150%;text-align:center;color:white;font-family:courier;">
<lebel for "myRange">motor1</label>
<input type = "range" min="1" max="100" value="50" class="slider" id="myRange1" name="motor1">
</p>


<p style="font-size:150%;text-align:center;color:white;font-family:courier;">
<lebel for "myRange" style="font-size:100%;text-align:center;color:white;font-family:courier;">motor2</label>
<input type = "range" min="1" max="100" value="50" class="slider" id="myRange2" name="motor2">
</p>

<p style="font-size:150%;text-align:center;color:white;font-family:courier;">
<lebel for "myRange" style="font-size:100%;text-align:center;color:white;font-family:courier;">motor3</label>
<input type = "range" min="1" max="100" value="50" class="slider" id="myRange3" name="motor3">
</p>


<p style="font-size:150%;text-align:center;color:white;font-family:courier;">
<lebel for "myRange" style="font-size:100%;text-align:center;color:white;font-family:courier;">motor4</label>
<input type = "range" min="1" max="100" value="50" class="slider" id="myRange4" name="motor4">
</p>


<p style="font-size:150%;text-align:center;color:white;font-family:courier;">
<lebel for "myRange" style="font-size:100%;text-align:center;color:white;font-family:courier;">motor5</label>
<input type = "range" min="1" max="100" value="50" class="slider" id="myRange5" name="motor5">
</p>


<p style="font-size:150%;text-align:center;color:white;font-family:courier;">
<lebel for "myRange" style="font-size:100%;text-align:center;color:white;">motor6</label>
<input type = "range" min="1" max="100" value="50" class="slider" id="myRange6" name="motor6">
</p>

<p style="font-size:150%;text-align:center;color:white;font-family:courier;">
<input type="submit" style="font-size:110%;color:white;font-family:courier;background:darkblue;align:left;" value="SAVE" name = "save">
<br>
<br>
<input type="submit" style="font-size:110%;color:white;font-family:courier;background:darkblue;align:left;" value="ON" name = "on">
<br>
<br>
<input type="submit" style="font-size:110%;color:white;font-family:courier;background:darkblue;align:left;" value="OFF" name = "off">
</p>
</form>
</div>
</body>
</html>