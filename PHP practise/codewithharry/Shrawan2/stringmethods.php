<?php
$str = "This Is It";
echo $str."<br>";
$len = strlen($str);
echo "<br>".$len;
$wordcount = str_word_count($str);
echo "<br>".$wordcount;

echo "<br>".strrev("This")."<br>";
?>

<?php
// getting the serial number
list($serial) = sscanf("SN/2350001", "SN/%d");
// and the date of manufacturing
$mandate = "January 01 2000";
list($month, $day, $year) = sscanf($mandate, "%s %d %d");
echo "Item $serial was manufactured on: $year-" . substr($month, 0, 3) . "-$day\n";
?>

<?php
$text = "Tum ho 10kgs";
list($front, $front2, $weight, $waste) = sscanf($text, "%s %s %d%s");
echo "<br>".$front."<br>".$weight."<br>".$waste;
echo "<br>".strpos($text, "ho");
echo "<br>".str_replace("ho", "nahi ho", $text);
?>