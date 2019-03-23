<html>
<body>

<?php


$array1= array("Sanduni", "Kasun", "Amal", "Nisha", "Sanka");
$array2 = array("Mango", "Apple", "Banana", "Grape", "Orange");

for($index=0; $index<count($array1) ; $index++ ){
echo "My name is " . $array1[$index] . " and my favourite fruit is " . $array2[$index] . ".";
echo "<br/>";

}
 

?>

</body>
</html>