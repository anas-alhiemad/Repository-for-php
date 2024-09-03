<?php
/*
 * ================================================
 * Data Types
 * bool => boolean
 * int => integer
 * float => floating point number | double
 * string
 * array
 * other type
 * gettype() => build in function
 * ===============================================
 * */

echo gettype(10.3);
echo '<br>';
echo gettype(true);
echo '<br>';
echo gettype (array("name1" => "anas", "name2" => "moh"));
echo '<br>';
echo gettype (array("anas","moh"));
echo '<br>';
echo gettype (['jj']);