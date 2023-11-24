## PHP made simple

### *Set up

- First we install php then edit the environment variables
- We can check if the variables are added well by running
***echo %PATH%***
- we can then verify the php version by running 
***php -v***
- Then we start a local host since php is a language that runs on a server
- In cmd run 
***php -S localhost:4000***
- Leave the server running in the terminal, don't interrupt
- Create a php file in the text editor then get the basic html file boilerplate. 
- We write php code inside the body tag and enclosed by php tags. Look at the code snippet below
```php
<?php
    echo "Hello World";
?>
```
- We can also write html code inside the php tags
```php
<?php
    echo "<h1>Hello World</h1>";
?>
```
- We have to place the semicolon at the end of the statement


### *Variables
- Container for storing data
- We declare variables using the $ sign
- We can assign values to variables using the assignment operator
```php
<?php
    $name = "Nerd42";
    $age = 22;
    echo $name;
    echo $age;
```
- We can then reassign values to an already declared variable.

```php
    $name = "Nerd42";
    $age = 22;
    echo "I am $name and age is $age <br />";
    $name = "nerd44";
    echo "I changed my name to $name"
```

### *Data types

(i) Strings
- plain text
(ii) Integer 
- whole numbers
(iii) Floating point numbers
- decimals
(iv) Booleans
- True or False values

- Null in php is a special type that represents no value.

### Working with Strings
 Some common string methods are:
 
```markdown
- strlen()
- strtolower()
- strtoupper()
- substr() - takes 3 params. String, offset, length of new string

```
- Accessing characters in strings 
```php
echo $text[2]; //accessing the 3rd char
```

- Modifying the string using indexing 
```php
$text[2] = "B";
echo "<br>" . $text;
```
- Replacing elements in a string 
```php
$text = str_replace("random", "changed", $text);
echo "<br>" . $text;
```

### Working with numbers
- There arte a bunch of math functions in php
- The most common ones are as follows:
```php
 echo "<br>Sqrt: " . sqrt($num);
 echo "<br>Round: " . round(sqrt($num));
 echo "<br>Floor: " . floor(sqrt($num));
 echo "<br>Ceil: " . ceil(sqrt($num));
 echo "<br>Random num btwn 1 & 100: " . rand(1,100);
 echo "<br>min of 2 and 45: " . min(2,45); // max works the same way too
```

