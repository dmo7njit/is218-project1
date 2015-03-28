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

                        echo '<h1>  Integrated Post Secondary Educational Data System </h1>';
                        echo '<h3> For more information on a school click the name.</h3>';
                        echo '<br>';

                        foreach($records as $record) {
                                $i++;
                                $entryReq = $i - 1;
                                echo $i.': ';

                        print_r('<a href="http://web.njit.edu/~dmo7/is218/test/index.php?record=' . $entryReq . '">'.$names[$i-1].'</a>');
                        echo '<br><br>';
                        }
                }
 
                        $record = $records[$_GET['record']];
      
			echo "<table border='1'>";
                 
                        foreach($record as $key => $value) {
                                echo "<tr>";
                                echo "<th> $key </th> <td> $value </td>";
                                echo "</tr>";
                        }
                        
                        echo "</table>";
                        
        }
}

                                
        $newfile = new csvlists();
        $newfile-> csvwork('http://web.njit.edu/~dmo7/is218/test/hd2013.csv', true);
                                
?>
</body>
</html>
