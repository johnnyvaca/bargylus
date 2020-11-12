<?php
/*
require "model/category.php";
$c = new Category();
$c->SetId(2);
print_r($c->read());
*/
require 'model/Test.php';
$test = new Test();
var_dump($test->read());
