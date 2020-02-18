<html>
<head>
<title>Data User</title>
</head>
<body>
    <table border="1" width="50%"></center>
    <tr>
    <th bgcolor="khaki">id_user</th>
    <th bgcolor="khaki">Nama</th>
    <th bgcolor="khaki">Alamat</th>
    <th bgcolor="khaki">Telp</th>
    <th bgcolor="khaki">Level User</th>
    </tr>
    <?php 
include "connect.php";
$query="SELECT * FROM data_user";
$sql= mysqli_query($connect,$query);

while($data=mysqli_fetch_array($sql)){
    echo "<tr>";
    echo "<td>".$data['id_user']."</td>";
    echo "<td>".$data['Nama']."</td>";
    echo "<td>".$data['Alamat']."</td>";
    echo "<td>".$data['Telp']."</td>";
    echo "<td>".$data['Level User']."</td>";
    echo "</tr>";
}
?>
</table>

</body></html>