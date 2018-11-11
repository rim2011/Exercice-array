<?php
echo "<div style='display:flex;justify-content: center'><table border=1 width='400'><tr><th>Nom Constante</th><th>Valeur</th></tr>";
foreach(get_defined_constants() as $i => $val){
   echo"<tr><td>$i</td><td>$val</td></tr>";
}
echo"</table></div>";