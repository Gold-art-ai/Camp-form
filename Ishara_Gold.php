<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Firstname=$_POST['fname'];
    $MIName=$_POST['mname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $School=$_POST['scl'];

    $Female=$_POST['F'];
    $grade=$_POST['grade'];
    $father=$_POST['fnam'];
    $fatnum=$_POST['fnum'];
    $mother=$_POST['Mnam'];
    $monum=$_POST['Mnum'];
    $talents=$_POST['talents'];
    $file=$_POST['files'];
    $range=$_POST['range'];
    $clr=$_POST['color'];  
$meh = isset($_POST['pre']) ? $_POST['pre'] : '';
    $cont=$_POST['cont'];
    $country= $_POST['country'];
     echo"<h2>The records</H2>";
     echo"<table border='1'; cellspacing='0px'>";
     echo"<tr>";
     echo"<th>First Name</th>";
     echo"<th>Middle name</th>";
echo"<th>Last name</th>";
echo"<th>Birthday</th> ";
echo"<th>Email</th> ";
echo"<th>Password</th>";

echo"<th>School</th>"; 
echo"<th>Gender</th>";
echo"<th>Father</th>";
echo"<th>Dad's phone number</th>";
echo"<th>Mother</th>";
echo"<th>Mom's phone number</th>";
echo"<th>Talents</th>";
echo"<th>Range</th>";
echo"<th>File</th>";

echo"<th>Grade</th>";
echo"<th>T-shirt color</th>";
echo"<th>IF present</th>";
echo"<th>Continent</th>";
echo"<th>Country</th>";
     echo"</tr>";
     echo"<tr>";
     echo"<td>$Firstname</td>";   
     echo"<td>$MIName</td>";
echo "<td>  $lname</td>"; 
echo"<td>  $age </td>"; 
echo"<td>  $email</td>"; 
echo"<td>  $password </td>"; 
echo"<td>   $School</td>"; 

echo"<td> $Female</td>"; 
echo"<td>  $father </td>"; 
echo"<td>  $fatnum </td>"; 
echo"<td>  $mother </td>";
echo"<td>  $monum </td>"; 
echo"<td>  $talents</td>";
echo"<td>$range</td>";
echo"<td>  $file </td>";  

echo"<td> $grade</td>";
echo"<td> $clr</td>";

echo"<td> $meh</td>";
echo"<td> $cont</td>";
echo"<td> $country</td>";
echo"</tr>";
}
?>





