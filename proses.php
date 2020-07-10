<br><br><center>
<table border='2'><tr><th>Id <th>NIS <th> Nama</tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("ajax");
$cari = $_GET['cari'];
if(!is_numeric($cari)){
$q = mysql_query("select * from siswa where nama like '%$cari%'");
}
else{
$q = mysql_query("select * from siswa where nis like '%$cari%'");
}
while($row=mysql_fetch_array($q)){
	echo "<tr><td>".$row[0]."</td>";
	echo "<td>".$row[1]."</td>";
	echo "<td>".$row[2];
	echo "</tr>";
}

?>
</center>
</table>