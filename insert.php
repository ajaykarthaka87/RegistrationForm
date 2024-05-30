<?php 
$server="localhost";
$user="ajay";
$pass="ajay@9676";
$dbname="ajay";
$con =mysqli_connect($server,$user,$pass,$dbname);

$sql = "INSERT INTO hello VALUES 
('{$_POST['id']}','{$_POST['name']}','{$_POST['marks']}')";
$res = mysqli_query($con,$sql);
if($res)
{
  $sql2="select * from hello";
  $sres=mysqli_query($con,$sql2);
  echo "<table border=1>
  <tr>
  <th>ID</th>
  <th>Name</th>
  <th>Marks</th>
  </tr>";
  while($row= mysqli_fetch_array($sres))
  {
    echo "<tr>";
    echo "<td> $row[0]</td>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "</tr>";
  }
  echo "</table>";
}
else
{
echo "Issue with query";
}
mysqli_close($con);
?>