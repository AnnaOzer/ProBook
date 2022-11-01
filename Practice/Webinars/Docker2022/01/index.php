<?php
$dbh = new PDO('pgsql:host=postgres;dbname=profit', 'profit', 'profit');
var_dump($dbh);