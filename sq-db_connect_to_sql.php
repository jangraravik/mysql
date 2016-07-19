<?php

$serverName = "sql.domain,1533";

$connectionInfo = array("UID" => user"PWD" => "password",  "Database" => "sitecms");

$connection = sqlsrv_connect($serverName, $connectionInfo);

if ($connection) {
     echo "Connection established.\n";
} else {
     echo "Connection could not be established.\n";
     echo "<pre>";
	 die( print_r( sqlsrv_errors(), true));
}
