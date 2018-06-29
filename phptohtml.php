<?php
$DB_USER = "id6023747_thefarmerclub";     // Your database user name
$DB_PASSWORD = "thefarmerclub";		// Your database password (mention your db password here)
$DB_DATABASE ="id6023747_thefarmerclub"; // Your database name
$DB_SERVER ="localhost";
			// db server (Mostly will be 'local' host)
$conn=mysqli_connect($DB_SERVER,$DB_USER,$DB_PASSWORD,$DB_DATABASE)
?>

<!DOCTYPE html>
<html>
<head>
    
    
    <style>
    table
    {
        border:2px solid black;
         border-collapse: collapse;
         width=50%;
    }
    th,td
    {
        border:1px solid black;
        padding:5px;
        text-align:center;
       
    }
    th
    {
        background-color:gray;
    }
    
    </style>
</head>
<body>
<?php
$sql="SELECT  *FROM weather ORDER BY id DESC LIMIT 1;";
function executeQuery() 
{
$result=mysqli_query($conn,$sql)};
?>
<h1>*****Godrej*****</h1>
<table>
<caption>Sensor data from equipment</caption>
<thead>
        <tr>
	<th>SR.NO</th>
	<th>DATA 1</th>
	<th>DATA 2</th>
				
	</tr>
	</thead>
	<tbody>
	<?php
	while ($row = mysqli_fetch_array($result))
	{
			
	echo '<tr>
	<td>'.$row['id'].'</td>
	<td>'.$row['temp'].'</td>
        <td>'.$row['hum'].'</td>
					
	</tr>';

	}
		
     ?>
</table>
</body>
</html>