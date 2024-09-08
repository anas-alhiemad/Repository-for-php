<?php
/*
 * variable variable
 *
 * */
$myName = "anas";
$$myName = "ali";
echo $myName;
echo '<br>';
echo $$myName;
echo '<br>';
echo $anas;
echo '<br>';
echo "hello ${$myName}"; // $$myName
//====================================
echo '<br>';
echo '<br>';
echo '<br>';
$a = "anas";
$b =& $a ;
$b = "ali";
echo $a;
echo '<br>';
echo $b;