<html>
<body bgcolor="lightyellow">
<h4></h4>
<?php
$name=["Sachin","Mohammedshami(c)","Rohitsharma","Dhoni","Virat kholi","Ganguli","K l rahul","Rishabh Pant ","Rahul Sharad Dravid","Suresh Raina","Gautam Gambhir "];
$role=["BALL BOY","WICKET KEEPER","RIGHT-HAND BATSMAN","RIGHT-HAND BATSMAN","RIGHT-HAND BATSMAN","FAST BOWLER","SPIN BOWLER","ALL ROUNDER","MANGO THROW","VERUTHE","ALL ROUNDER"];
echo "<u>STARTING XI</u>";
echo "<br>
<table border='2px'>
<tr><th> sl no.</th>
<th>player</th>
<th>ROLE</th>";
for ($i=0;$i<11;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th><th>$role[$i]</th></tr>";
}
echo "</table>"
?>
</body>
</html>
