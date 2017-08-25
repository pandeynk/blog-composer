<?php
require "vendor/autoload.php";
use Library\Student;
use Library\User;

$u = new Student("nandan", "matric");
echo $u->getName();
echo $u->getStd();

$u2 = new User("niteesh");
echo $u2->addString();
