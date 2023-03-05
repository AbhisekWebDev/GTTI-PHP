<?php
$a = mysqli_connect("localhost", "root", "", "banksbi");
echo "connected successfully";
$b = mysqli_query($a, "select * from masterone");
echo "<table border=2 width=50% align=center>
<tr> 
<td> ACCNO </td>
<td> NAME </td>
<td> ADDRESS </td>
<td> PHONE </td>
</tr>";
while($c = mysqli_fetch_array($b))
{
echo "<tr>";
echo "<td> $c[ACCNO] </td>";
echo "<td> $c[NAME] </td>";
echo "<td> $c[ADDRESS] </td>";
echo "<td> $c[PHONE] </td>";
echo "</tr>";
}
mysqli_close($a);
?>