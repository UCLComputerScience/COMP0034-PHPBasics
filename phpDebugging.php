<?php
$variable = "Hello World \n";
$v2 = 3;
$v4 = true;
$myArray = ['Fred','Claire','Jo'];

echo $variable;  // or echo $variable to see the value assigned to the variable

echo "Array contents: \n";
echo print_r($myArray); //to see the content of an array

echo "Data type of variable: \n";
echo gettype($variable); //to get the data type of a variable

echo "Data type and value of variable: \n";
echo var_dump($variable); //gets variable type and its value

echo "Array of function calls made: \n";
function a($txt) {
    b("Glenn");
}
function b($txt) {
    c("Cleveland");
}
function c($txt) {
    var_dump(debug_backtrace());
}
echo a("Peter");
//var_dump(debug_backtrace());  //array of function calls made

echo "\n Array of all defined variables: \n";
echo print_r(get_defined_vars()); //array of all defined variables