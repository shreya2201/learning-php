<?php
$myarray = array("cat","dog","tiger");

#print_r is used for printing any object
print_r($myarray);

echo "$myarray[1]";

$age = 18;
if($age > 18) 
  echo "Adult";
else
  echo "child";
  
  
#for loop implementation
for ($i = 0 ; $i < 10 ; $i++) {
  echo $i."<br>"

#for each loop implementation
foreach($myarray as $key => $value) {
  echo "Array item ".$key."is ".$value."<br>";
  }
?>
