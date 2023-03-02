# php
#### just trying things out on git hub <!-- host name is github.com-bevanwhite -->

1. what is php?
php recursive acronym for php: Hypertext Preprocessor<br>
is a widely-used open source general-purpose cripting language that is especially<br>
suited for web development and can be embedded into html

2. what is Scripting Language?
Is a programming language that is used to manipulate, customize, and automate <br>
the facilities of an existing system.<br>
scripting languages are usually interpreted at runtime rather than compiled.

3. what is Machine Language?<br>
Is the language understood by a computer. It's very difficult to understand,
but it is the only thing that the computer can work with. all programs and programming
languages eventually generate or run programs in machine language.

4. why php & what can you do with it?
* Easier to Get Started
* Beginner Friendly
* powerful
* Build CLI Tools
* Build Websites & Web Apps
* Great Ecosystem & Frameworks

5. what basic php (procedural)?
* php installation & setup
* syntax & Operators
* Variables & Data Types
* control structures & Functions
* Type Casting & Error Handling 
* php.ini/ web server configs
* working with Arrays
* working with Dates

6. what Intermediate php (OOP)?
* Classes & Methods
* Objects oriented php
* code style & PSR
* Namespaces & Autoloading
* Dependency Management
* Super Globals($_*)
* Cookies & Sessions
* Databases

7. what Advanced php?
* Testing, phpUnit, TDD, BDD
* Intro to MVC & Routing
* Dependency Injection Container
* Caching & security
* Frameworks
* php 8
* Hosting & Deployment
* Best practices

8. what is web server?
a web server is a computer and underlying hardware that accepts requests via HTTP
or its secure varient HTTPS.
a user agent commonly a web browser or web crawler, initiates communication by making a request for a web page or other resource using http and server responds with the content 
of that resource or an error message.

(http - the network protocol created to distribute web content)

9. disadvantage of using xampp?
* no multiple php versions
* no mulitiple mysql versions
* not for Production
* Difficult to Maintain Multiple Projects

```
echo print'Hello World'; working
print echo 'Hello World'; error echo can't go under print
echo 'Hello', ' ',  'World'; working
print 'Hello', ' ',  'World'; error - print can't have ","  
print 'Hello World'; working 
echo 'Hello World'; wroking 
echo ('Hello World'); working 
print ('Hello World'); working 

you can use echo like this
echo "Joe's Invoice"; // using escape parantheses 
echo 'Joe\'s Invoice'; // using escape character

variable naming
$name = 'Gio'; // normal way
$_123name = 'Gio'; //starting with underscore
// in variables you can't have special characters

$this = 'Gio'; // $this - Fatal error

$x = 1;
$y = &$x;
$x = 8;
echo $y;  as the above example shows $y will be changed after when ever $x is changed
echo 'Hello $firstName'; // gives you the variable name not the value
$firstName = "Jeffery";

echo '<p>'. $firstName . ', ' . $firstName .'</p>'  ; 
"Hello $firstName" // this also gives the value
"Hello {$firstName}" // write in {} 
'Hello '. $firstName // this way also work

    // comment 1
    # comment 1 
    /* comment 2
    you can comment multiple line of comment here
    *

you can write the php code like this also
<?= ?>

//you can assign variable name using . operator 
$paid = 'PAID';
define('STATUSA_'. $paid, $paid);
// Constants
// using define to create Constants
// define('name', 'value'); 
define('STATUS_PAID', 'paid');

// using const
const FOO = 'bar';
echo defined('STATUS_PAID');  // to check whether Constants defined or not

if(true){
    const FOO = 'bar'; this will be a error
    define('STATUS_PAID', 9);
}
echo STATUS_PAID;
echo FOO;
// php constaint
echo PHP_VERSION;
echo '<br>'. FOO;
echo __LINE__;

// variable variables
$foo = 'bar';

$$foo = 'Baz';

echo "$foo, $$foo";
```