<?php
require_once __DIR__ . "/vendor/autoload.php";
 
use Jaspersoft\Client\Client;
 
$c = new Client(
				"http://localhost:8080/jasperserver",
				"jasperadmin",
				"jasperadmin",
				"organization_1"
			);

$report = $c->reportService()->runReport('/reports/samples/AllAccounts', 'html');
 
echo $report;
?>