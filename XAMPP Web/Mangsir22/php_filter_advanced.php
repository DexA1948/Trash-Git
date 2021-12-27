<?php
$range = array(
    "options" => array(
        "min_range" => 1,
        "max_range" => 200
    )
);

$int = 1;

if(filter_var($int, FILTER_VALIDATE_INT, $range)){
    echo "Yes, the value is in range<br>";
}else{
    echo "Sorry, the value is not in range<br>";
}

//validate ipv6 address
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)){
    echo "Valid IPv6 Address<br>";
}

//validate url with query string
$url = "http://www.w3schools.org/hello?name=deshant";

if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
    echo "Valid Email with Query String<br>";
}else{
    echo "No, Not Valid Email with Query String<br>";
}

//sanitize characters with ascii value > 127
$str = "Hello, kk janxa. 1234 ! @ # $ ÆØÅ";

$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

echo $newstr;


?>
