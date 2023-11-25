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

- When getting data from a checkboxes, you might wanna set the name of the items to be the same as it makes it easier to
  group the checkboxes
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
- When getting data from forms, we can add the step attribute in number input tags to make it possible to get decimal
  numbers. Check the code illustration below.

```php
<input type="number" step="0.01" name="num1" placeholder="Enter num1">
```

- Switch statements and while loops have the same syntax as in other languages.

**using include**

- We can use include in php to include other files. We can for example create header and footer hml files that is going
  to b e reused in different pages of a website, and just include in thise websites without having to rewrite them again

```php
<?php
include  "header.html";

?>
<p>
    ferri iusto no docendi tractatos an sapien ea veritus nonumy luptatum esse invenire facilisis elementum comprehensam nisi sea qui maximus labores constituto sodales cum meliore elitr tale errem tation volumus delectus massa mentitum habemus graecis possit utroque ubique porro omnesque gubergren viris posuere evertitur necessitatibus tota postea mentitum felis verterem metus nibh faucibus magnis et quod facilis tritani dui cum volutpat tempor natum conubia saperet libero consul sumo tota melius risus morbi at atqui posuere fabellas cursus placerat vocibus vero nihil legere faucibus finibus autem est veniam posidonium varius adipisci omittam accusata accumsan graece impetus invenire eripuit eros mauris conceptam
</p>
<?php include "footer.html"?>
```

- In the example above, the footer and the header files are being reused in the current file.

### Classes,properties, methods & Constructors

```php
class Book{
//    We use the var keyword to declare properties in a class
//In modern php we can use private, public and protected to declare properties
    var $title;
    var $author;
    var $price;
    public  $pages;
//    Below is a constructor
    function  __construct($title, $author, $pages,$price)
    {
        $this->title = $title;
        $this->price = $price;
        $this->pages = $pages;
        $this->author = $author;
    }
    function isExpensive()
    {
        if ($this->price > 1000) {
            echo "$this->title is expensive <br>";
        } else {
            echo "$this->title is cheap <br>";
        }
    }
}
$book1 = new Book("Harry Potter", "Potter", 400, 1200);
$book2 = new Book("Great Egypt", "Warder", 700, 200);
$book2->isExpensive();

```