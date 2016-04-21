<?php
require_once('inc/class-tables.php');

$tables = new CreateTables();
$tables->build_tables('localhost', 'root', 'LocalHost123!', 'empiresports');

$con = new mysqli('localhost', 'root', 'LocalHost123!', 'empiresports');
$query  = $con->query();
$query->num_rows();