<?php
echo date_default_timezone_get();
echo "<br>";
echo date('d');
echo '<br>';
echo date('m');
echo '<br>';
echo date('Y');
echo '<br>';
echo date('l');
echo '<br>';
echo date('y');
echo '<br>';
echo date('d-m-Y-l');
echo '<br>';
echo date('H-i-s-a');
echo '<br>';
echo date('h-i-s-a');
echo '<br>';
echo '<br>';

//using nepali timezone
echo "using nepali timezone:";
date_default_timezone_set("Asia/Kathmandu");
echo date('d/m/Y, l h:i:sa');
echo '<br>';
echo '<br>';

//creating your own timestamp
$d = mktime(21, 21, 01, 8, 21, 2021);
echo "Created timestamp using mktime is:".$d;echo '<br>';
echo "Created date using mktime is:".date('d-m-Y, l  h:i:sa', $d);echo '<br><br>';

//using strtotime
$d = strtotime('next Year');
echo "Created timestamp using strtotime is:".$d;echo '<br>';
echo "Created date using strtotime is:".date('d-m-Y, l  h:i:sa', $d);echo '<br><br>';
?>

<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>