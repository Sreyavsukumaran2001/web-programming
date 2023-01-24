<html>
<head>
<?php
$name=["Mayakannan","Bheem","chuki","Doora","Buji"];
$t=$name;
echo"Displaying using print_r<br>";
print_r($name);
echo"<br><br>";
echo"sorting using asort()<br>";
asort($name);
print_r($name);
echo"<br><br>";
echo"sorting using asort()<br>";
asort($t);
print_r($t);
?>
</body>
</html>
