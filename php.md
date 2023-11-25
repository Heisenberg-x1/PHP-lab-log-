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

### Getting user data with forms

- We can use the get method to get the data from forms

```php
<form action="inputs.php" method="get">
            Name: <input type="text" name="name">
            <br>
            <br>
            <input type="submit" value="Submit">

            <?php
            echo  "Hello " . $_GET["name"];
            ?>
        </form>
```

- The action attribute specifies where the form data should be handled
- The get attribute species the HTTP method to be used when submitting the form data
- We can then access the data using the $_GET super-global array.

### Difference between GET and POST

- We notice when we use the method GET, the data in the form gets updated in the url.
- This might turn out to be a bad practice for some sensitive data like passwords
- The method POST solves this as the data from the forms is not accessed i the url

### ARRAYS

```php
$colors = array("red", "green", "blue", "indigo", "yellow");
echo $colors[0] . "<br>";
```
- When getting data from a checkboxes, you might wanna set the name of the items to be the same as it makes it easier to group the checkboxes
- Also, the name should have square brackets at the end 

```php
<form action="checkboxes.php" method="post">
    <!--    The name atteibute should be the same as it allows u to group the checkboxes-->
    Apple: <input type="checkbox" name="fruits[]" value="apple"> <br>
    banana: <input type="checkbox" name="fruits[]" value="banana"> <br>
    pear: <input type="checkbox" name="fruits[]" value="pear"> <br>
    <input type="submit" value="submit">
</form>
```
- When using return keyword in functions, any code that comes after the return statement never gets executed.
- If else block are used just like in other languages
- The syntax is almost the same.
- When getting data from forms, we can add the step attribute in number input tags to make it possible to get decimal numbers. Check the code illustration below.

```php
<input type="number" step="0.01" name="num1" placeholder="Enter num1">
```