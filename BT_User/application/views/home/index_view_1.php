<h1>day la file index_view</h1>
<?php
	echo $title.' By '.$author.'<br />';
	foreach ($info as $k => $v) {
		echo $k.':'.$v.'<br />';
	}
?>