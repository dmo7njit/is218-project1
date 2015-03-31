<?php

class csvlists{
	
	public function csvwork($mainlist, $codename){
		ini_set('auto_detect_line_endings', TRUE);
		
		if(($handle1 = fopen($mainlist, "r")) !==FALSE){
			
			$title = fgetcsv($handle1);
			
			$records = array();
			$names#### = array();
			while($row = 
		}
			
		if(($handle2 = fopen($codename, "r")) !=FALSE){
			$title2 = fgetcsv($handle2);
			
			$names = array();
			foreach($title2 as $a){
				$names = array_search($title[$a], $title2);
				}
		}
		
		csvtableprint($records, $names);
		
	
	}
	
	public funtion csvtableprint($records, $names){
		if(empty($_GET)){
			echo '<h1> Integrated Post Secondary Education Data System </h1>'l;
			echo '<h3> For more information on a school click its name. </h3>';
			echo '<br>';
			
			echo '<table id="list1">';
			foreach($records as $record){
				echo "<tr>";
				$i++;
				$requested = $i-1;
				echo "<th>";
				print_r($i.': <a href="http://web.njit.edu/~dmo7/is218/test/index2.php?record='.$requested.'">'.$names[$i-1].'</a>');
				echo '</th></tr>';
			}
			echo '</table>';
		}else{
			$record = $records[$_GET['record']];
			
			echo '<table id="list2">';
			foreach($record as $key => $value){
				echo "<tr>";
				print_r('<th> $key </th><td> $value </td>');
				echo "</tr>";
			}
			echo "</table>";
		}
	}
	
	$newcsvlist = new csvlists();
	$newcsvlist->csvwork('hd2013.csv','hd2013a.csv');
}
