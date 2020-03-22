##Hello world in php
```
<?php 
echo "hello world"
$name = "shreya";
echo "my name is $name";
$string1 = "this is part 1";
$string2 = "this is part 2"
echo $string1." ".$string2;

#in php true is considered as 1 and false is considered as nothing
$bool = true;
echo "<p>Is the value true ".$bool."</p>"

?>
```
create a php.ini file to keep track of errors
php.ini

error_reporting = E_ALL
display_errors = On

### initialization can also be done inside the php code as

```
<?php 
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
?>
```
