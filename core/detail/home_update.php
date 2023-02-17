<?php
session_start();
include_once("../../conn.php");

?>
<!DOCTYPE html>
<html>
<title>Home | MyStory</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
  body {
    background-image: url('../asset/img/back_log.jpg');
    background-size: cover;
    height: 100vh;
    padding: 0;
    margin: 0;
  }
</style>

<body>
  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large" onclick="close_side()">Close &times;</button>
    <a href="../main/home_main.php" class="w3-bar-item w3-button">Home Story</a>
    <a href="../detail/home_detail.php" class="w3-bar-item w3-button">Detail Story</a>
    <a href="../log_out.php" class="w3-bar-item w3-button">Log-Out</a>
  </div>

  <div id="main">
    <div class="w3-pale-red">
      <button id="openNav" class="w3-button w3-pale-red w3-xlarge" onclick="open_side()">&#9776;</button>
      <div class="w3-container">
        <h3 style="font-family:'Space Mono', monospace;">My Story <?php echo "✨ " . $_SESSION['username'] . " ✨"; //echo $_SESSION['id_user'];
                                                                  ?></h3>
      </div>

    </div>
    <div style="width: 70%;  margin-top: 40px; margin-left: 15%;">
      <b>
        <h4 style="font-family:'Space Mono', monospace;">Update post story 🧑‍🔧</h4>
      </b>
    </div><br><br>
    <?php
    $id = $_GET['id_main'];
    //echo $id;
    $result = mysqli_query($conn, "SELECT * FROM tb_main WHERE id_main=$id");
    $data = mysqli_fetch_array($result);

    ?>
    <div class="w3-container">
      <form method="post" class="form_diary" style="margin-left: 20%;">
        <p style="margin-top: 30px; font-family:'Space Mono', monospace; ">Apa yang kamu rubah ... 🤷‍♂️?</p>
        <input type="hidden" style="width:40%;  " class="form-control" name="id_main" value=<?php echo $data['id_main']; ?>><br>
        <input type="hidden" style="width:30%;" class="form-control" name="now" aria-describedby="emailHelp" value=<?php echo date("Y-m-d"); ?>>
        <input type="text" style="width:40%;  " class="form-control" name="judul" value=<?php echo $data['judul_diary']; ?>><br>
        <textarea name="content" id="content" cols="30" rows="10" style=" border-radius: 2px;border: unset; background-color: lightgoldenrodyellow; font-family: 'Space Mono', monospace; "><?php echo $data['isi_diary'] ?></textarea>
        <input type="hidden" style="width:30%;" class="form-control" name="id_user" aria-describedby="emailHelp" value=<?php echo $_SESSION['id_user']; ?>><br>
        <button style="margin-right:10px;" type="submit" name="Update" value="Update" class="btn btn-primary">Simpan</button>
      </form>
      <td><input type="hidden" name="update" value="Update"></td>
      <?php
      if (isset($_POST['Update'])) {
        $id = $_POST['id_main'];
        $judul = $_POST['judul'];
        $content = $_POST['content'];

        include_once("../../conn.php");

        $result = mysqli_query($conn, "UPDATE tb_main SET judul_diary='$judul',isi_diary='$content' WHERE id_main='$id'");

        header("Location: home_detail.php");
      }
      ?>
      ?>
      <!-- <b><h4 style="font-family:'Space Mono', monospace; margin-left:15%;">Detail diary 🕵️‍♀️</h4></b><br> -->


      <script>
        function open_side() {
          document.getElementById("main").style.marginLeft = "25%";
          document.getElementById("mySidebar").style.width = "25%";
          document.getElementById("mySidebar").style.display = "block";
          document.getElementById("openNav").style.display = 'none';
        }

        function close_side() {
          document.getElementById("main").style.marginLeft = "0%";
          document.getElementById("mySidebar").style.display = "none";
          document.getElementById("openNav").style.display = "inline-block";
        }
      </script>
</body>

</html>