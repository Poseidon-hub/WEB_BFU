<?php

// task1.a

$Regular_Expressions_task1_a = '/a..b/';
$str1 = 'ahb acb aeb aeeb adcb axeb';

preg_match_all($Regular_Expressions_task1_a, $str1, $found1);
var_dump($found1);


