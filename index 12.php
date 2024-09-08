<?php
/*
pre_defiend variables

search pre_defined
*/
//echo '<pre>';
//print_r($_SERVER);
//echo $_SERVER["CURLINFO_HTTP_CONNECTCODE"];
//echo '</pre>';
$arr1 = [1, 2];
$arr2 = [3, 4];
$result = array_merge($arr1, $arr2);
print_r($result);
echo '<br>';
echo $_POST["username"];
?>
<form action="" method="post">
    <input type="text" name="username">
    <input type="submit" value="Send">
</form>