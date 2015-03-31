<html>
<head>
<title>Project 1</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php

class csvlists {
        public $mainlist;
        public $prettyNames;
        public $names;

        public function csvwork($mainlist, $prettyNames){

                ini_set('auto_detect_line_endings',TRUE);


                if (($handle = fopen($mainlist, "r")) !== FALSE) {

                $title = fgetcsv($handle);

                $records = array();
                $names = array();
                while($row = fgetcsv($handle)){
                        $arr = array();
                        foreach($title as $c => $col)
                                $arr[$col] = $row[$c];
                        $records[] = $arr;
                        $names[] = $row[1];
                }

                fclose($handle);
                }

                if(empty($_GET)) {

                        echo '<h1> Integrated Post Secondary Educational Data System </h1>';
						echo '<br>';
						echo '<table id="list1">';
						foreach($records as $record) {
							echo "<tr>";
							$i++;
							$entryReq = $i - 1;
							echo "<th>";				
							print_r($i.': '.$names[$i-1]);
							print_r('<a href="http://web.njit.edu/~dmo7/is218/project1/index.php?record='.$entryReq.'">Click for more information.</a>');
							echo "</th></tr>";
                        }
			echo "</table>"; 
                }
 
                        $record = $records[$_GET['record']];
      
			echo "<table>";
                 
                        foreach($record as $key => $value) {
                                echo "<tr>";
                                echo "<th> $key </th> <td> $value </td>";
                                echo "</tr>";
                        }
                        
                        echo "</table>";
                        
        }
}

                                
        $newfile = new csvlists();
        $newfile-> csvwork('hd2013_short.csv', true);
                                
?>
</body>
</html>
