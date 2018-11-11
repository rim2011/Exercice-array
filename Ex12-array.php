<?php
$valeur=rand(1,100);
$tab1=array();
echo "<table border='1'><tr>";
for ($i=0;$i<$valeur;$i++)
{
    echo"<td>";
    array_push($tab1,rand(1,63));
    echo $tab1[$i];
    echo"</td>";
}
echo"</tr></table><br />";

$tab2=array();
echo "<table border='1'><tr>";
for ($j=0;$j<$valeur;$j++)
{
    echo"<td>";
    array_push($tab2,($tab1[$j]/10));
    echo $tab2[$j];
    echo"</td>";
}
echo"</tr></table><br/>";

$tab3=array();
echo "<table border='1'><tr><th>X</th><th>Sinus(X)</th></tr>";
$tabSinus=array();
for($k=0;$k<$valeur;$k++)
    {
        array_push($tabSinus,sin($tab2[$k]));

    }

$tab3=array_combine($tab2,$tabSinus);
foreach ($tab3 as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo"</table>";

?>