<?php
 $url1=$_SERVER['REQUEST_URI'];
    header("Refresh: 3; URL=$url1");
# argument: query results
	function display_table($query_obj)
	{
		$num_rows = pg_num_rows($query_obj);
		$num_fields = pg_num_fields($query_obj);
		# Init a table
		echo ' <table>
			   <tr>';
	    $field_list = array();
		# Diplay header
		for ($i=0; $i<$num_fields; $i++)
		{
			$field_name = pg_field_name($query_obj, $i);
			$field_list[$i] = $field_name;
			echo "<th> $field_name </th>";
		}
		echo "</tr>";
		# diplay a row function
		function display_row($row, $fieldlist)
		{
			echo "<tr>\n";
			foreach ($fieldlist as $fieldname)
			{
				echo "<td>", $row[$fieldname], "</td>";
			}
			echo "</tr>";			
		}
		# display all rows
		for ($row_index=0; $row_index<$num_rows; $row_index++)
		{
			$row = pg_fetch_array($query_obj, $row_index);
			# display a row
			display_row($row, $field_list);
		}
		
		echo "</table>";
	
}
?>

<style>

th, td {
    padding: 6px;
    border: 1px solid #dee2e6;
}
th {
    height: 35px;
    vertical-align: bottom;
}
th {
  background-color: #04AA6D;
  color: white;
}

table, th, td{
    border:2px solid #ccc;
}

tr:hover{
    background-color:#ddd;
    cursor:pointer;
}
table{ width: 750px; margin-left: auto; margin-right: auto; }

</style>
