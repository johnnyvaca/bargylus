<?php
require "model/category.php";
$c = new Category();
$c->SetId(2);
print_r($c->read());