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