<?php
error_reporting(0);
//get the q parameter from URL
$q=$_GET["q"];

//find out which feed was selected
if($q=="Head") {
  $xml=("http://www.thehindu.com/news/?service=rss");
} elseif($q=="International") {
  $xml=("http://www.thehindu.com/news/international/?service=rss");
} elseif($q=="Cricket") {
  $xml=("http://www.thehindu.com/sport/cricket/?service=rss");
}

$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

//get elements from "<channel>"
	$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
	$channel_title = $channel->getElementsByTagName('title')
	->item(0)->childNodes->item(0)->nodeValue;
	$channel_link = $channel->getElementsByTagName('link')
	->item(0)->childNodes->item(0)->nodeValue;
	$channel_time = $channel->getElementsByTagName('pubDate')
	->item(0)->childNodes->item(0)->nodeValue;
	$channel_desc = $channel->getElementsByTagName('description')
	->item(0)->childNodes->item(0)->nodeValue;

//output elements from "<channel>"
echo("<br>");

//get and output "<item>" elements
$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=100; $i++) {
	$item_title=$x->item($i)->getElementsByTagName('title')
	->item(0)->childNodes->item(0)->nodeValue;
	$item_link=$x->item($i)->getElementsByTagName('link')
	->item(0)->childNodes->item(0)->nodeValue;
	$item_time=$x->item($i)->getElementsByTagName('pubDate')
	->item(0)->childNodes->item(0)->nodeValue;
	$item_desc=$x->item($i)->getElementsByTagName('description')
	->item(0)->childNodes->item(0)->nodeValue;
  echo ("<p><a href='" . $item_link
  . "'target='_blank'>" . $item_title . "</a>");
  echo ("<p>".$item_time."</p><br>");
  echo ($item_desc . "</p>");
}
?>