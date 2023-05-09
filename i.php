<?php

		$xmldata = simplexml_load_file("Q6book.xml") or die("Failed to load");

		echo "Name       Rate      Quantity <BR> ";

		foreach($xmldata->children() as $book)

		{

			echo $book->book_name . ",  ";

			echo $book->book_rate . ", ";

			echo $book->book_quantity . "<BR> ";

		}

	 

?>
