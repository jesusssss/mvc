<?php
require_once("bootstrap.php");

$request = $_REQUEST;

new \config\router($request);
