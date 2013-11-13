<?php
require_once("bootstrap.php");

$_REQUEST['controller'] = "vare";
$_REQUEST['productid'] = 2;
$request = $_REQUEST;

new \config\router($request);
