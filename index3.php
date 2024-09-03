<?php
/*
 * =============================================
 * type juggling + automatic type conversion
 * ===============================================
 * */
echo 2 + "2";
echo '<br>';
echo gettype(2 + "2");
echo '<br>';
echo 2 + "2 classes";
echo '<br>';
echo gettype(2 + "2 classes");
echo '<br>';
echo 2 + 2.4;
echo '<br>';
echo gettype(2 + 2.4);