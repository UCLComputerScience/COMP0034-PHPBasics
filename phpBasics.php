<?php

//Console output

print "Hello, world!";

/*
print "Hello, World!\n";
print "Escape \"chars\" are the SAME as in Java!\n";
print "You can have line breaks in a string."; print 'A string can use "single-quotes". It\'s cool!';
*/

//String type
/*
$favorite_food = "Ethiopian";
print $favorite_food[2];
*/

//Interpreted strings
/*
$age = 16;
print 'You are ' . $age . ' years old.\n'; // You are 16 years old
print "You are " . $age . " years old.\n"; // Unnecessary with "", see next line
print "You are $age years old.\n"; // You are 16 years old.
print 'You are $age years old.\n'; // You are $age years old.\n
print "Today is your {$age}th birthday.\n";
*/

//String functions
/*
$name = "Stefanie Hatcher";
$length = strlen($name);              # 16
$cmp = strcmp($name, "Brian Le");     # > 0
$index = strpos($name, "e");          # 2
$first = substr($name, 9, 5);         # "Hatch”
$name = strtoupper($name);            # "STEFANIE HATCHER"
print $name."\n";
print  $length."\n";
print  $cmp."\n";
print  $index."\n";
print  $first."\n";
print  $name."\n";
*/

//Int and float types
/*
$a = 7 / 2;       	# float/double: 3.5
$b = (int) $a;    	# int: 3
$c = round($a);  	# float/double: 4.0
$d = "123";      	# string: "123”
$e = (int) $d;     	# int: 123
print gettype($a)."\n";
print gettype($b)."\n";
print gettype($c)."\n";
print gettype($d)."\n";
print gettype($e)."\n";
*/

//Arithmetic and comparison operators
/*
print PHP_EOL."Addition +: ";
print 2 + 3;
print PHP_EOL."Subtraction -: ";
print 2 - 3;
print PHP_EOL."Multiplication *: ";
print 2 * 3;
print PHP_EOL."Division / ";
print 2 / 3;
print PHP_EOL.'% i.e. Remainder of $x divided by $y: ';
print 5 % 4;
print PHP_EOL."Concatenation . : ";
print "2"."3";
print PHP_EOL."Increment ++ : ";
$n = 3;
$n++;
print $n;
print PHP_EOL."Decrement -- : ";
$n--;
print $n;
print PHP_EOL."Assignment = : ";
$a = 3;
$b = 4;
$a = $b;
print $a;
print PHP_EOL.'Equals 3=="3" : ';
$a = 3;
$b = "3";
if ($a == $b){
    print "true";
} else {
    print "false";
};
print PHP_EOL.'Identical 3==="3" : ';
$a = 3;
$b = "3";
if ($a === $b){
    print "true";
} else {
    print "false";
};
print PHP_EOL."+= : ";
$n = 3;
print $n += 4;
print PHP_EOL."-= : ";
$n = 3;
print $n -= 4;
print PHP_EOL."*= : ";
$n = 3;
print $n *= 4;
print PHP_EOL."/= : ";
$n = 3;
print $n /= 4;
print PHP_EOL."Concatenation 3.=4 : ";
$n = "3";
print $n .= "4";

*/


//Boolean type
/*
$feels_like_summer = FALSE;
$php_is_rad = TRUE;
$student_count = 217;
$nonzero = (bool)$student_count; //TRUE

var_dump($feels_like_summer);
var_dump($php_is_rad);
var_dump($nonzero);
*/

//Arrays
/*
$name = array(); # create
$name = array(12, 75, 65, 90); # create
print_r($name);
$name[2]; # get element value
print($name[2]);
$name[3] = 91; # set element value
print_r($name);
$name[] = 100; # append
print_r($name);
*/

//Array function example
/*
$tas = array("MD", "BH", "KK", "HM", "JP");
for ($i = 0; $i < count($tas); $i++) {
    $tas[$i] = strtolower($tas[$i]);
}# ("md", "bh", "kk", "hm", "jp")
print_r($tas);
$morgan = array_shift($tas);      # ("bh", "kk", "hm","jp")
print_r($morgan);
array_pop($tas);                  # ("bh", "kk", "hm")
print_r($tas);
array_push($tas, "ms");           # ("bh", "kk", "hm", "ms")
print_r($tas);
array_reverse($tas);              # ("ms", "hm", "kk", "bh")
print_r($tas);
sort($tas);                       # ("bh", "hm", "kk", "ms")
print_r($tas);
$best = array_slice($tas, 1, 2);  # ("hm", "kk")
print_r($best);
*/

//Comments
# single-line comment
// single-line comment
/*
multi-line
comment
*/

//For loop
/*
for ($i = 0; $i < 10; $i++) {
    print "$i squared is " . $i * $i . ".\n";
}
*/


//Foreach
/*
$arr = array(1, 2, 3, 4);
foreach ($arr as $value) {
    echo $value ."<br>";
}
 */

//If else statement
/*
if ($a > $b) {
    echo "a is bigger than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
}
*/

//While
/*
$x = 1;
while($x <= 5) {
    print "The number is: $x \n";
    $x++;
}

//Do while
$x = 6;
do {
    print "The number is: $x \n";
    $x++;
} while ($x <= 5);
//Change the value of x for the while statement to see the difference in the output of the two functions
*/

//Variables
/*
//$name = expression;
$user_name = "PinkHeart78";
$age = 16;
$drinking_age = $age + 2;
$this_class_rocks = TRUE;
print $user_name . "\n";
print $age . "\n";
print $drinking_age . "\n";
var_dump($this_class_rocks);
*/

//PHP functions
/*
function bmi($weight, $height)
{
    $result = $weight / ($height * $height);
    return $result;
}
print bmi(75, 2); # call the function
*/

//Variable scope
/*
$school = "Hogwarts";  # global variable
function appendSuffix() {
    global $school;
    $suffix = "(UK)";  # local variable
    $school = "$school $suffix";
    print "$school\n";
}
print appendSuffix();
*/

//Default parameter values
/*
function print_separated($str, $separator = ", ") {
    if (strlen($str) > 0) {
        print $str[0];
        for ($i = 1; $i < strlen($str); $i++) {
            print $separator . $str[$i];
        }
    }
}
print_separated("hello");        # h, e, l, l, o
print("\n");
print_separated("hello", "-");   # h-e-l-l-o
*/

