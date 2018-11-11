<?php
$tab=array(
    "1"=>array("As","carte\\As.png"),
    "2" =>array("Deux","carte\\deux.png"),
    "3" =>array("Trois","carte\\trois.png"),
    "4" =>array("Quatre","carte\\quatre.png"),
    "5" =>array("Cinq","carte\\cinq.png"),
    "6" =>array("Six","carte\\six.png"),
    "7" =>array("Sept","carte\\sept.png"),
    "8" =>array("Huit","carte\\huit.png"),
    "9" =>array("Neuf","carte\\neuf.png"),
    "10" =>array("Dix","carte\\dix.png"),
    "11" =>array("Valet","carte\\valet.png"),
    "12" =>array("Dame","carte\\dame.png"),
    "13" =>array("Roi","carte\\roi.png")
);

$joueur1=array_rand($tab,5);
$joueurVal1=array();
for($i=0;$i<5;$i++) {
    array_push($joueurVal1,$tab[$joueur1[$i]]);
}

$joueur2=array_rand($tab,5);
$joueurVal2=array();
for($i=0;$i<5;$i++) {
    array_push($joueurVal2,$tab[$joueur2[$i]]);
}
$scoreJ1=0;
$scoreJ2=0;
for($i=0;$i<5;$i++) {
        $varImage1=$joueurVal1[$i][1];
        $varImage2=$joueurVal2[$i][1];
        $nomCarteJ1=$joueurVal1[$i][0];
        $nomCarteJ2=$joueurVal2[$i][0];
        if($joueur1[$i]>$joueur2[$i])
            $scoreJ1+=1;
        elseif ($joueur1[$i]<$joueur2[$i])
            $scoreJ2+=1;
        echo "<div class='container' style='display:flex; justify-content:space-around'><div><h1>$nomCarteJ1 Joueur1</h1><img src=$varImage1/><h2>$scoreJ1</h2></div>
              <div><h1>$nomCarteJ2 Joueur2</h1><img src=$varImage2 /><h2>$scoreJ2</h2></div></div><br/>";

}
 if($scoreJ1>$scoreJ2)
     echo "<p style='font-size:25px;text-align:center;'>Le joueur1 a gagné</p>";
 elseif($scoreJ1<$scoreJ2)
     echo "<p style='font-size:25px;text-align:center;'>Le joueur2 a gagné<p>";
 else
     echo "<p style='font-size:25px;text-align:center;'>personne n'a gagné</p>";
