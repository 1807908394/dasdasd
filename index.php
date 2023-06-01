<?php
header('content-type:text/html;charset=utf-8');

include  './vendor/autoload.php';
$v = new \Yourname\Projectname\Verify();
var_dump($v->isValidEmail('1807908394@qq.com'));