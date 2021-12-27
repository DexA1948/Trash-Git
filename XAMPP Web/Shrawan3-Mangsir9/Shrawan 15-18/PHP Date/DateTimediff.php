<?php
date_default_timezone_set('UTC');

$origin = new DateTime('2009-10-11');
$target = new DateTime('2009-10-09');
$interval = $origin->diff($target);
echo $interval->format('%R%a days');

echo "<br/>".date('l jS \of F Y h:i:s A');
echo "<br/>"."July 1, 2000 is on a " . date("D", mktime(0, 0, 0, 7, 1, 2000));
echo "<br/>Date Cookie Format:".date(DATE_COOKIE);
?>