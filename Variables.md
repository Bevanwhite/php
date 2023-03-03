how to start php
* `<?php ?>`
* `<?= ?>`

how to print something using php
* `<?php echo 'hello world'; ?>`
* `<?php echo ('hello world'); ?>`
* `<?php echo 'hello', ' ', 'world'; ?>`
* `<?php echo 'hello'.' '.'world'; ?>`

wrong ways to use print in php
* `<?php print 'Hello', ' ', 'World'; ?>` // error
* `<?php print echo 'Hello World' ?>` // error

correct way to use print in php
* `<?php print 'hello world';  ?>`
* `<?php print ('hello world'); ?>`

how to use this ' in php
* `echo "Joe's Invoice";` // using escape parentheses 
* `echo 'Joe\'s Invoice';` // using escape character

how to use comment in the php
* `// comment`
* `# comment`
* `/* mulitiline comment */`
```
/*
 * Doc string comments
 */
```

variable naming in php
* `$name = 'Gio';` 
* `$_123name = 'Gio';` //starting with underscore
* can't use special characters 
* can't start with numbers
* can't use `$this` as variable name

how to change the value when one value changes
* if you assign & before $ then it will mirror the x value intil it execute x value;
```
<?php
    $x = 1;
    $y = &$x; // 1
    $x = 8;

    echo $y; // 8

    $name = "Jeffery";
?>
```
how to print/echo variable in a wrong way
* `echo '$name'; // $name `print only the variable name only not the value

how to print/echo variable in a correct way
* `echo "Hello $name";`
* `echo "Hello {$name}";`
* `echo 'Hello '. $name;`
* `echo '<p>'. $name . ', ' . $name .'</p>'`

how to create constants in php
* using `define('name','value');`
* using `const name = name;`
* to find it defined ot not use `defined('STATUS_PAID');` 
* in `defined('STATUS_PAID');` if it avaliable it return 1 if not nothing
* for constant in php use all caps
```
const FOO = 'bar';
define('STATUS_PAID', 9);

echo defined('STATUS_PAID');  // to check 
echo FOO;
echo STATUS_PAID;
```

how to use variable for name the varaible using . operator
```
$name = 'PAID';
define('STATUSA_'. $name, $name); 
```

some of the php constant
* `echo PHP_VERSION;`
* `echo __LINE__;`

how to use variable variables
```
$foo = 'bar';

$$foo = 'Baz';

echo "$foo, $bar";
echo "$foo, {$$foo}";
echo "$foo, ${$foo}";
```
* this `echo "$foo, $$foo";` gives you the variable name not the value