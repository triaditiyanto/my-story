<?php
include_once("../../conn.php");
$id_user = $_SESSION['id_user'];
//$limit = "DESC LIMIT 1";
$data = mysqli_query($conn, "SELECT * FROM tb_main WHERE id_user = '$id_user' ORDER BY id_main DESC LIMIT 3");
while ($d = mysqli_fetch_array($data)) {
?>
	<div style="border: 1px solid;padding: 10px; box-shadow: 5px 10px; font-family:'Space Mono', monospace; width: 70%; background-color: lightgoldenrodyellow; font-family: 'Space Mono', monospace; margin-left: 20%; ">
		<tr>
			<td><?php echo $d['time_diary'] ?></td><br>
			<b>
				<td><?php echo $d['judul_diary'] ?></td>
			</b><br>
			<td><?php echo $d['isi_diary'] ?></td>
		</tr>
	</div>

<?php } ?>