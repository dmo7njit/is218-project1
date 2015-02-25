<?php

//menu
	echo '<a href="?page=php">PHP Menu</a><br>';
	echo '<a href="?page=xml">XML Menu</a><br>';
	echo '<a href="?page=java">Java Menu</a><br>';
	echo '<a href="?page=python">Python Menu</a><br>';

//initiates object based on request	
	$obj = new $_REQUEST['page'];

// main page class definition with base constructo
	class page{
	
		function __construct(){
			echo 'I am the: '.$_REQUEST['page'].' page!';
		} // end of __construct 
	} // end of class page

	//php class definition
	class php extends page {
	
		function __construct(){
			echo '<br>look ma, I am the: '.$_REQUEST['page'].' page!';
		}// end of php construct
	}// end of php class
	
	//xml class definition
	class xml extends page {
	
		function __construct(){
			echo 'how you doin,  I am the: '.$_REQUEST['page'].' page!';
		}// end of xml construct
	}//end of xml class
	
	class java extends page {
	
		function __construct(){
			echo 'hey hey hey, its the '.$_REQUEST['page'].' page!';
		}//end of java construct
	}//end of java class
	
	class python extends page {
	
		function __construct(){
			echo 'whoot you are looking at the '.$_REQUEST['page'].' page.';
		}//end of python construt
	}//end of python class
?>
