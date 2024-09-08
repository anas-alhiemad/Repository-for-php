<?php
echo (int)15.2 + (int)14.7 + (int)(10.5 + 10.5); // 50
echo '<br>';
echo gettype((int)15.2 + (int)14.7 + (int)(10.5 + 10.5)); // Integer


// ===============================================================================
echo '<br>';
echo gettype(100);
echo '<br>';
echo var_dump(100 ) ;
echo '<br>';
echo is_integer(100);
echo '<br>';
// =================================================================================
echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"$\$PHP\"";
echo '<br>';
echo '<br>';
// ==================================================================================
echo  nl2br("We \n Love \n Elzero \n Web \n School");
echo '<br>';
echo '<br>';
// ==================================================================================
echo <<<'nowEscaping'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
nowEscaping;
//===================================================================================
echo '<br>';
$something = "Programming";

echo <<<"code"
 Hello \PHP\
 We Love $something
code;
//===================================================================================
echo '<br>';
echo is_string("Hello PHP");
echo '<br>';
echo gettype((integer)"Hello PHP");
//===================================================================================
echo '<br>';
echo '<pre>';
print_r([ 'FrontEnd' => Array
(
    0 => 'HTML',
    1 => 'CSS',
'JS' => Array
( 'Vuejs' => Array(
        2 => 'v2',
        3 => 'v3'),
    0 => 'Reactjs',
    1 => 'Svelte'
            )),
        'BackEnd'=>Array(0=>'PHP',
                          1=>'MySQL',
                           2=>'Security' ),
    0=>'Git',
    1=>'Github',
    'Testing'=>Array(
        0=>'Unit Testing',
        1=>'End To End',
        2=>' Integration'
    )

]);
echo '</pre>';