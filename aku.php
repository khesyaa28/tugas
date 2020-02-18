<html>
<head>
<title>Data Siswa</title>
</head>
<body>
    <center><h1>Data Siswa X RPL</h1>
<table border="1" width="80%"></center>
<tr>
<th bgcolor="aqua">NIS</th>
<th bgcolor="aqua">Nama</th>
<th bgcolor="aqua">Kelas</th>
<th bgcolor="aqua">Jurusan</th>
<th bgcolor="aqua">Alamat</th>
</tr>


<?php 
include "koneksi.php";
$query="SELECT * FROM siswa";
$sql= mysqli_query($connect,$query);

while($data=mysqli_fetch_array($sql)){
    echo "<tr>";
    echo "<td>".$data['NIS']."</td>";
    echo "<td>".$data['Nama']."</td>";
    echo "<td>".$data['Kelas']."</td>";
    echo "<td>".$data['Jurusan']."</td>";
    echo "<td>".$data['Alamat']."</td>";
    echo "</tr>";
}
?>
</table>

</body>
</html>