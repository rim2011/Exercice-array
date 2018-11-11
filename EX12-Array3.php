<?php
$chaine="ahla";
foreach(count_chars($chaine,1) as $i => $val){
   echo  chr($i).":".$val."<br/>";
}