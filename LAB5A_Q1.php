<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 5a Q1</title>
</head>
<body>
 <?php
 $name = "NURUL AIMAN BINTI HAMIDUN";
 $matric_Number = "DI220053";
 $course = "WEB TECHNOLOGY";
 $year_of_study = "Year 3";
 $address = "TAMAN IRIZ, PARIT RAJA, JOHOR";
 ?>
 <table>
 <tr>
 <td>Name : </td>
 <td><?php echo "$name"; ?> </td>
 </tr>

 <tr>
 <td>Matric Number : </td>
 <td><?php echo "$matric_Number"; ?> </td>
 </tr>

 <tr>
 <td>Course : </td>
 <td><?php echo "$course"; ?> </td>
 </tr>

 <tr>
 <td>Year of study : </td>
 <td><?php echo "$year_of_study"; ?> </td>
 </tr>

 <tr>
 <td>Address : </td>
 <td><?php echo "$address"; ?> </td>
 </tr>

 </table>

</body>
</html>