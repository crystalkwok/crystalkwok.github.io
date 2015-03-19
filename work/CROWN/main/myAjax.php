<?php


//if ($_POST["action"] == "assign")
//{
//    assign(stuff); //You need to put the parameters you want to pass in
                             //the data field of the ajax call, and use $_POST[]
                             //to get them 

		/*echo "<script type='text/javascript'>alert('we\'re up all night to get lucky');</script>";*/
	file_put_contents ('gettinlegit.txt', $_POST["eventName"]);
//}


?>
