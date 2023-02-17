<?php
include_once("../../conn.php");
$id_user = $_SESSION['id_user'];
//$limit = "DESC LIMIT 1";
$data = mysqli_query($conn, "SELECT * FROM tb_main tm 
LEFT JOIN tb_user tu ON tu.id_user = tm.id_user
ORDER BY tu.id_user DESC ");
while ($d = mysqli_fetch_array($data)) {
?>
    <div style="border: 1px solid;padding: 10px; box-shadow: 5px 10px; font-family:'Space Mono', monospace; width: 70%; background-color: lightgoldenrodyellow; font-family: 'Space Mono', monospace; margin-left: 20%; ">
        <tr>
            <td><?php echo $d['time_diary'] ?></td><br>
            <b>
                <td><?php echo $d['judul_diary'] ?></td>
            </b><br>
            <td><?php echo $d['isi_diary'] ?></td>
            </b><br><br>
            <b>
                <td>Author by: <?php echo $d['name'] ?></td>
            </b>
        </tr>
    </div>

<?php } ?>