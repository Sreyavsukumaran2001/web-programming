<html>
<body bgcolor="salmon">
<h4>Players Name:Dhoni ,Viratkohli ,Sachin,Mohammed Shami,Suryakumar Yadav,Yuzvendra Chahal</h4>
<?php
$name=["Dhoni","Viratkohli","Sachin","Rohit sharma","Mohammed Shami","Suryakumar Yada","Yuzvendra Chahal"];
echo "Player Program";
echo "<br>
<table border='2px'>
<tr><th> sl no.</th>
<th>player</th>";
for ($i=0;$i<5;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th></tr>";
}
echo "</table>"
?>
</body>
</html>

