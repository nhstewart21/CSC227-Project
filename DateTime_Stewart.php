<?php
date_default_timezone_set('UTC');

$date = new DateTime('now');

echo $date->format('Y-m-d h:i:s e'), "<br/>";

$date = new DateTime('now', new DateTimeZone('America/Los_Angeles'));
echo $date->format('Y-m-d h:i:s e'), "<br/>";

$date->setTimezone(new DateTimeZone('America/New_York'));
echo $date->format('Y-m-d h:i:s e'), "<br/>";

$date->add(new DateInterval('P4DT10M')); 
echo $date->format('Y-m-d h:i:s e'), "<br/>";
?>