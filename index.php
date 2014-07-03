<?php 
echo "<h1>Padding Top</h1>";

for ($x=0; $x<=500; $x++) {
  echo ".pad-top-$x {padding-top: 0px;}";
} 

echo "<h1>Padding Left</h1>";

for ($l=0; $l<=500; $l++) {
  echo ".pad-left-$l "; echo "{padding-left: ".$l."px;}<br>";
} 

echo "<h1>Padding Right</h1>";

for ($r=0; $r<=500; $r++) {
  echo ".pad-right-$r "; echo "{padding-right: ".$r."px;}<br>";
} 

echo "<h1>Padding Bottom</h1>";

for ($b=0; $b<=500; $b++) {
  echo ".pad-bottom-$b "; echo "{padding-bottom: ".$b."px;}<br>";
} 
?>