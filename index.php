<?php
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,'bhavin');
$sql=mysqli_query($con,"SELECT GROUP_CONCAT(if (field_name ='', 'NOVAL', field_name)SEPARATOR '----') as field_name,GROUP_CONCAT(if (field_value ='', 'NOVAL', field_value)SEPARATOR '----') as field_value FROM `wpxn_cf7dbplugin_submits` GROUP BY submit_time ");
$row=mysqli_fetch_array($sql,MYSQLI_BOTH);
echo '<pre>'.$row['field_name'].'</pre>'.'<br/>';
echo '<pre>'.$row['field_value'].'</pre>'.'<br/>';
?>