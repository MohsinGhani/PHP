<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Viewing Data</title>
</head>

<body>
<table border="2" align="center" width="1000">
	<tr align="center">
    	<td colspan="7"><h1>Viewing Data From DataBase</h1></td>
    </tr>
    
    <tr align="center">
    	<th> S.no </th>
    	<th>Student Name</th>
        <th>Father Name</th>
        <th>Roll No.</th>
        <th>Delete</th>
        <th>Edit</th>
        <th>Details</th>
    </tr>
    <tr>
<?php
$conn = mysql_connect('localhost','root','');
$db = mysql_select_db('srf',$conn);

$que = "select * from student_info order by 1 DESC";
$run = mysql_query($que);
$i = 1;
while($row=mysql_fetch_array($run))
{
	$u_name = $row[1];
	$u_father = $row[2];
	$u_roll = $row[4];

?>
		<td><?php echo $i; $i++; ?></td>
    	<td><?php echo $u_name ?></td>
        <td><?php echo $u_father ?></td>
        <td><?php echo $u_roll ?></td>
        <td>Delete</td>
        <td>Edit</td>
        <td>Details</td>
    </tr>
<?php } ?>
</table>

</body>
</html>