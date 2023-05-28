<html>
    <body>
        <table border="2">
        <tr>
            <th>Roll No</th>
            <th>Name</th>
            <th>Roll No</th>
            <th>Roll No</th>
</tr>

<?php
include("confing.php");
error_reporting(0);
$query = "select * from tablename";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
if($total!=0){
while ($result = mysqli_fetch_assoc($data));
{
// echo $result['rollno']." ".$result['firstname']." ".$result['lastname']." ".$result[---------];


echo "
<tr>
<td>".$result['rollno']."</td>
<td>".$result['name']."</td>

<td>".$result['email']."</td>

<td>".$result['rollno']."</td>
<tr>
";
}
}
else{
    echo "no record";

}
?>
</table>
</body>
</thml>