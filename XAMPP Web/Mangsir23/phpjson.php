<pre>
<?php 
$arr = array("hello"=>"world", "my"=>"name", "is"=>23);

echo json_encode($arr);

$text = '{"my":"name"}';

echo(json_decode($text, true));
?>
</pre>