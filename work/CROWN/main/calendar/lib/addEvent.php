<?php
		$file = "events.js";
		$arr = file($file);

		$current = file_get_contents($file);
		$title = 'title: "'.$_POST["eventName"].'",';


		if (!($_POST["eventStart"] != ''))
			$_POST["eventStart"] = '2014-09-20 12:00';
		$start = 'start: "'.$_POST["eventStart"].'",';
		$end = 'end: "'.$_POST["eventEnd"].'",';

		if (!($_POST["eventPriority"] != ''))
			$_POST["eventPriority"] = 0;

		$priority = 'priority: "'.$_POST["eventPriority"].'"';
		$newEvent = ["{", $title, $start, $end, $priority, "},","];", "}"];

		unset($arr[sizeof($arr) - 1], $arr[sizeof($arr) - 1]);
		$arr = array_values($arr);

		file_put_contents ($file,implode($arr));
		file_put_contents ($file, implode(PHP_EOL, $newEvent), FILE_APPEND);
		file_put_contents ('gettinlegit.txt', $_POST["eventName"]);
?>
