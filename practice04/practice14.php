<?php

// strip_tags

$text = '<p>First</p><!-- comment --><a href="#fragment">Second</a>';

    echo strip_tags($text);
    echo "\n";

// <p>と<a>は許可します
    echo strip_tags($text,'<p><a>');
?>


<?php

// array_push

$fruits = array("lemon","peach");

/* 要素を追加する　*/
array_push($fruits,"apple","melon");

print_r($fruits);

?>


<?php

// array_merge

$fruits1 = array("a","b","today" => "kyo");

$fruits2 = array("c","d","today" => "sunday","tomrrow" => "monday");

/* 配列を追加する*/
$result = array_merge($fruits1 , $fruits2);

print_r($result);

?>


<?php

// time,mktime

date_default_timezone_set('UTC');

echo time() . "\n";

echo mktime(0,0,0,11,31,2019);

?>


<?php

// date

$date = time();

echo $date , "=>";
echo date("Y-m-d/h:i:s",$date),"\n";

$date2 = mktime(12,34,56,11,31,2019);

echo $date2 , "=>";
echo date("Y-m-d/h:i:s",$date2);

?>
