## Get request
In get request, parameters are passed as a part of url, with each parameter separated by "&".

For instance, for an URL
www.example.com/name.php?name=abc&gender=female

### To print the parameters
```
<?php
print_r($_GET);
echo $_GET["gender"];
?>
```
## User Interaction using a form
```
<?php
echo "hi there ".$name;

?>
<p>Whats your name</p>
<form>
  <input name="name" type="text">
  <input type="submit" value="go">
</form>
```

### To check whether the number is prime or not based on user input
```
<?php

    if(is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0)){
        
        $i = 2;
        
        $isPrime = true;
        
        while ($i < $_GET['number']) {
            
            if ($_GET['number'] % $i == 0) {
                
                // Number is not prime!
                
                $isPrime = false;
                
            }

            $i++;            
        }
        
        if ($isPrime) {            
            echo "<p>".$i." is a prime number!</p>";
            
        } else {
            
            echo "<p>".$i." is not prime.</p>";           
        }  
        
    } else if ($_GET) {
        
        // User has submitted something which is not a positive whole number
        
        echo "<p>Please enter a positive whole number.</p>";
     }

?>

<p>Please enter a whole number.</p>
<form>
    <input name="number" type="text">
    <input type="submit" value="Go!">    
</form>
```
The number entered by the user goes as www.example.com/index.php?number=10

## Working with post request
here the value of variable or the parameter is not sent as a part of URL

```
<?php
  
    $correctName = "shreya";
    if($_POST['name'] == $correctName) {
      echo "correct user entered";
    }
    else {
      echo "I dont you";
    }
?>

<p>Please enter your name.</p>
<form method="post">
    <input name="name" type="text">
    <input type="submit" value="Go!">    
</form>

```
