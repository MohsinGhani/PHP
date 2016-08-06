<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Registration Form</title>
</head>

<body>
<form method="post" action="index.php">
<table border="3" width="500" align="center">
	<tr>
    	<th colspan="2">Student Registration Form</th>
    </tr>
    
    <tr>
    	<td>Student's Name</td>
        <td>
        	<input type="text" name="u_name" />
            <font color="#FF0000" style="font-weight:bold;"><?php echo @$_GET['name'];?></font>
        </td>
    </tr>
    
    <tr>
    	<td>Father's Name</td>
        <td>
        	<input type="text" name="f_name" />
            <font color="#FF0000" style="font-weight:bold;"><?php echo @$_GET['father'];?></font>
        </td>
    </tr>
    
    <tr>
    	<td>School Name</td>
        <td>
        	<input type="text" name="s_name" />
            <font color="#FF0000" style="font-weight:bold;"><?php echo @$_GET['school'];?></font>
        </td>
    </tr>
    
    <tr>
    	<td>Roll Number</td>
        <td>
        	<input type="text" name="roll_no" />
            <font color="#FF0000" style="font-weight:bold;"><?php echo @$_GET['roll'];?></font>
        </td>
    </tr>
    
    <tr>
    	<td>Student class: </td>
        <td>
        	<select name="s_class">
            	<option value="null">select class</option>
                <option value="9th">9th</option>
                <option value="10th">10th</option>
                <option value="11th">11th</option>
                <option value="12th">12th</option>
            </select>
            <font color="#FF0000" style="font-weight:bold;"><?php echo @$_GET['class ']?></font>
        </td>
    </tr>
    
    <tr>
    	<td colspan="6" align="center">
        	<input type="submit" name="submit" value="submit" />
        </td>
    </tr>
    

</table>
</form>

</body>
</html>

<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('srf',$conn);
	
if(isset($_POST['submit']))
{
	$student_name = $_POST['u_name'];
	$student_father = $_POST['f_name'];
	$student_school = $_POST['s_name'];
	$student_roll = $_POST['roll_no'];
	$student_class = $_POST['s_class'];
	
	if($student_name == ''){
	echo "<script> window.open('index.php?name=Name is required','_self'); </script>";
	}
	
	if($student_father == ''){
	echo "<script> window.open('index.php?father=Father Name is Required','_self'); </script>";
	}
	
	if($student_school == ''){
	echo "<script>window.open('index.php?school=School Name is Required','_self');</script>";	
	}
	
	if($student_roll == ''){
	echo "<script>window.open('index.php?roll=Roll Number is Required','_self');</script>";
	}
	
	if($student_class == ''){
	echo "<script>window.open('index.php?class=Class Name is Required','_self');</script>";
	}
	
$que = "insert into student_info(u_name,u_father,u_school,u_roll,u_class) values('$student_name','$student_father','$student_school','$student_roll','$student_class')";
	if(mysql_query($que)){
		echo "Data has bees inserted into database";
	}
}
?>