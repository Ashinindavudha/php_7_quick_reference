<?php
$category = "news";
 switch ($category) {
 case "news":
 print "<p>What's happening around the World</p>";
 break;
 case "weather":
 print "<p>Your weekly forecast</p>";
 break;
 case "sports":
 print "<p>Latest sports highlights</p>";
 break;
 default:
 print "<p>Welcome to my Web site</p>";
 }
