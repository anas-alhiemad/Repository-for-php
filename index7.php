<?php
/*
 * Data Types
 * ======================
 * string and escaping
 * ======================
 * heredoc
 * nowdoc
 * ======================
 * */

$name = 'anas';
echo <<<"heredoc"
hello php 
this is my special character $$$$ /// \" 
my name is $name 
heredoc;

echo '<br>';
echo <<<'now'
hello php 
this is my special character $$$$ /// \\\ 
my name is $name 

now;
echo '<br>';
echo '<ul>';
    echo '<li>'.$name.'</li>';
    echo '<li>'.$name.'</li>';
    echo '<li>'.$name.'</li>';
echo '</ul>';

echo '<br>';

echo <<<"navlink"
 <ul>
    <li>$name</li>
    <li>$name</li>
    <li>$name</li>
</ul>
navlink;
