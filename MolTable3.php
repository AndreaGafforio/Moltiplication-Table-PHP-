<?php
$rows="";
$cols="";



if(isset($_GET['submit'])){
		
	$rows = $_GET['rows'];
	$cols = $_GET['cols'];
	
echo '<table border="1">';

        //nasted for loop
		//rows
        for ($r=1; $r <=$rows; $r++){

            echo'<tr>';

            //column
            for ($c=1 ; $c <= $cols; $c++){
				
                echo ('<td>' .$r*$c.'</td>');
				'</tr>';
			}
        }

  '</table>';
  
} 

echo '<html> <h1>Moltiplication Table</h1>

<form method='get' action='index.php'>
<p>Please enter a number:</p>
<input type='text' name= 'rows' /><br>
<p>Please enter a number:</p>
<input type='text' name= 'cols'/><br><br>
<input type='submit' name='submit' id='btn' value='createtable' />
</form> <br><br>
</html>'
   
  
?>