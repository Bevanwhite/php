what is dynamically type?
* Dynamically-typed languages are those (like Javascript) where the interpreter assigns
variables a type at runtime based on the variable's vaule at the time

what is statically type?
* where variable types are known at compile time. in most of these languages, types must be expressly
indicated by the programmer; in other cases, type inference allows the programmer to not indicate their variable types.

### Data Types & Type Casting
what scalar type means?
* the data type conatians only one single value.

4 Scalar Types in php?
1. bool - true / false
* `$completed = true;`
2. int - 1, 2, 3, 0, -5 (no decimal)
* `$scope = 75;` 
3. float - 1.5, 0.1, 0.005, -15.8
* `$price = 0.99;`
4. string - "Gio", "Hello World"
* `$greeting = 'Hello Gio';`

```
echo $completed . '<br />';
echo $scope . '<br />';
echo $price . '<br />';
echo $greeting . '<br />';

echo gettype($completed);
echo gettype($scope);
echo gettype($price);
echo gettype($greeting);

var_dump($completed);
var_dump($scope);
var_dump($price);
var_dump($greeting);
```
how to get the data in array
* `$companies = [1,2,3,0.5,-9.2,'a','B',true];` creating array
* `echo $companies;` // array to string conversion error 
* `print_r($companies);` // print array with index

how to use var_dump in php
* `var_dump($variable);` // it discribe the variable type and the value of it.

how to use `strict_types` in php
* `declare(strict_types=1);` but php has to the first command in that php file
* you can't declare this on a html file because it start with `<!Doctype>`
* but you can't make the unicode for `UTF-8 with BOM` that gives you error
