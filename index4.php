<?php
/*
 * ==============
 * type casting
 * ==============
 * boolean
 * integer
 * float or double or real
 * string
 * array
 * object
 * null
 * ===============4
 * search for settype;
 * result is ::  The settype() function converts a variable to a specific type
 *  */

echo 3 + (int)'4 lessons';
echo '<br>';
echo 4.5 + 5.5;
echo '<br>';
echo 4.5 + (int)5.5;
echo '<br>';
echo (int)4.5 + (int)5.5;
echo '<br>';
echo (int)(4.5 + 5.5);
echo '<br>';
echo gettype((4.5 + 5.5));

$a = "32"; // string
echo gettype($a);
echo '<br>';
settype($a, "integer"); // $a is now integer
echo gettype($a);

$b = 32; // integer
settype($b, "string"); // $b is now string

$c = true; // boolean
settype($c, "integer"); // $c is now integer (1)
